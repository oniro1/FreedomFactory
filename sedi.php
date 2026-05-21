<?php
/**
 * Template Name: Sedi
 */
// get_header();
?>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Le sedi di Studio Legale Freedom Factory a Bologna, Napoli, Pescara e Treviso." />
<meta name="author" content="Studio Legale Freedom Factory" />

<link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png" />

<title>Sedi - Freedom Factory Studio Legale</title>

<link rel="stylesheet" href="./style/main.css" />
<link rel="stylesheet" href="./style/pages.css" />
<script src="./js/main.js" defer></script>

<div class="mobile-header">
  <div class="top-bar">
    <img src="./assets/logo.jpg" alt="Logo" class="logo-mobile" />
  </div>
  <div class="mobile-title">
    <h2>STUDIO LEGALE</h2>
  </div>
  <button class="hamburger" id="hamburger" aria-label="Apri menu" aria-controls="mobile-menu">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
      <path d="M3 4.5H19"  stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
      <path d="M3 9H19"  stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
      <path d="M3 13.5H19" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
      <path d="M3 18H19" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
    </svg>
  </button>
</div>

<nav class="mobile-menu" id="mobile-menu" aria-hidden="true">
  <ul class="menu-links">
    <li><a href="index.html">HOME</a></li>
    <li><a href="studio.php">STUDIO</a></li>
    <li><a href="professionisti.php">AVVOCATI</a></li>
    <li><a href="settori.php">SETTORI</a></li>
    <li><a href="metodo.php">METODO</a></li>
    <li><a href="tariffe.php">TARIFFE</a></li>
    <li><a href="sedi.php">SEDI</a></li>
    <li><a href="blog.php">BLOG</a></li>
  </ul>
</nav>

<div class="viewport-wrapper">
  <div class="scaled-container" data-width="1440" data-height="935">
    <div class="page-title-wrap">
      <img src="./assets/titoli-svg/sedi.svg" alt="Sedi" class="page-title-img" />
    </div>

    <div class="sedi-grid">
      <article class="city-card">
        <h2 class="city-name">BOLOGNA</h2>
        <div class="city-photo-wrap">
          <img src="./assets/bologna.png" alt="Sede Freedom Factory Bologna" />
        </div>
        <span class="city-address-pill">BOLOGNA-via d'Azeglio, 35</span>
        <span class="city-info">40123</span>
      </article>

      <article class="city-card">
        <h2 class="city-name">NAPOLI</h2>
        <div class="city-photo-wrap">
          <img src="./assets/napoli.png" alt="Sede Freedom Factory Napoli" />
        </div>
        <span class="city-address-pill">NAPOLI-via Toledo, 329</span>
        <span class="city-info">80134</span>
      </article>

      <article class="city-card">
        <h2 class="city-name">PESCARA</h2>
        <div class="city-photo-wrap">
          <img src="./assets/pescara.png" alt="Sede Freedom Factory Pescara" />
        </div>
        <span class="city-address-pill">PESCARA-via Ostuni, 38</span>
        <span class="city-info">65121</span>
      </article>

      <article class="city-card">
        <h2 class="city-name">TREVISO</h2>
        <div class="city-photo-wrap">
          <img src="./assets/treviso.png" alt="Sede Freedom Factory Treviso" />
        </div>
        <span class="city-address-pill">TREVISO-via Sartori, 2</span>
        <span class="city-info">31100</span>
      </article>
    </div>

    <nav class="page-nav">
      <a href="index.html">HOME</a>
      <a href="studio.php">STUDIO</a>
      <a href="professionisti.php">AVVOCATI</a>
      <a href="settori.php">SETTORI</a>
      <a href="metodo.php">METODO</a>
      <a href="tariffe.php">TARIFFE</a>
      <a href="sedi.php" class="active">SEDI</a>
      <a href="blog.php">BLOG</a>
    </nav>
  </div>
</div>

<div class="landscape-warning">
  <div class="warning-content">
    <h2>Ruota il dispositivo in modalita verticale</h2>
    <p>Per una migliore esperienza di navigazione, ruota il tuo dispositivo in modalita verticale.</p>
  </div>
</div>

<div class="cookie-banner">
  <p>Utilizziamo cookie tecnici per il corretto funzionamento del sito.</p>
  <div class="btn-cookie">
    <span><a href="cookies.php">View more</a></span>
    <span><a href="cookies.php">Cookie Settings</a></span>
    <span id="on"><a href="#">Accetto</a></span>
  </div>
</div>

<script>
  document.body.classList.add('inner-page', 'template-sedi');
</script>

<?php
// get_footer();
?>
