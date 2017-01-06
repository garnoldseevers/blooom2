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
define('DB_NAME', 'wp_blooom_2');

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
define('AUTH_KEY',         'Qc~6&u#[U^[n~;g|+-J(pD;dgyk&mk~4[k Ip>0:-~bT*l ^LV?C4eH^(|mFA9U*');
define('SECURE_AUTH_KEY',  'Y{$/G%>o+h]kR0K)?S0:M).[5W1$~/TSPR%V/5aexBJ9.rP`*Y|f mt!fT(9:nrn');
define('LOGGED_IN_KEY',    'V@&DPiaH3uAeK5tvfz)MNJzd@V*E)V%YWsA,~K5vk{$j{t%qiEkG[ZG/TnE%SnY*');
define('NONCE_KEY',        '|`(NR? 4~y@+ML?afFY<!Ir.;jQ%K4sj)3<F$,E_@~GFC6?oSIDS<J2Kk4aFYf>k');
define('AUTH_SALT',        'BYuIv86Km9#syWmFM~pb6*#S:g[RH9Q+05FD(]/mXdfw3DWqLn;`[JYT<2I&Mriz');
define('SECURE_AUTH_SALT', '#8GE@NpY#5+W#U3i.|_wQS,-j:/jwXs,@7+f73EJ-jqn|!oB1LO~CFo |X*+T::8');
define('LOGGED_IN_SALT',   ' U/XAYGv&,my p@SgxfpKNx.dc!8EQaDqY*DMtcViN8V[LC=uJ!Eg*&XOhrQ^Iki');
define('NONCE_SALT',       'HpQM&Cdd8:7%E-0Rhp;Yzx-4%GvmNw,8K,38`GB%%f[ x6BXOrFXe%sRH*|=kF2v');

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
