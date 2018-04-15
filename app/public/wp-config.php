<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('AUTH_KEY',         '3+j+J1B0g+xoYaYOPO0PawXlHHJ5XgnrI3zfbzwBBVDlFvxH2jz9ziOm05Xv/yQosV1hNc+ip7QX6CxaBEWmig==');
define('SECURE_AUTH_KEY',  '+0TRO19BZdncDPf5KqVQw8pBHVgqdSoVXwy4OXoaYJ2AFcH2wY4VTBCxmcWcIB8Fn9wdma6e4Xfqyr2bUHTMUw==');
define('LOGGED_IN_KEY',    '4N3otkDsDwn6ikt1x0wHNegw/Zlzt2DIAclCaW4FLQ7WgpRhrTm/FGbKYPlNgyR3UXh02bBYOHOMFp6itttc/Q==');
define('NONCE_KEY',        'aH+qguYkXCEmGAjMHIvzQwpyqvthlOs2H0gFnMMfEPpyJXiVDko9izKp5DFtOZMEdaRRzlK1ugqBraZF55TO5A==');
define('AUTH_SALT',        'HMFrFnN67QXK3KLoZPDANhY4jhjc+ACVGXtUbkPC4Gm928+UXKaxh3380TGPvumH+ixhWeYVdy6eEUiAznCMhQ==');
define('SECURE_AUTH_SALT', 'vaKJxUSqNyMiIdIWISYIQUPX7S6wGH60MG2NB2vPQY1tqaZahJh4/bkLZAhwdacRja/A/dw1wOL8+3c3JkwS+g==');
define('LOGGED_IN_SALT',   'l/68Wv3aSc11zc7rddPJYw30gEEtshpZkhjesztd5VQQmsLALd0fYrcUN+dWT0kuSCAAa1WGBBLu9Duv2upZ1A==');
define('NONCE_SALT',       'E0EYrQATZyp2pqTEFy2b2e1U6GtiNHglxYqlwO/XWA+7awMBwdEy7SrbiCSyoMzSER7D62gxoK52KzYSemZ3ZA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
