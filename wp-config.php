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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'babushka' );

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
define( 'AUTH_KEY',         '=4j)_~AB040&uolZx?4(;.x-vl3hE}TGPWGwRvS[_&n8.FMqyv::d.#Sp9AAJrD1' );
define( 'SECURE_AUTH_KEY',  'JTSeV#[1dQ{ElDe}0-_,jp,$2mcrY~)f~.KJ&U}70~8oG)?O{jYd^w-|C$fVuQz#' );
define( 'LOGGED_IN_KEY',    '#^ogXrpO8QQm^Q=7Mp)_dMjWt`@Z/8 bw:n5ag:hC^Xxz&=&+MuuW<$$iGFQ{JZC' );
define( 'NONCE_KEY',        'zM`PN$x6{zd]/V80b2g.CV2aM0I@PO9|7w!,j!1K#zZ-}iDnrR&EQna7fP]wE8_J' );
define( 'AUTH_SALT',        ' EKSnJEUDGCAUhwgK<YBm~ntW;iIwMnGe}XcE=gGQzm@7H&>z=%oB@M9-0fCiU|j' );
define( 'SECURE_AUTH_SALT', 'pc59%M&C`;WWJ=dRBT^-`~wxUu?4&{Z*iD,78#qoN1`GczaKM&1dM1g>O(Q|-CY1' );
define( 'LOGGED_IN_SALT',   'Ip2hZj[;CVQd`s^kI(F7R62Ptdo#T$3[K8gUIK$2m3fJGbx1vVxwfFYKP7~=TVy;' );
define( 'NONCE_SALT',       '|{a^[pZ-0=}3w/80R%j*Gub#Y K 3B`%<ZP%N1E`j{HSpgqZW]HduAx^%vd7MVo@' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
