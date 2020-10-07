<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// Esta opción es imprescindible para garantizar que las actualizaciones de WordPress pueden gestionarse correctamente en el paquete de herramientas de WordPress. Si este sitio web WordPress ya no está gestionado por el paquete de herramientas de WordPress, elimine esta línea.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_w9axl' );

/** MySQL database username */
define( 'DB_USER', 'wp_i1o1g' );

/** MySQL database password */
define( 'DB_PASSWORD', 'I!o8J60LFoBr*ze7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'f!7[3|Z@2x9DfpyZ%-Lp!DhIee-5[0[B9n44iv9T6|FF-@sa6G~75a9)rAuO6ggv');
define('SECURE_AUTH_KEY', '9]tP0hU9J7&YT|1ZB*Rft98TOqV7zv+MJQ9o0Y5PdXd0HkEo_28@1BlM)/G-Yo6#');
define('LOGGED_IN_KEY', 'w8#N+;/C04~HlIYi95h_w6XW2s+88F4BUw)n%9I+aCPl0156nVukt--jJb@0K7Q!');
define('NONCE_KEY', '*#iA8b|-v:5Rq9%|J5S3lV6uqY(&1!*7uHsJ/sHJ8B:2!F4F-ke-QN787H~34YXR');
define('AUTH_SALT', 'xH0q_2@%aRf~%%A:6Uh|Wl5wj;-Cfp|7]445!z%|3x16!!53]u09VY;*4-20z%2;');
define('SECURE_AUTH_SALT', '7N7zS9@wR4VRu7k;)5!4C[2R847;mp(iP373([;hXI29So&q/8~QA8cUv&c2ZiW8');
define('LOGGED_IN_SALT', 'pjK@PExUK4mxdU_GJI/S0pwl6qN|IY*]#VMW5_q%4Li)~2#9h7mB:x96]KVs-yW]');
define('NONCE_SALT', '38@P4Tt/U~h]4Gy2U;8-!wS!850fh0JNQM4mq@uH(|[e[64XF1#7Io20f52Gju/z');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'r0lCzA6D_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
