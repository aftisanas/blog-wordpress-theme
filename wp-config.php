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
define( 'DB_NAME', 'wp_blog' );

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
define( 'AUTH_KEY',         'BdIa.Xo>W,H|C|n_004Khk`;WBy0V_b0{n-wO.C+3hk$^(>b/hRpn7QA8+e}xWy6' );
define( 'SECURE_AUTH_KEY',  'oxl]~I(g%p,Lg)tkCQcxP)Y9<q[P`|LxPwm3Jv1TSDB8(v1yZew=(#9jXmYzQE^D' );
define( 'LOGGED_IN_KEY',    'v`O>]&=[FdsU]uUV@E1[8#3)x!qBE8 D#VVb6js=Y8mE&ukVAMWyO_OW!R<XLYQZ' );
define( 'NONCE_KEY',        'aCsUI_knw6t{)J+d^_+pM4ve7Z,han_<EeJL=>1l*AV+:uS}yZn5>z(iwM2kFKGX' );
define( 'AUTH_SALT',        'n9lhgebHlhCimH?eG16S^W7{eOB k`,?:+*d=kLIQnL/48DXcoZaQYN5!~PZ{Pyz' );
define( 'SECURE_AUTH_SALT', '6}i+5uU`l}z}$c5f[gN:/@6_`YRie9&##c32>S>{o?>)>PVm)av:_0vJ3=-v(R}?' );
define( 'LOGGED_IN_SALT',   '+M6]xMaS6Nz cj[OBn=N_53tt|]enrYn9i<G;0C%+6|oK.)**k!%eHy67b]cBG5x' );
define( 'NONCE_SALT',       'D/=58A%:BHSsir4,#gK,Kh=T]fi8UyT%{$0^SMe[{EG.e#+~8he |N.}Qtq~Ja*<' );

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
