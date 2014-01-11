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
define('DB_NAME', 'premiumseed');

/** MySQL database username */
define('DB_USER', 'premiumseeduser');

/** MySQL database password */
define('DB_PASSWORD', 'Potato36!');

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
define('AUTH_KEY',         'f366|<B.(tA6o6X|h3A{iO=a|n4<]C$C:2A)]ms}gC-GOJ=eS$o#q/-kBa{0rrGF');
define('SECURE_AUTH_KEY',  'teU|.A ,uMoTca6g9(af75-@U#M CLB$yo-:9/(f}LPwV>)Yk?AX7&Q+Cj+]S]j+');
define('LOGGED_IN_KEY',    '$|~q%w=t|44*QW-k#7XOrg)0Y/ke*n=%09gF7]sfn]_*=P#!rL7xB!sCerk,TO2^');
define('NONCE_KEY',        '17<4#VW978mC|l?:gw%{Q2 /d3dzXU#&-gNb=3i+t|BJ42F+fsZ~ .9Aru}3e,o;');
define('AUTH_SALT',        'v=- W1&1|=TW:-R#$xDe%kt6_Lp=y~a#_%OtSnCoS}=d _|+[<pWDBY=x1TzNU%j');
define('SECURE_AUTH_SALT', 'p2(_J(6V:km1&Y (R#..Q?<[QSm(K+_gP6gf?u+qhj6}Q-LNDP>U{T2pCNNG7dW:');
define('LOGGED_IN_SALT',   'MhKUH~^s37Fpc*,N!I|tDi[T@`sbCo++R-^:BL98PRuZ!8y(SF+M*B2D*a-v^V$I');
define('NONCE_SALT',       'G_a@xG-ht]s56<jV]o=yyrrx=~`=10]utQ?$WP-4P)/4~?/3dxsV$y(ZIb9|]ZCf');

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
