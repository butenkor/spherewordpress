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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'otFAouy8q`)l(bc0g9O[Pw1Mi_b H:OsQukl6|eUQZj,sW;Gx-6A/jM$3YbBL#s{');
define('SECURE_AUTH_KEY',  'mpI)0B)-H QC#wLQNK/`;cOJRrO:8is!H^@D@jb11Hl#XBM+{;-EM5/a7--cPu*9');
define('LOGGED_IN_KEY',    '`Df,3&4P5Aq%G*gXN<ZK=T93cB)|!x=O|hUpt>cl:f26R+4>>-JO8oh0N2x=_edx');
define('NONCE_KEY',        'NtC1;-OO(u0P2tc#[Yza4ab^m>}cyk.!eb =:Pgr4)ua-#pR_+$S2|4FUvYB:UY)');
define('AUTH_SALT',        '758;WeLeQ1#>`sUh`QF+qVJO+(0}u=Tf0t&Io<KWD {hOq=OH~U,Qc?^5?1kyF4C');
define('SECURE_AUTH_SALT', 'sPgyXiJSvj~|=Otmyj+/G<w-qD(Jp0lNZWn.4vK:8qKSvA-~Bd.1hz-aMWfBtcxj');
define('LOGGED_IN_SALT',   'Sc1az|*U+v9FCfdt[#Z+k|:,dembgBo+H.cX}ipUE/!4dJcm_*!,BRnLXxn4,PkZ');
define('NONCE_SALT',       'f qd%zIOK,V(K7.F|gu>b05cV--xo1A{v]j3enTBzz<4e,UGY{VmWo$Giof<`ekU');

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
