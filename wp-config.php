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
define('DB_NAME', 'kuzbass');

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
define('AUTH_KEY',         ',y=KL=P/Z[C h({vd>bcj&4rm7+PKuHoM4Cy:G~LPjvP$)]qaadmROD|hA?HdA?l');
define('SECURE_AUTH_KEY',  'YmqjuS?FIGG-f:bCj_0=l3wLebq6n*zu1!AmY(Z!r9zE|`lFHhjS~p5bq?Nv]gHb');
define('LOGGED_IN_KEY',    'LLF1rC]Fa39=ss;!M`;2qCk^-7!<G=cFPCkWl{?*1Q@e$V=L-E2iY@&)xasIdr`s');
define('NONCE_KEY',        '! ( /Q[|y<2TCNj.H4QHgpxuNwOR-Vg^7jmD7s&d-?e/0t8lSh@ky[I!|RHmr)oM');
define('AUTH_SALT',        '316]#<QzxqvIO8Mpvk2ew2D?9;`)*ebvF:zvA/B]1k8I9cd!%J_N`P]g!@kA6RGl');
define('SECURE_AUTH_SALT', '/t/jaCt,Ze:d-->I`4i_tWzyJ|SgwoO2f/`$$+7e(IT,)9u~Jp?vSz-<~3y/$=7;');
define('LOGGED_IN_SALT',   '|)gs6?zV&:2ZmPO&5<~HX#<e8S}bK<GaJ=sYrb9vLotQgDM.I;D=daeDZCqI]cy#');
define('NONCE_SALT',       '5Q[*U6]pa/H&Ud|=Ux>|5S ux>v;U8{G<m^s*PcPh0-**Xo!XFkGyB%XCTJU5Q( ');

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
