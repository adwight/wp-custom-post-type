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
define('DB_NAME', 'wpcustomposttype');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/**  hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4vshmigm7iq7qrbug1ldsk5jcnh3xiezitpbjcqxbcogeuw45azv3dctd0ls3ttz');
define('SECURE_AUTH_KEY',  'e4t4xz231tjfktmww6b1bsjqxsoxyxgxhkblryo18ckuncldlfmkxsdfonv2kutz');
define('LOGGED_IN_KEY',    'vmwr4k6fu8dfamicawhvluph3qtxaom36uotvrhgufuqyshjgp6lhmqwnhnhkiuf');
define('NONCE_KEY',        'vmm8enmtby8lmiscwdizgc5wg30sen3pzpsazxiqhlcoznm6wj43bvi8ee42l9bj');
define('AUTH_SALT',        'izokfog41pbcwmhkyeqgszpmuqwblmpyoeyyldncxvgc14pmaqhzx7db1vzik2oj');
define('SECURE_AUTH_SALT', 'o77cf7ifd2ne3ftp7vzssmh3owpe07jihu43xlfy2qpmbibbrbt2yonnhqtzuhnw');
define('LOGGED_IN_SALT',   '6avzmbkbf3viq180nbaatqvv4z4egrcuh2gsrgipntanfygv6e6q8dwjh12vekt9');
define('NONCE_SALT',       'riejfecjuugmhbe6w28gliokz0ekqn5hgubj8w5fsb4al8ky6jnp8uszh7mouqeu');

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
