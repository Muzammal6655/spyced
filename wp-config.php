<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'spyced' );

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
define( 'AUTH_KEY',         '^bf%v_rTz{{0GxH(}/ucLm2{4J.A{ygMv(*MdPn`1e|!7sYXv?qiW]%.PN(M~AWi' );
define( 'SECURE_AUTH_KEY',  '0<@yfa|xP) !j1t/xR+6KNdEUoeY0XGQ/5^yL7E*$]m^Y%*EDf[h![LIf@hd5cI^' );
define( 'LOGGED_IN_KEY',    '7>6[ZHgT1ZFL<ko_KO6ZUv,_mSia$Yf 3c3I(VDTNgspi=T=aT@Tb*N@#S)Dz5_Z' );
define( 'NONCE_KEY',        'CQ[%qd?j+BZHM2rkqt[2oD7!FKwLa:Jn@SPi#7:?b<i+r&G$-GA!7Ldk36,o!rh[' );
define( 'AUTH_SALT',        '_aB>M*CWTJ<C>g;$9s5MwrpP*SW=<-QBrf/`MfX~yQ$vX[y(Ge9d*hQ,U1e2=8q<' );
define( 'SECURE_AUTH_SALT', ':1uR/[mBRDgsUU/}lScIFm>C_nW;I6:P?V@|pDpcy?)NNrypAYS5u%2o;AI66nQ7' );
define( 'LOGGED_IN_SALT',   ':dgoeSN?2Ex+L`B4pcmjbRC<3~dVd7:nOX(0Ab4aFm1yg$qFp$l+fCAb_gF}~(IJ' );
define( 'NONCE_SALT',       'X>$@*fk<K<l0;8kk;6vw5Ii!Qp;c_`6@[BDw^a#7[i@L~7N>~Xfq^*n,R=N](/;n' );

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
