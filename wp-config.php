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
define('AUTH_KEY',         'WWJT0U_?6Nj,b{}Hu*w@6D#$!rZ<W{/E3XnS(_2u5t?_P1L-*RDV>_J+_f ,h.IC');
define('SECURE_AUTH_KEY',  'rAamMF!/5mg],|F+^L`FZU#+-VcRHJ.<.!4.4qz0uU=d-dDw3M@%/D00p4nfz&XW');
define('LOGGED_IN_KEY',    'k_4MrkIQR??j~I nWPxobmY)=v<I}E2{dRL)?,(x=4QfbRW dn$N=[u,zn$-65Ts');
define('NONCE_KEY',        'a^`([o5|kl+xXF<&lq3TOU]>425,:=W^RH`S;&T>TV^d;=iQ!2[i[xx@c[d& 5D]');
define('AUTH_SALT',        'Ds//pU-w1IKHyyVt.oPT.-RU.0(2HhyD0lHyJl9nB/H53tmoNVum^=ToJumh-~ej');
define('SECURE_AUTH_SALT', 'm9n#+*[{n,3?J~5[C@9S7ePiKE4b[}j#%`K:b1N+4/ Ka?<Y@Hpg;i^FA?Q.th 6');
define('LOGGED_IN_SALT',   'SK$p-w(=r!e2aN*VyGv(*]%z,!Yp-VF?Wa|X-Y.N!JG{BTQk,|YM~NT,z{o|r-*f');
define('NONCE_SALT',       'tRT<-aOYV9 }H/}}m[+0tbYWP+HP; a N(XbI][KH1cEbq/#,.2s$e-tTWWT_qU3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'abc_';

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
