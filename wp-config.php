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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(10-5}^]8y3j;l1!  UfSp6u!pD1(]7b}d.c&+8i8r~L1d`:@dCK;^ SUJF]Mm.8');
define('SECURE_AUTH_KEY',  '*}bAK]-Ny-}.XjUk]>h-gjix:)e22BB7oZ/Loa(z_`/+<h?`6Gpx4vA.U>-*nxex');
define('LOGGED_IN_KEY',    '3rqvK91|Sp-S6,SIC,}F4rU5#v5p)X(LH1t^-UpMgW*%2$ # K!KqF72Xwnh+JV*');
define('NONCE_KEY',        '/&((RG<:hhAlqg;n=Ymi|l=rI;NB_~ZemkX*A,%FcVeVqHz&(QTK|tPIn[8^II|(');
define('AUTH_SALT',        'TL 5|G/[O,Lw=CNJoj/S=YS&N[WAMY<u 2ol$xkL_X`CSR`BMjz9KQIU~V;Vdx-+');
define('SECURE_AUTH_SALT', '8QZ6g0(x.R7fym6v$#vZ6qlRaCS#`jNVx#[c,6EcdU|-og/OK^`0_Ws]XgAXC6+,');
define('LOGGED_IN_SALT',   'k.BBZ<X3=yA&@5E^cK}<7wJ6Yo95+i@A5VfcVP6tziwUY!i0E*wb-ZTqZ(0F]VzC');
define('NONCE_SALT',       '9HiF.B67EMa&x;$A^%2Is}9OhD]YLP4/~gJ6~jqux`2 hVcFD;($2gpg_i1d;%MI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
