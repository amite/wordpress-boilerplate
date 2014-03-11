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
define('DB_NAME', 'nms_hero');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/wordpress/');

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_CONTENT_DIR', realpath(ABSPATH . '../wp-content/'));
define('WP_CONTENT_URL', WP_HOME . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('UPLOADS', '../uploads');

/**
 * Starting with Wordpress 3.7, minor and security updates are rolled out automatically. Detailed information can be
 * found here: http://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/
 *
 * Depening on the project, environment and deployment strategy it might not be ideal to allow Wordpress to do automatic
 * updates. Possible options are:
 * 1. Checkout the project from a repository. Wordpress will never auto-update.
 * 2. Don't allow file modifications through the admin; config: DISALLOW_FILE_MODS
 * 3. Don't allow automatic updates; config: AUTOMATIC_UPDATER_DISABLED
 * 4. Only disable core updates; config: WP_AUTO_UPDATE_CORE
 *
 * Basically only option one and two are relevant for automatically deployed environments.
 */
//define('DISALLOW_FILE_MODS', true);
//define('AUTOMATIC_UPDATER_DISABLED', true);
//define('WP_AUTO_UPDATE_CORE', true);    // major and minor updates
//define('WP_AUTO_UPDATE_CORE', false);   // no updates at all
//define('WP_AUTO_UPDATE_CORE', 'minor'); // only minor updates

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$8Op[H~qPeF)/>IswNAge6;$.Z7+Ayb-9Gp,tJ>$$PJ/ifj3H6mt-JQuo%1|EeCS');
define('SECURE_AUTH_KEY',  '&E J8W,vmwAoe,87eWhx4H*@>Lt2n4KEC }}K![$ofUJ.X.L2~`e.)B`v4[,xUrl');
define('LOGGED_IN_KEY',    '|0f#$V)oo,@t-d(g%J4m-d<J&_R-,hKn!e#P,A1oJ57-F?L||6tzxD/diY+Bbj8L');
define('NONCE_KEY',        '2Z<P^pr{DA0/H2/mCgL]5n+H=rX=9&P$tPdjmska]y*v__0pnxKea EevN~jOGtR');
define('AUTH_SALT',        '[xN*O5|5>47!b|-ktc}{)b&. w(x7:Pcs6`ivx~)At9xLcxBsUd,{A~J%-T$Ix20');
define('SECURE_AUTH_SALT', '!./kT>~/43]PYU30=H&|eYNFp;{^`|W8*K/.^?i^y|j|qPp1&6H2bts(W<Igasc%');
define('LOGGED_IN_SALT',   'BZHQR%lFqr4wFf1At)<Hm!M|aDYWikwGN%ZY{ Y!{~_b)m+It8=LzcP?h|{3pgkI');
define('NONCE_SALT',       'M$YhEYMVhg+a16~zMeIx}W=| vF$FMzS{2u+;1/E%m#h28/%[pYj8mcM=:t/ Tsf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dU7LI_';

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
