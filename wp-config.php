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
define('DB_NAME', 'dinesh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|9*<-!K-|<.+J|GYo>,BxJ9?a7Ts%};u]x#x}k[@`!k5$0.1Rq=:keUK@S%Dy2B[');
define('SECURE_AUTH_KEY',  'Y~@2d,5x9~m,_A>;tb-R{v|UyB_eXo`Y?G|a?MQT >=n)9_GG6|j2$kO|kN|G|e|');
define('LOGGED_IN_KEY',    'B#%FduR9_$%A,SK--{B+9@(]<Q**grO:8bj}TPyDd_p,W5J]Oi[$swKf6G/9%-e>');
define('NONCE_KEY',        'Bq8B>v<R3!9t>rTu8;&87wnZh$-1Q[_KG[Iy{K-yjxyjc-`<^a&KQ8dWCF;o`Y`g');
define('AUTH_SALT',        'l2c$]TGw:MkvVj4]D~|l-ilNx z3VRCo1;6S,n(Bp4ymB*!Z*J!|*+-b.^f)>^gY');
define('SECURE_AUTH_SALT', '&+@_3_Sz-;~4GG,Zf1iU<0p~SE gXA;#?H[TE[(.,qAn/A!C*x<]ACFs+iJ&Pe!S');
define('LOGGED_IN_SALT',   ']{F;;:80Ul0w{oC:N70[/7/ieoH3+RTEKO*Az7~o%FC$eEo-,4J+J.G-*Be)p(/=');
define('NONCE_SALT',       '*h:*`ic2T{$6(6TCIo.S4%5#+}pdca&[Y)}K-xI`Z/J ydiE0U~RLcsLFhs;COPw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dn';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
