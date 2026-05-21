<?php
/**
 * Template Name: Blog
 */
?>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Blog - Freedom Factory Studio Legale</title>
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
    <h1 class="page-title-css">Blog</h1>

    <main class="studio-content page-text">
      <p>Contenuti in aggiornamento.</p>
    </main>

    <nav class="page-nav">
      <a href="index.html">HOME</a>
      <a href="studio.php">STUDIO</a>
      <a href="professionisti.php">AVVOCATI</a>
      <a href="settori.php">SETTORI</a>
      <a href="metodo.php">METODO</a>
      <a href="tariffe.php">TARIFFE</a>
      <a href="sedi.php">SEDI</a>
      <a href="blog.php" class="active">BLOG</a>
    </nav>
  </div>
</div>

<script>
  document.body.classList.add('inner-page', 'template-blog');
</script>
