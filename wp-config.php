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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '4?T>b x.d`#a^kyh2)$S?NYc| |EtVlfI:H!p.iu!J<%XTp~dgQV)`G?Ud8cgWGK');
define('SECURE_AUTH_KEY',  'dh6u5QbmE#Nybc0I;V|j%+o>%YX t)jQ6|_,W)OmYW+KeA!t%dt;-;8q$l#jOve^');
define('LOGGED_IN_KEY',    'K$Og|2klmL96RDLzDtAIFcIN*8)dH2]~UpZyy>@@dn=`$({*UgI.5fixLk:4 +_T');
define('NONCE_KEY',        'g{}8vUmf+Do2Yj}d~+f,abONpQVPT*?qK9dyg[s>[e/@%}B@Xuhx@_FZhcD/8>^n');
define('AUTH_SALT',        '(uVRo<sd3+Eu1,%td-LQE$cfYezEk)Q.JrJ=;@28*O>fEANijx!?aCnSb~,L^>gC');
define('SECURE_AUTH_SALT', 'hrvsVZ-Qtj7iZgEwTFTWA3zkVe|r?Wid;K)KW[s}ek$pY}07iDA-ykH?@1<]U#ZA');
define('LOGGED_IN_SALT',   '-NFJO_VOD&YwlwUwSm,5h7eoFM%^7?Dtq@F8*#?xA/!{tP8P^pxcRn71JPY9TJht');
define('NONCE_SALT',       '#Cd/_4#;L|z(CIn;yC12|Lud)ZF4;K.A-^WD;;})JM9/GlLQyL90c{aT[jB,M^gl');

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
