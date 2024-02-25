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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tvigil' );

/** Database username */
define( 'DB_USER', 'tvigil' );

/** Database password */
define( 'DB_PASSWORD', '000567333' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'qnmII7baz/ Bh;ikCV;kyD<yQL*9s2<5g@pVt._Et]rk]zGR6G&Vg7kc}.;9l>aI' );
define( 'SECURE_AUTH_KEY',  'AoWa3b;#peA4c64fmZyY%tcI%NJCK$Q=,F90GF7oZm?!$k+[c*#|P_PAtmU3?4<3' );
define( 'LOGGED_IN_KEY',    'OHxK{e%ZCxWm4]sGUl*ngyF[6a;eQeEl99FSlt-`9bURQlLas&y%}O&OTb0,O%T_' );
define( 'NONCE_KEY',        'q6!v8,yGYx2>NfJiOD)fvKd${RzAm+OIrS2MIIV@f|pg)`W)X+mw0t|.xgYc~:vu' );
define( 'AUTH_SALT',        ';1WNi)vbh7V|r#M.{R2Y: %&guSrk0oB]BA5yPG4*PT-;;qr@ZPXm-g%Wo-J?jYQ' );
define( 'SECURE_AUTH_SALT', 'QaMA8+}{/@#fhP]YeqfAY7.j0;QA+f,Hk y#YZo^H5F9Zd #t/w*939(meYp:1$o' );
define( 'LOGGED_IN_SALT',   'k7>1-+!q9 gm,;[&a0;Nm$3M*z_C>AvDGL;p|64-ov_yo^&@>c[qTEL>~jIYQSCs' );
define( 'NONCE_SALT',       'jMUB7?pj~9]eaVTJ]UZiMZU42E;SI>p{U^gzjxt[k26r<T+/E-^09of>|-}zhP8v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wc_portfolio__';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
