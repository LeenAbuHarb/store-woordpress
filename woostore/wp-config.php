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
define( 'DB_NAME', 'woostore' );

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
define( 'AUTH_KEY',         '`.A+`+EmmBQoC=S<9}]-xX[PoRjmW9/7a`tlYqJHrdgmZ~>M{}c35}13@FJ80U;~' );
define( 'SECURE_AUTH_KEY',  'T[VlI$Ajfczgs(5=~TN j6^RCY#{!cH9,_S;6y-c/(gM[QP0`~H/|A@ol%%u2d|[' );
define( 'LOGGED_IN_KEY',    't >]j0/4WZdFA`=?BE6dQie3Rzsx>%g3(qt^[Q!a})m>tP&M8*7*98I Lu13s.xB' );
define( 'NONCE_KEY',        'k7tnSo)_KK!4>%@FDS$!G#fJZ_BG?ODpkq[UUbSgpi,Lu=XSVA1?e0;t<:1rqvo#' );
define( 'AUTH_SALT',        'GmP<t~1|Q^te~?9~NUq%9}9%[$rp)8t$773pFSpw_MS(Sn8xN+Lf1TZs[Vz[@*@`' );
define( 'SECURE_AUTH_SALT', 'AQ9*85#uGPc)uNXK-Nu];2)PD-6742~8:0}LgFN*G@uNt4T-0d,#^ur|s@v!35+S' );
define( 'LOGGED_IN_SALT',   '@]ziqWgqBGYz0c~k.y,sR]29Cf7q$I z;F!8ed;S.+:GG#Qg>s768R0Bh N,*h|R' );
define( 'NONCE_SALT',       'GuM7WH&3fAD##DEnIA@:H%9MU%HP3;65|iNZR|;vA8=.0Qh3r@3QQsyH[m0Mj:P:' );

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
