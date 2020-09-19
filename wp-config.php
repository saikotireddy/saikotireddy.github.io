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
define( 'DB_NAME', 'saiweb_db' );

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
define( 'AUTH_KEY',         'j3$kx$[Fl+iU}s}9Svxk3hb%BWV+aIgf[y<8;,C{r]?Q5},M*F=b[?7D<Y]Ms(m4' );
define( 'SECURE_AUTH_KEY',  'ew&p[00OhE]h$gyt;E31x-w_0YCfX[(4HI-w)u_M=N1JA{{1JrVQsZ8z$6qG|h.p' );
define( 'LOGGED_IN_KEY',    'N6$6OQ|9i3M1A|B+4TtJ*]]50Y{c>uF/)s=[4Gnk7>r]0wq<pA4ckZ][u-ndeDb2' );
define( 'NONCE_KEY',        '1uV.;@>?q7vh#1>/4qe]pDTA&=6pZF=*CY2A}4Y-~Gs[C|}/&4Q(#H5`+PL7?g4|' );
define( 'AUTH_SALT',        '2DXRoI*gr^|Gv{/3})0r%aM&NlT0cG(d kno{,K_?^FX>?a/>Qv(#;1i)j>eEDWW' );
define( 'SECURE_AUTH_SALT', 'Q5#!:Isblvkd^(x~RHp17yg-HUOv73Nw*HAR-lYjUsb:gyGCHK2Dw4u0@Q538h7)' );
define( 'LOGGED_IN_SALT',   'YE5Ypl(Pj3plJ~?>MV6iT1+Jy3GLc=Va/@EcecBRkpL`t%%r+g!RC&1@jEjuXm7m' );
define( 'NONCE_SALT',       '!T_zrA>m]9mrePaNrzz/W*&}Sul1)OyYxiDTKggVl4c1pNvJ|Q<5sji ?*BHe:,!' );

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
