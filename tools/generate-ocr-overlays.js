const fs = require("fs");
const path = require("path");
const { execFileSync } = require("child_process");

const root = path.resolve(__dirname, "..");
const tesseract = "C:\\Program Files\\Tesseract-OCR\\tesseract.exe";
const pages = ["studio", "professionisti", "settori", "metodo", "tariffe", "sedi"];
const variants = ["desktop", "mobile"];

function pngSize(file) {
  const buffer = fs.readFileSync(file);
  if (buffer.toString("ascii", 1, 4) !== "PNG") {
    throw new Error(`Not a PNG: ${file}`);
  }
  return {
    width: buffer.readUInt32BE(16),
    height: buffer.readUInt32BE(20),
  };
}

function parseTsv(tsv, size) {
  const lines = tsv.trim().split(/\r?\n/);
  const header = lines.shift().split("\t");
  const index = Object.fromEntries(header.map((name, i) => [name, i]));

  return lines
    .map((line) => line.split("\t"))
    .filter((cols) => cols[index.level] === "5")
    .map((cols) => ({
      text: (cols[index.text] || "").trim(),
      confidence: Number(cols[index.conf]),
      left: Number(cols[index.left]),
      top: Number(cols[index.top]),
      width: Number(cols[index.width]),
      height: Number(cols[index.height]),
    }))
    .filter((word) => word.text && word.confidence >= 20 && word.width > 2 && word.height > 2)
    .map((word) => ({
      t: word.text,
      c: Math.round(word.confidence),
      x: +(word.left / size.width).toFixed(6),
      y: +(word.top / size.height).toFixed(6),
      w: +(word.width / size.width).toFixed(6),
      h: +(word.height / size.height).toFixed(6),
    }));
}

const output = {};

for (const page of pages) {
  output[page] = {};
  for (const variant of variants) {
    const image = path.join(root, "assets", "mockups", `${page}-${variant}.png`);
    const size = pngSize(image);
    const tsv = execFileSync(
      tesseract,
      [image, "stdout", "-l", "eng", "--psm", variant === "mobile" ? "11" : "6", "tsv"],
      { encoding: "utf8", maxBuffer: 50 * 1024 * 1024 }
    );
    output[page][variant] = {
      width: size.width,
      height: size.height,
      words: parseTsv(tsv, size),
    };
    console.log(`${page}-${variant}: ${output[page][variant].words.length} words`);
  }
}

fs.writeFileSync(
  path.join(root, "assets", "ocr", "overlays.json"),
  JSON.stringify(output, null, 2)
);
