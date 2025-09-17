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
define( 'AUTH_KEY',          's tSk:(`?ylm2$,bBwplLzUfz#_Gl}M#]tW^*BC@aLesmz)Uh1z=wI8rqH45lm!v' );
define( 'SECURE_AUTH_KEY',   'Q1Ea;!&6IwA :uM<U(G97@Yb>wW6bz[P5TnvBobtw#qPFd?fZ>9{usUx_p I]]/G' );
define( 'LOGGED_IN_KEY',     '7giZ0/aEo70:l;_*u=~?GI.82_]7?;SZ(.AONf},LHnkwyQUd+To_Q<-M@09zPn>' );
define( 'NONCE_KEY',         'rYn]T8@y`%;[nR3f10~tmic7-?XJ43rPG%-<%]h;d6w{qPDbP[.4~Qid szkd(_m' );
define( 'AUTH_SALT',         'P#@p}G)  2:s=TFD[3&L7Q-0@!U,Q/dx?bMOBggRBBH!/(^w9V3OHrfkWUH?}>hm' );
define( 'SECURE_AUTH_SALT',  'tAK /wbd,h,YuxE&p)V`+4}*re-rr`A%c7QEQSQOdS[YVpa7!r%m6mJ3C#NAcv(N' );
define( 'LOGGED_IN_SALT',    'gxm ~k>i6;_SdJW3sXLJ>1MDVpij=RJRP>CNF-?/P)n+{2{`c@m:{phbVVH8Ixt@' );
define( 'NONCE_SALT',        'r2)FJ=<lA]0ZtLvsv*C_s;2(6][/Mou2[kX~AKhxbEEBQuC=h7],qJU;U~kOH$FP' );
define( 'WP_CACHE_KEY_SALT', '2|)7U@ZjJpscb&ES2NNt-8&C-#r=#A_yp34BC>qzzz/`}f7+4e([~)`jb8Z}(#[r' );


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
