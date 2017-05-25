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

//** Custom **//

 //Added by WP-Cache Manager
define('WP_HOME','http://lacantine.ae/');
define('WP_SITEURL','http://lacantine.ae/');

define('WP_MEMORY_LIMIT', '512M');
define( 'WP_POST_REVISIONS', true );
define( 'WP_POST_REVISIONS', 3 );


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lacantin_2017');

/** MySQL database username */
define('DB_USER', 'lacantin_dubai');

/** MySQL database password */
define('DB_PASSWORD', 'vl1*)_4(vD5s');

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
define('AUTH_KEY',         '&l`%cdNnWn*aQwXvO&k`!*R7E;}^&9YQA:P|zNCdzX>Lgb#B!HBPiAdi!q$U`j{n');
define('SECURE_AUTH_KEY',  'LRaw/! (`xKJxPgi:Nw.A4LJ~/y35i7*p?Idjp} &Zad 3T}s-,}hgQ+17Kj:?(t');
define('LOGGED_IN_KEY',    ':-)d>_kvw{F~.O1ti|#}m-rMD$V/#z;ZUQe-&LF%H c+#8W?0I2-GV ]-^v{W}|5');
define('NONCE_KEY',        ':Nm!nSdm{u$+%bRsM{8k|KM{;SMS6D(o$Oh:&w2#=qo9.*3L#D1)*=Mu)~mo(wS>');
define('AUTH_SALT',        'NEJlM2^cr]8IqV%;qG*C-WRd%#L_O:G[.zD4sl`KDOi{#/!}G0x0k)>L:yL$s7gb');
define('SECURE_AUTH_SALT', '?TKoP2,[*GPm>fVHqqUtVvR4uF9IMbVM.r2Y/w{9I/4:8N%UFKD}5sk3r50Fvuc-');
define('LOGGED_IN_SALT',   ',P;:mQ; %i4<!*L:JGXOWI}NIsfjmjAiwPS0Cwgk~F|PHKBw)hifvhIx$fNMNbK[');
define('NONCE_SALT',       'v (J,+|7_bs5rk+}|Fp74Y<Rl @FO[pH/wf6&J5,f&8~v{|ECF-a)|,u>A-,)@2c');

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



ini_set('log_errors','On');

ini_set('display_errors','Off');

ini_set('error_reporting', E_ALL );

define('WP_DEBUG', false);

define('WP_DEBUG_LOG', true);

define('WP_DEBUG_DISPLAY', false);

$url = $_SERVER['REQUEST_URI'];
if (strpos($url,'/poste/') !== false) {
    $url = str_replace('/poste/','/job/', $_SERVER['REQUEST_URI']);
    header('Location:' . $url);
    exit();
}


