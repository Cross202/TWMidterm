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
define('DB_NAME', 'TWMidterm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'o,Dv3_d7GM@3S[F>L?;xJ}z1Z%|?7L3W>32N&)EhyE<}&H(;V5m9`(ziH>9z;,B4');
define('SECURE_AUTH_KEY',  ':|xme<1~M{|^^[=fep**4^k/`y^E54(J.{tK1Q#4,ncwsPIfvXBpe++0eeSq^$>m');
define('LOGGED_IN_KEY',    'I!r%o!Ck]n=O`9Ob@i.K9>e%KR{kkbs=1`@_oBo4j)e;9CT}K9W@XxJyu16t!f%+');
define('NONCE_KEY',        '.57_1/,J+cbrmgL:(f+foiodd+uTP0dF1.rd{z#fr ytEUDRl-Uea@q$[LxS}[>R');
define('AUTH_SALT',        '?AY|J|#p-SGn-QwnkD ov9WQ@wwjR,m3kX:Tye5Iux 31g1@W(d2uXa%!VcC[)%=');
define('SECURE_AUTH_SALT', '2}hYdPC*%%KDX4Ue.K@Nj`ZkpJ8(Z4`1oQC[X$Gupj$2esMp,y:f(ojg@FXYq:|p');
define('LOGGED_IN_SALT',   'v4VjBz?{i&wKIgX(>^R3N;|bxOF/8SU!&tW!hDI,yW9LlM%2ryvLd_`,ApC08v>k');
define('NONCE_SALT',       '{@rsfpB=DG$dslGY`upN`sfkuO|ddVTCV4SXgepoXZ.GW=Y/:2;`D^$SsCS:/!cn');

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
