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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_WO9M{wTCBn~o(8c s3,bl|EQog]_JtTTX]Uod[G3J<Na&)uu%~V(VW9hrRkHWBN' );
define( 'SECURE_AUTH_KEY',  '(4Z5XROp!0u]Wsi|DZ(%]_bHQ~*a?mo~6?(!5jhst6bU)5j8=b#rOeFuz}3vmMoh' );
define( 'LOGGED_IN_KEY',    'G?z{)m|gk.13Gf6qR:8Y|t]v|UK;&T}3`$oqOnC;_Ip4O{/$|-h&bHO]rT2=ebGo' );
define( 'NONCE_KEY',        '@^].daZ,7zs8OXRPn3vqm{4_54FWMe+TqvS,xs7p;fXbU}(KstWR=<}C.M:4c8Xr' );
define( 'AUTH_SALT',        '(1 }R{1h>|6G1D<7865Q[1q.x0]Zv;k}$vp(yE6W&LJA~();{xZQC]T?eq|<>lw=' );
define( 'SECURE_AUTH_SALT', 'Pq> +%Qs*NiiOvR|(Q^t=HB2k[Am? ^QvR}R935ZkVOD@^6ZjnOBth5J)+YBBp@:' );
define( 'LOGGED_IN_SALT',   '3A>V45z=}7*O&PZfn/&iU;yg9|^~&5H`!<^TX!STIw*vJa{Z}X wuG F<J DMs80' );
define( 'NONCE_SALT',       'ttSwVZ>je/|_|VNBE^TSHdhmBLnb9l5KMK9_V7UfE$`*cxB V>lTrt(<B(E9n,vL' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
