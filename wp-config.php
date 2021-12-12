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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'surHyka?K*92[o3Sponxpf_kWj]w4Bs*asAie)rptmRH|2,|/ZS;B(##4;P.Y%Lv' );
define( 'SECURE_AUTH_KEY',  'm/277B)6qOsvjH,?2`+^X.9y18=sEBH^b2R+ :R&A__<!#4l_]OllGa>jL0(HxY|' );
define( 'LOGGED_IN_KEY',    'GB+xD#?~4>^&8PB%4HKvVL-oznZ0q!*uZaD4Zgi0G}rl/]3U9[Xf~h,<FI4ojO}@' );
define( 'NONCE_KEY',        ',k^Xt<m&p*1(u7&Vwh3Z0%H%-[>@}$y;/1RV5W@(<wrmVfRl05Jk:YRNU776pnEC' );
define( 'AUTH_SALT',        '2oEsi%M#J:5g|]<%e9#,i1ET _sO& !~CS9GuKfPPo7|w ]f$,n0^k.5gH8*m@,J' );
define( 'SECURE_AUTH_SALT', '9OXSC8;?x;P6rw!)H<TWtEC^gz)lW~vzQ;f?`4DFC!=XZ.jGHKDcQaWghP5q0?CT' );
define( 'LOGGED_IN_SALT',   ']$yG*Fn>Lrm%C0nK[Vs9}VH!VN N^d9X>x;AwU&<GaUl-mhW-45z>DT+E96%6QyH' );
define( 'NONCE_SALT',       'zE?Dp5i1YTvE6;(Noo5yT.Ka^^l1WN709PG3f02g*1mI8(Ni51kBT-Kf[*lKX?%8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
