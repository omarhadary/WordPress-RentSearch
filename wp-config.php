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
define('DB_NAME', 'project1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hadary83');

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
define('AUTH_KEY',         'Qc|Q+>quO.[zAetnr)HKd[jOh-3hu7ol%IT~$Dq)+4TWizE:%k*Ut(P;nt9y;~Go');
define('SECURE_AUTH_KEY',  'O=CtSP`r@}uTAyDy+T`Fd@oQ0cz3e~C</zyS1`t|#UR|-KGh/*oX0B<$?(gD*fps');
define('LOGGED_IN_KEY',    'HX#_keF21**E,q:yIfq v*#T b:r%tH488UX9I}1Bm3u@lD|!*HrUJk}l{EAme`Z');
define('NONCE_KEY',        'jx)M(V&U%!z?[{@Ob*X+h-urpBVTs:g*=?`}*]#R@2c[nb++1v%X9?}$~$]=+D)1');
define('AUTH_SALT',        '1>gZHl8%kg<4fagFL+{GpIX7_y5L[>Ez[?~jOA&~ZTJ%Mt>Qkukn.R+|G/,:j%vp');
define('SECURE_AUTH_SALT', '!k*J!Tz1_F=N]({Usp%1P4hshPP|+GumAEA!t6hZO1a0Gg;/`e50}^dvn)a53Atv');
define('LOGGED_IN_SALT',   'rB@Hl*tyth}t2fxmscT=XbB%^Nr_E|R|*B@TC%`gyUS#!WhhBtmU&>&avq4G.l[L');
define('NONCE_SALT',       ')(k@}u=$8IIHwJ}c[a02|PNj-RWer?MG@W_(UcJw:0kj`e5Yj`O<$(A8om:cI4Iy');

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
