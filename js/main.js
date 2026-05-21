function getLayoutDimensions() {
  const container = document.querySelector('.scaled-container');
  const width = window.innerWidth;

  if (width <= 440) {
    container.style.width = '100%';
    container.style.height = 'auto';
    container.style.transform = 'none';
    container.style.left = '0';
    container.style.top = '0';
    container.style.transformOrigin = 'top center';
    return null;
  }

  const datasetWidth = Number(container.dataset.width);
  const datasetHeight = Number(container.dataset.height);

  if (datasetWidth && datasetHeight) {
    return { width: datasetWidth, height: datasetHeight };
  }

  if (width <= 750) {
    const mobileWidth = 1400;
    const mobileHeight = 2200;
    return { width: mobileWidth, height: mobileHeight };
  }

  if (width <= 1024) {
    const tabletWidth = 1400;
    const tabletHeight = 2050;
    return { width: tabletWidth, height: tabletHeight };
  }
  
  // Default: desktop
  return { width: 1440, height: 1105 };
}

function scaleLayout() {
  const container = document.querySelector('.scaled-container');
  const wrapper = document.querySelector('.viewport-wrapper');

  const layout = getLayoutDimensions();
  if (!container || !wrapper || !layout) return;

  // Aggiorna dataset e dimensioni
  container.dataset.width = layout.width;
  container.dataset.height = layout.height;
  container.style.width = `${layout.width}px`;
  container.style.height = `${layout.height}px`;

  // Calcolo dello scale
  const scaleX = wrapper.clientWidth / layout.width;
  const scaleY = wrapper.clientHeight / layout.height;
  const scale = Math.min(scaleX, scaleY) * 0.9;

  // Applica trasformazioni e centramento
  container.style.transform = `translateX(-50%) scale(${scale})`;
  container.style.left = '50%';
  container.style.top = '0';
  container.style.transformOrigin = 'top center';
}

// Event listeners
window.addEventListener('resize', scaleLayout);
window.addEventListener('DOMContentLoaded', scaleLayout);
window.addEventListener('DOMContentLoaded', () => {
  const pageLinks = {
    HOME: 'index.html',
    STUDIO: 'studio.html',
    AVVOCATI: 'professionisti.html',
    SETTORI: 'settori.html',
    METODO: 'metodo.html',
    TARIFFE: 'tariffe.html',
    SEDI: 'sedi.html',
    BLOG: 'blog.html'
  };

  document.querySelectorAll('a').forEach((link) => {
    const key = link.textContent.replace(/[^A-Za-z]/g, '').toUpperCase();
    if (pageLinks[key] && (!link.getAttribute('href') || link.getAttribute('href') === '#')) {
      link.setAttribute('href', pageLinks[key]);
    }
  });

  document.querySelectorAll('.privacy span').forEach((item) => {
    const key = item.textContent.toUpperCase();
    const target = key.includes('PRIVACY') ? 'privacy-policy.html' : key.includes('LEGALI') ? 'note-legali.html' : '';
    if (!target) return;
    item.setAttribute('role', 'link');
    item.tabIndex = 0;
    item.style.cursor = 'pointer';
    item.addEventListener('click', () => {
      window.location.href = target;
    });
    item.addEventListener('keydown', (event) => {
      if (event.key === 'Enter') window.location.href = target;
    });
  });
});

const hamburgerButton = document.querySelector('.hamburger');
const svg = `<svg width="28" height="28" viewBox="0 0 24 24" fill="none"
xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
<path d="M3 4.5H19"  stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
<path d="M3 9H19"  stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
<path d="M3 13.5H19" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
<path d="M3 18H19" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
</svg>`
const mobileMenu = document.querySelector('.mobile-menu');
const mobileTitle = document.querySelector('.mobile-title');
let isMenuOpen = false;
if (hamburgerButton && mobileMenu) {
  hamburgerButton.addEventListener("click", () => {
    mobileMenu.classList.toggle('active');
    isMenuOpen = !isMenuOpen;
    hamburgerButton.style.position = isMenuOpen ? 'fixed' : 'static';
    hamburgerButton.innerHTML = isMenuOpen ? '&times;' : svg;
    mobileTitle.style.color = isMenuOpen ? 'black' : 'white';
    if (isMenuOpen) {
      hamburgerButton.style.top = '0';
      hamburgerButton.style.right = '-15px';
    }
  });
}

const cookiesButtonAccetto = document.querySelector('#on');
if (cookiesButtonAccetto) {
  cookiesButtonAccetto.addEventListener('click', () => {
    document.querySelector('.cookie-banner').style.display = 'none';
    localStorage.setItem('cookiesAccepted', 'true');
  });
}
