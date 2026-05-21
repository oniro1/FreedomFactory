<?php
/**
 * Template Name: Tariffe
 */
// get_header();
?>

<!-- META E RISORSE -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Le tariffe di Studio Legale Freedom Factory: trasparenza e costi certi per ogni servizio." />
<meta name="author" content="Studio Legale Freedom Factory" />

<link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png" />

<title>Tariffe — Freedom Factory Studio Legale</title>

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
      <img src="./assets/titoli-svg/tariffe.svg" alt="Tariffe" class="page-title-img" />
    </div>

    <!-- CONTENT -->
    <div class="page-text studio-content">
      <p>
        Nel pieno rispetto delle tabelle professionali e, soprattutto, in considerazione delle variabili
        legate al valore delle controversie, i professionisti di Freedom Factory, nell'ottica di assicurare
        una scelta consapevole alla luce, anche, delle relative spese da sostenere, offrono i propri servizi
        a partire dalle seguenti tariffe:
      </p>
      <p>
        – il primo consulto inerente l'ambito del problema, nonché le soluzioni astrattamente percorribili,
        non comporta alcun costo essendo finalizzato, non solo ad instaurare un rapporto di fiducia tra le
        parti ma, altresì, ad offrire un approccio qualificato diretto a garantire una scelta ragionata in
        ordine al conferimento dell'incarico;
      </p>
      <p>
        – il parere scritto sulle specifiche problematiche con relativa definizione della strategia da
        adottare e degli oneri economici da sostenere, tendenzialmente, ha un costo di 200 Euro comprensivo
        di IVA, che, naturalmente, viene assorbito dall'onorario successivamente pattuito in caso di
        conferimento dell'incarico;
      </p>
      <p>
        – l'assistenza nell'espletamento di adempimenti fiscali ed amministrativi ha un costo, comprensivo
        di IVA, a partire da 50 Euro per ciascun atto.<br />
        (Consulenza nella redazione ed invio delle Dichiarazioni dei redditi, delle Dichiarazioni
        TARI,IMU,IVA; delle dichiarazioni di successione; delle pratiche catastali;<br />
        Assistenza nella registrazione di contratti, nell'apertura di partite IVA, nella presentazione di
        domande finalizzate all'ottenimento di bonus, finanziamenti pubblici; borse di studio; rimborsi;
        licenze, permessi, nulla osta; autorizzazioni urbanistiche e commerciali; concessioni etc)
      </p>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="page-nav">
      <a href="index.html">HOME</a>
      <a href="studio.php">STUDIO</a>
      <a href="professionisti.php">AVVOCATI</a>
      <a href="settori.php">SETTORI</a>
      <a href="metodo.php">METODO</a>
      <a href="tariffe.php" class="active">TARIFFE</a>
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
  document.body.classList.add('inner-page', 'template-tariffe');
</script>

<?php
// get_footer();
?>
