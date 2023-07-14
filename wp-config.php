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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


 
// define( ‘WP_DEBUG’, true );
// define( ‘WP_DEBUG_LOG’, true );



// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

// if(strstr($_SERVER['SERVER_NAME'], 'lashmee.mrrymer.tech') or strstr($_SERVER['SERVER_NAME'], 'admin.lashme3.com'))

if(strstr(strstr($_SERVER['SERVER_NAME'], 'admin.lashme3.com')){
	define( 'DB_NAME', 'kmmkcamy_lashmee' );
	define( 'DB_USER', 'kmmkcamy_mrrymer' );
	define( 'DB_PASSWORD', 'DoRa0411!?!' );
	define( 'DB_HOST', 'localhost' );
}else{
	define( 'DB_NAME', 'local' );
	/** Database username */
	define( 'DB_USER', 'root' );

	/** Database password */
	define( 'DB_PASSWORD', 'root' );

	/** Database hostname */
	define( 'DB_HOST', 'localhost' );
}

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'k/BYyjkeiihEVQOXQwIb9z1gD01YoHMd7/Qx6jSB/e0t7D/NxfT3PClQFB4CzXHzol8hJIoS9rSwmTk9g+BO9g==');
define('SECURE_AUTH_KEY',  'wifmrEo5y+8ikbBzlLXcYpdUAdeJIl/gm1u7eBCJB1V5eLwiOj3MqqaJoN8LNbVjr9pBoEir6ybchSAhxikZwA==');
define('LOGGED_IN_KEY',    'w1DXAbhGBKMgYuqVmUdyakXmhlgMy+m07IKOyOTM+gku5xcqMf0glAL1knk5BHAX4yvXWZj/Wd0h4FuzctbrxQ==');
define('NONCE_KEY',        'sTHdwVErQlx4992Q4i1JFtApGwCPgKCqTcNo/65rCYPQBq6f/NzPPrs+pddQN3ECpzpkNbIBhmEjr/Gh+BkHSQ==');
define('AUTH_SALT',        'x7QOFJIz2aEcCrSRJn49K2JPuojkAbOZxvGluVfAm8bFMd3MKRCEA8hyR5yTGFcXS913aIYhGb8QzEh2QacHtA==');
define('SECURE_AUTH_SALT', 'UhdtBCayclcKc0zH+rlmYy/3uOIjVfi5m9BP6cbDaa14ilyRLNeb32Rl6phKN11DlJ6edbHuwxEIJZSA+gqq0Q==');
define('LOGGED_IN_SALT',   'UpS/kVldiQ8wNdQmdEhNM5QsUeqk/vOeHkVtAb0x5upFaaIzfCrsrum6sX/CBUMTY3GHzwL88ZtTceNH800yHQ==');
define('NONCE_SALT',       'ONDUR9sLqsm/p10+rWsw2s24uXKCmza49HK9DIO4rw+nct/MgiAb9axfo1J7wFf4cWu3EwnVpo5tF5zZW7Lcwg==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
