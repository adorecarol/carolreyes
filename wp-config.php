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
define('DB_NAME', 'wpress');

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
define('AUTH_KEY',         'nRVCpVo^i7v5V7>b3-*X<!--W8hPjc*r>NYl+@n+Y^1+s2^ez`.|F4(<B.Fb)+Ei');
define('SECURE_AUTH_KEY',  'w}64C#aa$NNt<#6/Q%5+6}>_i5` {=+_`d@ Brdi]D8^lmPBwZy:{Y,`+Y,i,d4N');
define('LOGGED_IN_KEY',    'q i#5!nG;T!hVPL|Y~Pc[Uh;7nX!pR_3Fs<)-C@ zHuhg57t2k1ix: lW<`,!j9f');
define('NONCE_KEY',        '`(#c_0ENub8oeE7jU{6&IjZ{VW+jxj1ij#DICJ0;`j5z_7[H@dC-%m^-C|}>!QJ$');
define('AUTH_SALT',        'Q><T|wRz9hd8:IxXV*43^LL!Ms9suS]L7-Q_}Ql4-- d@6I+wyfZ&cm;H@EV{XK#');
define('SECURE_AUTH_SALT', '-zarv|mGX(I*FT]eNFcy]hlP-]whei_Ctq(f% 9iiE%pa/HMO}=%V~G|at}8!-g7');
define('LOGGED_IN_SALT',   'UAg@(Z#-{eQ2N=>h11G3/;=dRC^3_36KuRE{VU*pmSZcJ2HH~Rg+WvYir@uzM0R@');
define('NONCE_SALT',       'mXZ5o}Agi=KRft*T*<.B5tb-Z@EB/#/X7kIF@`piR|h@BdV[/fz{]OGIP@UDa2&N');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
