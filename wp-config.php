<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'whitepace' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'D!*hm_[,nexv[PePOIwY!1t582v2i[4~8E.pmZ>!^h,d.ayxI(Rs!V573m0++*1.' );
define( 'SECURE_AUTH_KEY',  'Tat8`3pXLb08E@7_>9VdS}Gs[7HRm!!|}D|0H|uvc!C=T=IgFVWsJ|?egEi7Z.E6' );
define( 'LOGGED_IN_KEY',    'Ho:ap8sSJA8hI~MWGD/3g:K;^5>J[]n;u]gg<k[Z,j<1T0U;t@,GT:Q2G|?.<BS=' );
define( 'NONCE_KEY',        '7N]}=C;^h2& rJlcI`{`M7]Z0[E*hS(Y{7D_*:2A_,~;HzbMQGIVBQMcwt<% Ob(' );
define( 'AUTH_SALT',        '?L8k#tdsbV_Q;dS:y-N|~Y<SLH/imVx2x@zMZ)fUMe1*r83Li0 ]0pJqi{jz}lsK' );
define( 'SECURE_AUTH_SALT', '&,Wgl|:Z?i~SmP_8jn]l:=Lz)FZp}sd#c:M[Wj7>0Y[T%Im&2#f`}q=w>K(~dOh2' );
define( 'LOGGED_IN_SALT',   ')Ajo<$+h/#&<*0xHvoil4 @Iiso6:_e$xAI?WBBC!9!2jElPX@uyP*n;*$zS)6%z' );
define( 'NONCE_SALT',       '3dz&fmgqz]q4j^Lq+jbVBTi59hN{KzabIQQ2qNlcxJ`mC*XveiMMWCGLaaKj#FCN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_whitepace';

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
