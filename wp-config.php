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
define( 'AUTH_KEY',         'b?3qe.);mJwt0@wtl`oBt#q,Ek%wZO0R.z+<[E9TR2QZRN!Z0N VS#>0mU6,N?kG' );
define( 'SECURE_AUTH_KEY',  '7_3&?_7<^^&SW)`^1^P^ee2tA2Q@wBnOJpH*aq4C)zN*Y_f@A1p**a%RpNm!txM.' );
define( 'LOGGED_IN_KEY',    '&c=}rP)=+--:$j- WhYUx79+93GZAFDiZX;kwc;@DHD}lNO:.gHr;(>Bb)n.Xmb>' );
define( 'NONCE_KEY',        '-GpZZU@^Ca{A}5hQ AapdZ7y5M@6UowvB2]RVvnZJLwZr=<FmhQ6@d&O,eXz+}RP' );
define( 'AUTH_SALT',        'pYZaVN*yanrlAs9-3{1{./xc(zv0&8#|PRef}]W3%whf ?4;##]5HOv*A_Gr%r1Z' );
define( 'SECURE_AUTH_SALT', '+d}A{~?,%s,-EK<,-A{H<&5ki])(hnwnBgoP_kU+s;B@UWuvrHu~ljFw_-}M:6]p' );
define( 'LOGGED_IN_SALT',   'K3&J>kvbl??>?NEY5*I8+g4(1bGyO?]{ue9_g%YoV/mD{@7N|7VO##y5)M3e `:v' );
define( 'NONCE_SALT',       'DQEDr}9$%4%3rjBPni=wH;hOl-O+IX[v:uh5;EJa5RdGeU!<7H,LUz(VbTL|2D>_' );

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
