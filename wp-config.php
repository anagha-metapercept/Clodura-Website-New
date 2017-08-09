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
define('DB_NAME', 'clodura_db');

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
define('AUTH_KEY',         'Y8x-EbrGvMk`1Ty;1Y/F}UG}d]`{9*O^X38M)F)cDbM&bL/,A?i~>qO:5aymwgPq');
define('SECURE_AUTH_KEY',  '{8Q>F5oPzZMVjLc4F:e`[~;X5Dr.=2G{2x;t4Y#PP#D^$/082A|hoA{NAs3=.=3O');
define('LOGGED_IN_KEY',    'nnVLp@TI>J=es4Z<6`-%kQR9*x@kt`LE___b4F9FBS;qOB1Kjj]P>]>#` h^uAV_');
define('NONCE_KEY',        'u!?5uwRedIM8vZ>v+n$]`Y]`*JVTV2Ny?QU7)eM/M>9&l~d0Q X@MNSl,C@nyH-]');
define('AUTH_SALT',        'Ly)h[HCD>M?^MA4/KUL)D9~BlL2zrgw.f7OFT&ElYF4 5^,!E|D_VZs%c_,+XSn^');
define('SECURE_AUTH_SALT', 'LCn-Zr)$}YOB1N@5]XT6B^ZPXFeZG~^@Q@sX#^~YG+6{<w yEs./w]E;SurUE$4(');
define('LOGGED_IN_SALT',   '$jNp#LXWoDs~RwZN^@fccJ=O*EV;JzG 7[@0;{T$I 85{tp7FC h44~[xx@y~]c:');
define('NONCE_SALT',       'kPVXaFn@TG>1yo[[:l_AI+LZs;dACSR)D:,33TsQ-&2[ur$ow+@&Qv,g.OJs~4j<');

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
