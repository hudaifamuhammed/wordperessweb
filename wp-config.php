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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'aA)W#d^$DRkSCJ4GnY{!H&W%IDMe/6$qY18JHq$,(C_dOv8[q)M7wQB`u+u o?<V' );
define( 'SECURE_AUTH_KEY',   '8B1o6gL`V2oDUsb:^p{GJQl6DG~RZi_:;D@>T&+/a-il!Kw}w%hgNz>=Dv^TrF+y' );
define( 'LOGGED_IN_KEY',     'wdJWCyh6Yo!P9rNyyGB57|WIFe|A^_wU`6QjC,AcMKiV( Z.-$hWGk!Q|ufy-].^' );
define( 'NONCE_KEY',         '}k{LhmYjuHC<zvd)GHV`S2T8?Y!b_@n r/8lS rv_K{gn<K?jM>K-x(Ieaa3DmD-' );
define( 'AUTH_SALT',         '/vp)&U/<[t,}%;WcY%G4M`Dq#s-;%*Ku#)[/ xSX,tVlQUsUY, ||*Nn+wXjMHE!' );
define( 'SECURE_AUTH_SALT',  'UA>=2Wwb81hhym1p7Yemqgjh)/b&qmym#CxMB5H^&.+NA:~8:WE@GTJ:[XV/_3Z4' );
define( 'LOGGED_IN_SALT',    '}T4wu(A93U$FNGNQ-yzW#/1x*b>[$8Pr5vTI>,t4{Pop4pws}#h.B9&4OgYNI=6*' );
define( 'NONCE_SALT',        'A^LsMN>xMPN~!9W9MA;T}Sq(;T;((/g@*`^YQ{:^;_>a`(Lemy0Wq!{76VmzM.uX' );
define( 'WP_CACHE_KEY_SALT', ']kFa``56KF` T*gSL;lR^d+j[|Hy~$x.4C4(:Mgf1VL*kyKtB8L!?j)m)&zK@G9h' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
