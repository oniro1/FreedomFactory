<?php
/**
 * Template Name: Studio
 */
// get_header();
?>

<!-- META E RISORSE -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Studio Legale Freedom Factory: chi siamo, la nostra storia e la nostra missione." />
<meta name="author" content="Studio Legale Freedom Factory" />

<link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png" />

<title>Studio — Freedom Factory Studio Legale</title>

<link rel="stylesheet" href="./style/main.css" />
<link rel="stylesheet" href="./style/pages.css" />
<script src="./js/main.js" defer></script>

<!-- MOBILE HEADER -->
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

<!-- MOBILE MENU -->
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

    <!-- TITLE -->
    <div class="page-title-wrap">
      <img src="./assets/titoli-svg/studio.svg" alt="Studio" class="page-title-img" />
    </div>

    <!-- CONTENT -->
    <div class="studio-content page-text">
      <p>
        Forte dell'interazione tra professionisti appartenenti a vari arse, Freedom Factory trova la
        propria ragione d'essere nell'ambizioso progetto di precostituire soluzioni generali ed astratte
        da plasmare in relazione alle singole problematiche concrete garantendo, così, non solo la
        possibilità di conoscere preventivamente le linee guida dello studio ma, altresì, di condividerne
        strategie e metodi alla luce di un quadro ben definito dei costi da sostenere e delle insidie da
        affrontare.
      </p>
      <p>
        Di qui, nell'ottica di offrire servizi all'avanguardia in specifici settori del diritto, abbiamo
        elaborato un metodo oggettivo di analisi delle pretese tributarie, una variegata gamma di
        operazioni societarie, un ventaglio di strategie per la gestione dei debiti e la riscossione dei
        crediti ma, soprattutto, un approccio costituzionalmente orientato di tutela dei diritti dei
        lavoratori pubblici e privati che, naturalmente, mettiamo a disposizione dei nostri clienti, a costi
        certi, unitamente all'assistenza nelle principali controversie di natura amministrativa, nei
        procedimenti penali di matrice tributaria ed, in ultimo, nei giudizi di separazione dei coniugi
        con riferimento agli aspetti prettamente patrimoniali.
      </p>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="page-nav">
      <a href="index.html">HOME</a>
      <a href="studio.php" class="active">STUDIO</a>
      <a href="professionisti.php">AVVOCATI</a>
      <a href="settori.php">SETTORI</a>
      <a href="metodo.php">METODO</a>
      <a href="tariffe.php">TARIFFE</a>
      <a href="sedi.php">SEDI</a>
      <a href="blog.php">BLOG</a>
    </nav>

  </div>
</div>

<!-- LANDSCAPE WARNING -->
<div class="landscape-warning">
  <div class="warning-content">
    <h2>Ruota il dispositivo in modalità verticale</h2>
    <p>Per una migliore esperienza di navigazione, ruota il tuo dispositivo in modalità verticale.</p>
  </div>
</div>

<!-- COOKIE BANNER -->
<div class="cookie-banner">
  <p>Utilizziamo cookie tecnici per il corretto funzionamento del sito.</p>
  <div class="btn-cookie">
    <span><a href="cookies.php">View more</a></span>
    <span><a href="cookies.php">Cookie Settings</a></span>
    <span id="on"><a href="#">Accetto</a></span>
  </div>
</div>

<script>
  document.body.classList.add('inner-page', 'template-studio');
</script>

<?php
// get_footer();
?>
