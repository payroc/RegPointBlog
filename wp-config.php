<?php
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
define('DB_NAME', 'regpointwp');

/** MySQL database username */
define('DB_USER', 'regpointwp');

/** MySQL database password */
define('DB_PASSWORD', 'r5t6y7u8');

/** MySQL hostname */
define('DB_HOST', 'regpointwp.cfhhysl3wuv1.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'KgOgq-i1K(s#ULKot%(8YPP&QjWismB88O!YQRdYgaOiERakV<-K |aN1]xkQ;!X');
define('SECURE_AUTH_KEY',  '-91srK7Xz)E_;w~i `Dy_ehR<=6[+%g,8C+os+LW^-r+E9`9xc5[2H(xoG|-|2gz');
define('LOGGED_IN_KEY',    '<_>oi9,YX,`i|NsLB{#t.%=F->b_NNTe5Jp2xC?B=E;R<![.Vj&R*5@W?3$e:&X9');
define('NONCE_KEY',        '9)Nr}WNr#{;~L7st8OY~q-3K)Rb`ON p!C_GQD,.{Bj^OO|DrzN_+~33/hf,+c-+');
define('AUTH_SALT',        '&ZwK4Od{so-y@f`G}bXYEQ?/& V<j>~t7?|N^ym$lH/6*q^uY^7 SXE:-K2bgD>y');
define('SECURE_AUTH_SALT', 'd=3/7HdLxxF-eni^S~E[9!SC8b?Gu<MKGeZ_F|@&|447%YBPKVVr#LW7$67G+=@d');
define('LOGGED_IN_SALT',   'Clyj!xq_@qh?}O#!Pv>}~EG3<g`-Tt0(! SWAP/AW6byj196J10dkxfvdX_7,~Mu');
define('NONCE_SALT',       ')W+upFh YNAWD=YL^_|9CGg&C[SfWa%{cdSH,!Btmtww]KwBaQAFcWrw=y+G[`YF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
