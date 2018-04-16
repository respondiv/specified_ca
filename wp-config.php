<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'specified_ca');

/** MySQL database username */
define('DB_USER', 'specified_ca');

/** MySQL database password */
define('DB_PASSWORD', '@j81]9cPS8');

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
define('AUTH_KEY',         'pnrbamdlvgijbgc97r3l64vik58spbbyywsirj9kd4gsdpsq0blip2jxk3uw0qnv');
define('SECURE_AUTH_KEY',  '4jfmv3fx5t4b3cbevqlrdw5tuwnxfit3pdlsioav4sudeh0ydrzz7r4ciivzhgaj');
define('LOGGED_IN_KEY',    'torowaucm29axprle4c2xhi45zdgul7zjotmixnncj8cqqquepep7cgx3bbr2gzs');
define('NONCE_KEY',        'gqo6kz4b3h1mficcmuzh8iwnugee76sgfuly2suwoec3lahg8okysjqll8ohdwnr');
define('AUTH_SALT',        'gkedlty5js2gnauhnm7m7ctkvtsg3oclizrervzw1pa49m1yhqdcliv8vzkz2cg5');
define('SECURE_AUTH_SALT', 'kpxkorgi2cylumatgij8neiwplluxilrv9d2zfjrtxfskvkwy8igib4quv6op7rr');
define('LOGGED_IN_SALT',   'pyhxmivuqr2shdhhdqsdqq5ywsmw33y7dbb2ctxwqp4qykwmtljuwgr3macz95gd');
define('NONCE_SALT',       's4efo1cexy08gtrg83sk5zqcdw8xupr7tpqlqdf6bnfvm9da18nrqs5lwds1j79c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'specified_';

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
