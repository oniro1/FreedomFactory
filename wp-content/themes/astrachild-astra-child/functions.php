<?php
// Impedisce accesso diretto
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Caricamento CSS e JS personalizzati
function ff_enqueue_assets() {
    $theme_dir = get_stylesheet_directory();
    $theme_uri = get_stylesheet_directory_uri();

    // CSS principale
    wp_enqueue_style(
        'ff-main-style',
        $theme_uri . '/style/main.css',
        array(),
        filemtime( $theme_dir . '/style/main.css' )
    );

    // CSS pagine interne
    wp_enqueue_style(
        'ff-pages-style',
        $theme_uri . '/style/pages.css',
        array( 'ff-main-style' ),
        filemtime( $theme_dir . '/style/pages.css' )
    );

    // CSS OCR mockup
    wp_enqueue_style(
        'ff-mockup-style',
        $theme_uri . '/style/mockup-pages.css',
        array( 'ff-pages-style' ),
        filemtime( $theme_dir . '/style/mockup-pages.css' )
    );

    // JS principale
    wp_enqueue_script(
        'ff-main-script',
        $theme_uri . '/js/main.js',
        array(),
        filemtime( $theme_dir . '/js/main.js' ),
        true
    );

    // JS OCR overlays
    wp_enqueue_script(
        'ff-ocr-overlays',
        $theme_uri . '/js/ocr-overlays.js',
        array(),
        filemtime( $theme_dir . '/js/ocr-overlays.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'ff_enqueue_assets' );

// Aggiunta meta tag e favicon in head
function ff_add_meta_tags() {
    ?>
    <meta name="description" content="Studio Legale Freedom Factory: consulenza e assistenza legale in diritto tributario, amministrativo, societario e del lavoro. Sedi a Napoli, Bologna, Pescara e Treviso.">
    <meta name="keywords" content="studio legale, avvocati, Freedom Factory, diritto tributario, diritto amministrativo, diritto del lavoro, consulenza legale, Napoli, Bologna, Pescara, Treviso">
    <meta name="author" content="Studio Legale Freedom Factory">

    <!-- Open Graph -->
    <meta property="og:title" content="Freedom Factory Studio Legale">
    <meta property="og:description" content="Consulenza e assistenza legale. Sedi a Napoli, Bologna, Pescara e Treviso.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
    <meta property="og:image" content="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/logo.jpg' ); ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Freedom Factory Studio Legale">
    <meta name="twitter:description" content="Consulenza e assistenza legale. Sedi a Napoli, Bologna, Pescara e Treviso.">
    <meta name="twitter:image" content="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/logo.jpg' ); ?>">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/favicon_io/favicon.ico' ); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/favicon_io/apple-touch-icon.png' ); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/favicon_io/favicon-32x32.png' ); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/favicon_io/favicon-16x16.png' ); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/favicon_io/android-chrome-192x192.png' ); ?>">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/favicon_io/android-chrome-512x512.png' ); ?>">
    <?php
}
add_action( 'wp_head', 'ff_add_meta_tags' );


function carica_script_custom() {
    $custom_js = get_stylesheet_directory() . '/js/custom.js';
    if ( file_exists( $custom_js ) ) {
        wp_enqueue_script(
            'custom-script',
            get_stylesheet_directory_uri() . '/js/custom.js',
            array(),
            filemtime( $custom_js ),
            true // carica nel footer
        );
    }
}
add_action('wp_enqueue_scripts', 'carica_script_custom');