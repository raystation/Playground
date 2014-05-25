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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'zNMNzL>%}paM|nD-u0U#J;GCX7C7AW$5jfH:Sjv`4g[-RW@x{::nosb|G{kDlT7L');
define('SECURE_AUTH_KEY',  'O3=4v^A==m(+r}vqGhG,Y1g5Gi8EQcAwWm%!z@M]^$(&~M3C=+BB*o?:CB>O0x0D');
define('LOGGED_IN_KEY',    'eg#f%?9 TEIuMkg.6AS9*kth,-W;~K+rY/H|zAjy_UF:P,K9M%Eme!15yJWU&4fK');
define('NONCE_KEY',        'A#(|SVdd3h~c33|*Na_p?xyn#;3G+B<7;gQ$.sG1d5r]eyP8%tPD|c%W7L`ayF<P');
define('AUTH_SALT',        'qb7RfRnX2qi%%1wL2w$JN9{A/5=([xmm:X+Y4cO2|051DD^j@z;i1huc+[+SDEP8');
define('SECURE_AUTH_SALT', 'G5r9NNf56E3A7CS_JJV5qf-v-8n4Ip!h9|s}O&zL)M#fjPO%-ML1T1zSMAjgp[6I');
define('LOGGED_IN_SALT',   '+G%aEK!MB-b:`OOGzn}[zsD:vSa X`(PTR>BOw:BE@mfoQDBCAE|l!-G&oT?-2!,');
define('NONCE_SALT',       '?2-y]n,f7vy1oh<f(3T(gA{P xE-QH!{8bz+:8M?Drs]e!vici{lZ9Zb^*^6+R?u');

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
