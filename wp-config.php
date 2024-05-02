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
define( 'DB_NAME', 'davidhow4' );

/** Database username */
define( 'DB_USER', 'davidhow4' );

/** Database password */
define( 'DB_PASSWORD', 'Univ@liHow4' );

/** Database hostname */
define( 'DB_HOST', 'davidhow4.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',          '-,Zkr.?Wg*`IqR<5S0GX1$t9!v9cnYX8dV(e<]GeV!#.8w)u|q=hS[ihge1yY,aZ' );
define( 'SECURE_AUTH_KEY',   '>V^4AVV*dh)]OA}5o`# sfq+PpGm}m4q5TbUQ N}Fr3[OQ}wdd%2z9JzG BzWUcy' );
define( 'LOGGED_IN_KEY',     '5UCe.e%dN>T`%{nC1|<Y|1KCTDrw)F(g;qZ^mmyQp(c-*%@,N@ta&!m[>c)/>)5j' );
define( 'NONCE_KEY',         'j@^Do2Nt@V]y>0NN5T4tOa=w<*Y%e])=HM)jT,u?G/;il?0V#?H7{l|Z)vl+<6ry' );
define( 'AUTH_SALT',         ']CM#8EV$&} -GR!ND}Z0F$N}Z;YypN>=rC,0:Y-[xE4(YB`J[v,`hUC-*5}2poRd' );
define( 'SECURE_AUTH_SALT',  '_cCPj> (z.-j_b%7tf=+2q-bLj@/aWmB+qI2p]j(dFg{^o}hcHCYn=@k:MxmwU| ' );
define( 'LOGGED_IN_SALT',    'd NExEC|~jy!uPN1-8bU/%oUF^,jN~2yv,y,3X:BK,^yE@hLlJP#V$s-IX./aR5r' );
define( 'NONCE_SALT',        '-w?U1#Ap*<cKC7mFx@+yK7bY!+A9iAqlDvkqj@EwtZV:jGbVh0p8sP>gkC- 3%JG' );
define( 'WP_CACHE_KEY_SALT', 'i^&Xb[P8hUv!BLOD2IQyB*CcsR awJ%7_L8 .x$2.aqM7eh5N/aVLhuN;L}Y;Kok' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'how_';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
