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
define('DB_NAME', 'heroku_c24c903c0d1b964');

/** MySQL database username */
define('DB_USER', 'b0bfa82619beaa');

/** MySQL database password */
define('DB_PASSWORD', '26d6b89a');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

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
define('AUTH_KEY',         '&R7.C;g[&2Djx0JBIB&(+!:@bj<z4gRgTcFKqv/#+ipAeUR4B>GB tL I`ucqY@#');
define('SECURE_AUTH_KEY',  'Mrc!?Q(0#Oi*!cyaJCfXhr#JRUdg6ximC*D$%6L+@Z8A%LM~mEEJ+^x^KD/W;9vy');
define('LOGGED_IN_KEY',    '3NYlkpNWx+nUMY3(%;x`oLp{5=mI{vHJU:#b^zTAB+_z.@4I>??M&T`l2ZNm(eZ4');
define('NONCE_KEY',        'Jvd~$dzOzQ;dYcFG+z1iI}EdN/4jq 4P;uh5+(Ty@185QX:JVq+B911*16+BqwF^');
define('AUTH_SALT',        '32#9.WG+Nh@7oJKNl>Y(zr}Lo*NorWr8(S?&6S^77bW$qj(R)2Lqp-j!!/XA~OY4');
define('SECURE_AUTH_SALT', 'Kxr@fX^#W(2ZL B&RhN8SvQ31R#YNiV!?7y~C6$W(fC5.u__.y:h#4;8sUR/TNN?');
define('LOGGED_IN_SALT',   '-tg%S~B`xbDIM&njHZ?cXG2P7R?&LB2yY8_uNYZAOyho[!SNpCxl34s VIZ/:nPv');
define('NONCE_SALT',       '9r7AFs-=l?d c[kDwxJ`8wW60^CIj,FW*ZBNo*1|^Qk`1rnP2kS%]5?1#Yd!Xpiw');

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
