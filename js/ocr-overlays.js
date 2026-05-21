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
      const span = document.createElement("span");
      span.className = "word";
      span.textContent = item.t;
      span.style.left = `${item.x * 100}%`;
      span.style.top = `${item.y * 100}%`;
      span.style.width = `${item.w * 100}%`;
      span.style.height = `${item.h * 100}%`;
      span.style.fontSize = `${Math.max(1, item.h * rect.height * 1.08)}px`;
      layer.appendChild(span);
      words.push(span);
    }
  }

  fetch("./assets/ocr/overlays.json")
    .then((response) => response.json())
    .then((json) => {
      data = json;
      layer.classList.add("has-word-ocr");
      render();
    })
    .catch(() => {});

  window.addEventListener("resize", render, { passive: true });
  art.addEventListener("load", render);
})();
