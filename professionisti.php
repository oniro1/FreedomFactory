<?php
/**
 * Template Name: Professionisti
 */
// get_header();
?>

<!-- META E RISORSE -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="I professionisti di Studio Legale Freedom Factory: Roberto Filocamo, Antonia Zunica, Filippo Maria Moffa." />
<meta name="author" content="Studio Legale Freedom Factory" />

<link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png" />

<title>Professionisti — Freedom Factory Studio Legale</title>

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
      <img src="./assets/titoli-svg/professionisti.svg" alt="Professionisti" class="page-title-img" />
    </div>

    <!-- LAWYERS GRID -->
    <div class="lawyers-grid">

      <!-- ======= ROBERTO FILOCAMO ======= -->
      <div class="lawyer-card roberto">
        <div class="lawyer-photo-wrap">
          <img src="./assets/img3.jpg" alt="Roberto Filocamo" />

          <!-- Name overlay — top left -->
          <div class="lawyer-overlay-top">
            <span class="first-name">ROBERTO</span>
            <span class="last-name">FILOCAMO</span>
            <span class="role-badge">Cassazionista</span>
          </div>

          <!-- Description — bottom left strip -->
          <div class="lawyer-overlay-desc">
            Gentile, Corretto e Leale, Roberto istruisce innate alle
            giurisdizionali assertori con raffinato talento e spirito senza di
            responsabilità
          </div>
        </div>
        <div class="lawyer-contact">
          robertofilocamo@icloud.com<br />
          347.4432641
        </div>
      </div>

      <!-- ======= ANTONIA ZUNICA ======= -->
      <div class="lawyer-card antonia">
        <div class="lawyer-photo-wrap">
          <img src="./assets/img1.jpg" alt="Antonia Zunica" />

          <!-- Description — top right overlay -->
          <div class="lawyer-overlay-desc-topright">
            Solare, Sincera e Strana, Antonia difonde con il sorriso suendo al
            tecnicismo giuridico un' disarmante eleganza nell'creare a voce alta i
            diritti dei propri clienti
          </div>

          <!-- Name — bottom center -->
          <div class="lawyer-overlay-bottom-center">
            <span class="full-name">ANTONIA ZUNICA</span>
          </div>
        </div>
        <div class="lawyer-contact">
          zunica.avv@gmail.com<br />
          340.6146869
        </div>
      </div>

      <!-- ======= FILIPPO MARIA MOFFA ======= -->
      <div class="lawyer-card filippo">
        <div class="lawyer-photo-wrap">
          <img src="./assets/img2.jpg" alt="Filippo Maria Moffa" />

          <!-- Name — top right, yellow background -->
          <div class="lawyer-overlay-top-right">
            <span class="first-name">FILIPPO</span>
            <span class="last-name">MARIA MOFFA</span>
          </div>

          <!-- Description — bottom left -->
          <div class="lawyer-overlay-desc">
            Dinamico, Disponibile e Determinato, Filippo porta quotidianamente
            con tenacia e coraggio per chi vale difficoltà senza autorità e
            giustizia
          </div>
        </div>
        <div class="lawyer-contact">
          filippo_moffa@hotmail.com<br />
          392.4777171
        </div>
      </div>

    </div><!-- /.lawyers-grid -->

    <!-- BOTTOM NAV -->
    <nav class="page-nav">
      <a href="index.html">HOME</a>
      <a href="studio.php">STUDIO</a>
      <a href="professionisti.php" class="active">AVVOCATI</a>
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
  document.body.classList.add('inner-page', 'template-professionisti');
</script>

<?php
// get_footer();
?>
