(function () {
  const page = (document.querySelector(".mockup-page")?.className.match(/page-([a-z-]+)/) || [])[1];
  const stage = document.querySelector(".mockup-stage");
  const art = document.querySelector(".mockup-art");
  const layer = document.querySelector(".selectable-text-layer");

  if (!page || !stage || !art || !layer) return;

  let data = null;
  let words = [];

  function variant() {
    return window.matchMedia("(max-width: 640px)").matches ? "mobile" : "desktop";
  }

  function clearWords() {
    for (const word of words) word.remove();
    words = [];
  }

  function render() {
    if (!data) return;
    const current = data[page]?.[variant()];
    if (!current) return;

    clearWords();
    const rect = stage.getBoundingClientRect();

    for (const item of current.words) {
      const targetWidth = item.w * rect.width;
      const targetHeight = item.h * rect.height;
      const span = document.createElement("span");
      span.className = "word";
      span.textContent = item.t;
      span.style.left = `${item.x * 100}%`;
      span.style.top = `${item.y * 100}%`;
      span.style.fontSize = `${Math.max(1, targetHeight * 1.1)}px`;
      span.style.lineHeight = `${Math.max(1, targetHeight)}px`;
      layer.appendChild(span);

      const naturalWidth = span.getBoundingClientRect().width;
      if (naturalWidth > 0 && targetWidth > 0) {
        span.style.transform = `scaleX(${targetWidth / naturalWidth})`;
      }

      words.push(span);
    }
  }

  fetch("./assets/ocr/overlays.json")
    .then((response) => response.json())
    .then((json) => {
      data = json;
      layer.classList.add("has-word-ocr");
      if (document.fonts?.ready) {
        document.fonts.ready.then(render);
      } else {
        render();
      }
    })
    .catch(() => {});

  window.addEventListener("resize", render, { passive: true });
  art.addEventListener("load", render);
})();
