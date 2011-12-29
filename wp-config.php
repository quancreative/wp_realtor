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
define('DB_NAME', 'realtor');

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
define('AUTH_KEY',         'FImMp>FVb*Ot]#Gec,4N_:l?G/mxTJ!(Oe^Ebub|u?mZi NTSsTOF*t/t0wf}Eq3');
define('SECURE_AUTH_KEY',  'Oa_AzNHWk~ U!}LApBU!RsAJ:a@&I+oCxI=JyS6#J.OGD=Kf7^ 2 >VF*y+%POnp');
define('LOGGED_IN_KEY',    'KXtCe7F$4cSL6rHWLx;*90y};tL#)`20F,N1QURF~;v#$Q):Ibl5/JXHzVXmxY{L');
define('NONCE_KEY',        '@IBFg^k9|HBvrma%=H*m*%036RGMDW9L}[C/e<&#Cw61yw }15&fg)/^/xxaRG/r');
define('AUTH_SALT',        '8M=VXvJNKLw{];LZTkD0c4klMN@!G{5*pw%14BH{fkSnbR%3hT3LtC<]/pXI1[t}');
define('SECURE_AUTH_SALT', '.*j53b#tMPC&7P,H[I[`%x0D7q?`Q-4![8vNS|n!=I(|pkwAKK||O2S:X:D(YCUR');
define('LOGGED_IN_SALT',   '&!JOPl}5}I^Fk!:3.;N&}A!T1#1NBV,&<.m}v,Oi/ %55dqG,N/!L7NWz`d(Z+p$');
define('NONCE_SALT',       '@;`gV1PfnDMpa[U@!V^kk4{DEf;2F8^<oks?bZ<cJ4IA5aICm}JBc&2i)k`8 #.!');

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
