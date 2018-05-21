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
define('DB_NAME', 'alexandr-kutsenko-portfolio-wp');

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
define('AUTH_KEY',         '!AATpz,.MI:0<z:opfvQI0a#X{-ZdZ5cjW@{,e:9QN|7r/Q!^*[6R~2UR<GqTWWz');
define('SECURE_AUTH_KEY',  'xX 1GtzK|LIVr3j80c,lg)]Nq81LV1D&-2@EH^+ ly#(gL|O6^,|@/zwCx}>i8kQ');
define('LOGGED_IN_KEY',    'D_{tZQlU!tx_:+8V-Ch:`s;&iRCpS0MJ^Goh0Ir,ly`^ZzXfMa2P-/3p04si=r{$');
define('NONCE_KEY',        ':bJjfC5&g.eY4 X?ZCr[`^QGkDRV JkxpR?kh,$~Ho5>~8l76uu oAsef*#/*BfF');
define('AUTH_SALT',        '&-Lk;%u}Ss^+!v<A<}3a)Bd;?+<v=K#OMLh||jMa^^aEM;2mN Tw^{6H!2J$wb|;');
define('SECURE_AUTH_SALT', '@?faLtm;~+4xjcBedxtU6H1i^jy05)`sH2;2)w.)}PdOMZ.N8+%YVcmW_v^^%lU!');
define('LOGGED_IN_SALT',   'S5&q~=V~:`7/s2#LZcM}jxV _p*O5XurHECZI0dkWXb*+|`{p[,H;1:]=#`M;5Lj');
define('NONCE_SALT',       's_{M$_onPn@{mIoiIg(zJ/C Sgk5^b)!.cVT))[&B01Bt/!(egM!rW***9W649}f');

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
