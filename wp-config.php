<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'sai_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0yH/Q%s*vMoGQ5$!|y}f/.E2Wa*2a`8s^@!I>AQF=y<5q7[gdw^6WnIi@U1_@_1i' );
define( 'SECURE_AUTH_KEY',  '[WzTDF7kY6F_<8J5;tjwE WVF1Ne<T/}2UM=gtYIe#d#C<d#m5/{>prUIN{,mSVA' );
define( 'LOGGED_IN_KEY',    '<H}-S~QIJ#qfv&z x4E.KB7`Hj+^BE5kZ*orSX?pmmw)-%..:!rnE7iX4F<er)/k' );
define( 'NONCE_KEY',        'Em0^GrBSFB3?UtJI q[vtN;6wtAEsIPUo!IF^p1j[Og~{M!VY%Eh:GnKMfvVr6M_' );
define( 'AUTH_SALT',        'rNkL;ID?w`E^h<al(gKG3~8^D5_Ya1EYp#| =]tQUz.x=uWM63YB`B6aomHK!(a?' );
define( 'SECURE_AUTH_SALT', 'P[6T=ss`/pa1gzbk9H5s*w]eSAR/)loCTn2]8TBWU9hV<0.[4`Jtd8@/|V!d{wP_' );
define( 'LOGGED_IN_SALT',   '3eBfvnU:TNm,8)_*@y!Gn>/m[7DKLZbaR;vMNWa&N_ygAy/-|d55$hQO,#9l8vK{' );
define( 'NONCE_SALT',       ';EjA8^}!joIAaL/ `<Lx*g# HV@Q#`^[+J[D~1W=v@jpw>M{L/34rWChEe-dUWu~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
