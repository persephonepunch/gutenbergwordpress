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
define('AUTH_KEY',         'K0r53ctMlHuf/fhywxnZfEuYUcb97j7iFkkQVBz/8SE4eONs6RAx3WgE43UNXWQA8k8y2FkMglXcaMdh4E1qMA==');
define('SECURE_AUTH_KEY',  'uhJ7Cw71Aj2FEgwQK4I1gh0eEkyICIRNXR7uVvfSPeJaLeMgOgPxgELdRCCnApc1Qk+Oe9lE1CzWEb7Jb6/4TQ==');
define('LOGGED_IN_KEY',    'phM1Hfrurx1uk1MmsYbmf0dbY0hA8RZL5oOLQE2j/4FnMEwUXWJrpO4vXXNFRPychPqewKogZEDqrzKNER3o/Q==');
define('NONCE_KEY',        'b4PaVBkbr9dFghF14wugQLBGwlCEnWVuhYnXM6w/01Hxy8F5jpaoC7FZ9rDkvBWdGW+vnoj0BRsKkN7kACiIyQ==');
define('AUTH_SALT',        'uKV5bDCN1vlvULff/FQdeKHy2LX4uvD72sJhwSaK4ATaMbgQKc347noOakiB/9iVxOczwGg7HlC4Zrjzhr0sPw==');
define('SECURE_AUTH_SALT', 'o9f810dXMbSbrbBQqz+BvZowwp8GNHEcBzE+ClHEpi1NFzu9pjvf14EOo49OMcx2QJojRu2g29Yc3GthmXTxKQ==');
define('LOGGED_IN_SALT',   'a+FekmRl1BRsb/sFuTMMywudEJNPNQFEOPC+52PYDR2eXNiq9s46ih35pN8R7tJ7q1dA+0PhnwTUytOPjdTOzA==');
define('NONCE_SALT',       'bPxWgKluZiLgFSUzuE8CEZU6w7y7PKeMBdMlp58PLuVGerxNIGF1icfgm/S9KjLl8XR3IIqsmKk7AosDYn4vCQ==');

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
