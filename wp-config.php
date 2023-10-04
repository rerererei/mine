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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mine_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'ZW(mwNn%|(J0>rdS/WCK%!!)vS4Ay3uUE>,s^%XCup_!+uG+dIuVX]87mcB$-kG*' );
define( 'SECURE_AUTH_KEY',  'K/^bPCyZNcbl @//fh<MZ?.U$tu92|NjiQ*`DXZ.m=/m[+8:1?(7X,Sv*ohi*;cF' );
define( 'LOGGED_IN_KEY',    'n:~y)Qgykt9TiMyk25ln`y>&{^G+pjD|=w%/x]@v@H}Mz>N<=Mi+ws}Ja17tF=l>' );
define( 'NONCE_KEY',        '-%~@]Xj![M@sAT:aBi`eJL.-6|K6@K5=d)Tq{W#kY+e&Bg3.h&,*=<PRq<gHv!cs' );
define( 'AUTH_SALT',        '2m9b(8=Xi$wA~kko]OEW#(T`GFe4:_I&mN),+S]XG?h6 6d?/`fY6$WbXi&@M3{6' );
define( 'SECURE_AUTH_SALT', '+0uOu!A>I[}/}:CGr3uT`EMNk+wX]G#oI,NDfeuD>K~%KrO0fr=w,T2:<*@V<;N>' );
define( 'LOGGED_IN_SALT',   ' ~NRA#FA_3>UA1KQL;r2c&;ME$[!^c?P].k1eYN61#|G.L!?RLjKGL(Eh!!~R7io' );
define( 'NONCE_SALT',       'pJ,V9o_vI.<G$sM, m47?r^npgO1g.kpt#0=#<1cjJDIoH{|FcFIJHTSrM;qtAN2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
