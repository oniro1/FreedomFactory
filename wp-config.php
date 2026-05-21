<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Sql1829915_1' );

/** Database username */
define( 'DB_USER', 'Sql1829915' );

/** Database password */
define( 'DB_PASSWORD', '95h4a81888' );

/** Database hostname */
define( 'DB_HOST', '31.11.39.188' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'I-e9tOpnod<Y^yG2m3d|A?%n}qf.Vi)Y$e:MYU$h%^.A.(K|+>mIvwn_oTU{T,_5' );
define( 'SECURE_AUTH_KEY',   '{NbG8iQHWN<qU72K;?6l/z1-VC_4/TPco0S.X(vwi5S,Pl$&9Ey!].Nd24`1:l`X' );
define( 'LOGGED_IN_KEY',     '6`skJ2mwyz*3muqkO-v!]fbPILbDEUVI/_;2Uq@=N]RZ ykv-[<H6=rH}c[4=CBr' );
define( 'NONCE_KEY',         '*,.e1yPr;$6-0$pf@w]ETEd#M;$H<LK>{}[]mvr9_apHC-~b<:g{jHme=+sTYE04' );
define( 'AUTH_SALT',         'Ru2Q5oDV0H*JKL/R[3bcPf2O%0)HJEp{.ID%W3e(=]$Y4l*K]lcYj}G~y>lq&H`U' );
define( 'SECURE_AUTH_SALT',  '3A]rf_v2X~j)iG%zC-Eaq>I>R^zKZ=#EVb?-L)v0feO ^ *XYzqrbn c4BLL}*,4' );
define( 'LOGGED_IN_SALT',    '3GX5s(qF#4Ab=Ed]Tw/(rl;$N9M[kfZi&qv7Auck?V]p!x*vr+~an#{gXK!2%=$x' );
define( 'NONCE_SALT',        '*0HZ#*&b8+;Ilj9F5} fIX%K9Bit8y}i$4!QRGb7[,Yos01@i)b{Gd*Q}Ea|LE:h' );
define( 'WP_CACHE_KEY_SALT', 'M JY&NsC=A6x3=Nq[TZ}rtIL8qc,rV)MC_^rvA~ab XOYQ-r;Q:;3fBvq~z)d0sm' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp49084_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
