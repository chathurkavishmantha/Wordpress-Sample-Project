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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp3' );

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
define( 'AUTH_KEY',         'Jofz~{o]H3ziMwxR[~s2p@kQ52kpAQi[~{:N$.*^2^%g.oFuNChk0/wk2=?F69q,' );
define( 'SECURE_AUTH_KEY',  'lw}`/:W>yA?h*e+Q(O]VMe!gq<drBv3f!3n]9d->|(Vv ^~]5f&In>`f#0?>%iX8' );
define( 'LOGGED_IN_KEY',    'Lsz:7QX=Tn[$yuT{Z9*4fJX;h^>=M[_S+INiIms[6_;ZYOnC%]YvOn<-^X4^]axK' );
define( 'NONCE_KEY',        '<H!FuS)f,NPx`D*5$mJQ5]r6Oda2Az1C$f4F;^A5 ~TheB=8OS$0Novy(ypE]iS6' );
define( 'AUTH_SALT',        '^;M#w^83,M#!#Pn|Ios*WEf&j{^={w+a*{](+e{35wTx/K<|-0(xRNXXyb^[$?%Y' );
define( 'SECURE_AUTH_SALT', '.O?&ObFT _=l]bH1dRbf<-C/J6B@vk[k(_LFPZ,.)(C%Er>.`msd$V,bn)RZ4WCY' );
define( 'LOGGED_IN_SALT',   's-Mzm_f+t(gC;jHvV_YIy)b~l3#2dCNcr5ufjww`b_{SK/I^A|fsDk&wWE>E~sEY' );
define( 'NONCE_SALT',       '+(Q2e<wpE&4D0*,}wwymd!m2p3OulY#NN{#TPvfU?K,ZNj-]Bk4#<cM,[?>gV>W+' );

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
