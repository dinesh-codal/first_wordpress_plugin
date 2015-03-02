<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
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
define('DB_PASSWORD', 'mindfire');

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
define('AUTH_KEY',         'xKliY33KPH|-e&45L3{!/)<B]-afG^qH^oV96_FQRR%!E@q.,n:oKex36o0<k@+|');
define('SECURE_AUTH_KEY',  '*i!s]+kUut3Pm6Cu?-)Z.)_R/3t 8+p9Ue{K=X{.!V:JrbO[N+-aaNJjZi}jAL2d');
define('LOGGED_IN_KEY',    'i.hVAXBTw*_qm?C/kfa`lar5DNYofn[vi6Ht(anIf2},~O5cJM)V*+m:$]|q|`i$');
define('NONCE_KEY',        'f/&GDXPtd/Q#W-*v!bzV^[xqkslrWP7+y8awA)3I8Qdj,:-bDxOD+i?#~,[LN9&s');
define('AUTH_SALT',        '|3:nXxNZmO-}fqSSn|.-]q/8vI<..~0-DW]lE+ZyUV<,QaT6<ibOjuX-ULraE8t3');
define('SECURE_AUTH_SALT', 'BQxuN*bHhGzV=)NJ?FG]#522esr#m?V]dlzbB{Dz[fNU-f`b5|_{Zj+_!n--xT`9');
define('LOGGED_IN_SALT',   'y#z Y-thP5FV$H4o/{-vK:o@&e>M-#ZN Wz&L+}R(M(n_Odpl>k/u1@R-utVnMR<');
define('NONCE_SALT',       'I#Rjr0ccm>+#zK1HGTxUpmR?vSIYzl)E3&E|<8k{ :-_NBIT.Npdv4/$-ce=[>H@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
