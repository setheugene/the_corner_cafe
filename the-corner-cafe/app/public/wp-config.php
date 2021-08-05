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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'oRvkWlYpOuCIBUpDy1wVnDGRUzGmeKwzGPJJNZ67tIqbf6D+l6hHE9xXYLDsKU5gxXHBc7SWmXmfRpjOEkgpgw==');
define('SECURE_AUTH_KEY',  'GKs4np2RvFo+zjyrqkaB/1DMJfAr5vTSVx9AKGciJzQGlV7H9y7dIwT0FfCmYJB4N0lhggjBE4E4YMQpXkNfCg==');
define('LOGGED_IN_KEY',    'F/8ahBIg1KneihVbucyIdmjsJuONdU9yakGZ1RvvqrEcnD5ndNZsakECaMhUD4Gt9G+BqpgJ6JeAoFb/Az0N2w==');
define('NONCE_KEY',        'gsHeVsHC1NiWDd4v/fvDgpC5Tsv+d3IbrvooZJnBWREoNKuItFGTiXC4tak4hipSoitWznqEnlRYYcHjS9cF3A==');
define('AUTH_SALT',        'SsFdMkUG02CWAmEvYD6Votwa2/AMdjCL8cft5hFkcs6QgwQsjxTdOt/G6gS99/o1BmrLugAHt31qslwiXs70CQ==');
define('SECURE_AUTH_SALT', 'a+GWOF8CBBtEEcrYjiKVcawni1cRJWaDs7279H8yCJMx3LmoHcmKGVVoO+WS9piFr1Bdm4xedmSE9wj8W6xI4A==');
define('LOGGED_IN_SALT',   'IsHcTMH49uRqsTppKUWbzplZ4Q/+y/NW93VFo8v3Y/j/Hyx0We39sqSk0R941i8gr4h2CLvWr+MuUfjYO4XT6g==');
define('NONCE_SALT',       'r2siHUqndfpR3Dirmyj5VcUOaYJ6BlyKUy+Vi8FC2cW3AePduQ03loBJfqmGf6dlprXfjLy4w6ZEpT4PvXfhBQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1she7wdukh_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
