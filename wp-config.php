<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i1011892_wp1');

/** MySQL database username */
define('DB_USER', 'i1011892_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Y)wcNMKnRU03~~5');

/** MySQL hostname */
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
define('AUTH_KEY',         'BGVXkqytotfmKA5j9gS8IfmCI5sM1akFQ4i1sDPA0HnHHuBoChIzbLMJLfZw9N0Z');
define('SECURE_AUTH_KEY',  'W3EMe1scV1CWphAWb3d7AVWqKqMJxTLBvkwm6y4wHureFujdkLGtsOLSRoBYV8lC');
define('LOGGED_IN_KEY',    'PeufFBSHXj30TDIfXFex6IPaZBXEBPKwoTycCzKOu46JOJoNcVUoKWhmMHQL6JSx');
define('NONCE_KEY',        'CMINnX9lpqyh6ladGQNI9gqm34M0QXDXB1FJIgniBD8RDAv3OYXpekg5scsjv3bi');
define('AUTH_SALT',        'ScT1LxD6Q07mHybPMRTf0MuvJqvTShHbbiKxni61GmkhjTiddYrjU6NAtrD0ptzA');
define('SECURE_AUTH_SALT', 'DgKAXQ1TR5FHCjMksDzy5StmlINoCCjPSkgzNOySW3fUDqijGNc7AhgB1QOKltNE');
define('LOGGED_IN_SALT',   '1wc8v46GuvjKZ8RIP1MZRG426tWFSYDCorOm8O1O9TxNf3tw5SAw9CH87LFSzwg6');
define('NONCE_SALT',       'c3QmqVKsuSEggIbwNisAF0laaKk0fH6Hf9yWs6p0IOqnHZ2FYWdVbrNUi3NndKMY');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
