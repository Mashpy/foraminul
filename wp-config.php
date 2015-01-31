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
define('DB_NAME', 'nstupharma');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'gV-_/m1c{>BI0HLp_z@i1pB&u|t{NQ-$#>Ew!GJ5K+zG-M>$c@HOfTJ>i:5[)E+/');
define('SECURE_AUTH_KEY',  't1m;BH4R8AEGucAN!})|:*P/tied`X5s%.U0}Z7)%-+-S$kTI5*w<-Ik!4WBMJ-E');
define('LOGGED_IN_KEY',    '+2Y/x&qEYo]Ek6/%mQO-e|MvNxQ+._FjmbL3IQwZR4YD=t-5j7-0]LR45?3@y{0y');
define('NONCE_KEY',        '(1@kQQlQ%]|TUvwoCkSO/Re[IPmynIbP$~-LD/M|V(5--+&@g54F2>&|u8proRBy');
define('AUTH_SALT',        '9*|8vw9H!j{.$s}+LO=99`R5t2mw|T+ym*e.)0@-`5bB>u^l,hL=ENJ_+G_7h,7H');
define('SECURE_AUTH_SALT', '6QP3 )yQ{Y;?*DNv{D;!xu|*D5(GQ531<x.b~Fsk>g-tU6r?QkKO!lzo*b9<?#~u');
define('LOGGED_IN_SALT',   '#leHpK|QZ[S?hx$ROYd5h(ZQ:v+Hfs6)}+j#Cx|Wi3;FpBpf+R|-?s~TCM]24>|M');
define('NONCE_SALT',       'UpimUx$3X%zL+v31vs`6],9T_=|9Ah~.3$[9Ng)?(DN]Ym7-SjYO+|!jF$jGde50');

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
