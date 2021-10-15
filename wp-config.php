<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%{dk; Tu0`{`Ix2m`r[S7yi:O2kf-3kxWY4jTtrh<Mn~jwUqqsfyj_U&@UfXehHM' );
define( 'SECURE_AUTH_KEY',  '~?M%9sy@=gXDytg V+WY=hh$-JDEx>e[$=iYpeEyoEjop|nJi6o%tL/?Qi<T6R^Z' );
define( 'LOGGED_IN_KEY',    '5yB`I>09]Oo-y6.eKZ-GrA.49W>VnPJbHLUg-lla`~O,Ya4%cNObJB4-<x:MsAJX' );
define( 'NONCE_KEY',        '8f^Rmqv^E0eb0 WDO%]e 2H.vMpiE:IE?7NY-_@T&TGO!ezI!:F&tUO.u`,i8NJH' );
define( 'AUTH_SALT',        'KdD7zG&7Z?@qev F)d1j+*,WxP+]jwbXARKr;THL.m)FJ|U%IzF&/I%@E}F+E)Fj' );
define( 'SECURE_AUTH_SALT', 'yY<$QX5xQ}|W+Q.@f<dWq$4SiOoe:4>*~^z|`V=3-P#q^I(U@Ul!.AP6_Jxv<vbD' );
define( 'LOGGED_IN_SALT',   '0ivO]GmB{i& m#UyOR,*^u_QACf;$>Q@.3[$4mbG.*XmH-%WiM fo$%GGBJ(>*k#' );
define( 'NONCE_SALT',       'e([#$1cJ(WgX~pn^+T2hUG$l[d*0)ayv[.kdk=L|{foV@BZ)d7@.0^{dd*f/ >)9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
