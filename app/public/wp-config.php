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
define( 'AUTH_KEY',          'z1R-L&rdx-/T:S=&Q;(I3vIBPpcI@kJc>%]Zlk`B3L3pWYSx_/Sh-*5?+LY}Ix<N' );
define( 'SECURE_AUTH_KEY',   'In]D~7&<oXOEnb6Z3]F|KYB@)733A{7T`7klpz92>lN[>H7MGg(A=1#=zP=]/2JY' );
define( 'LOGGED_IN_KEY',     'Ordp=RkjVsq{+[&4$(QXAq!C FECg3ST(H=1jD(Z@.|.yE2LF1PbaBfPFksf(<|q' );
define( 'NONCE_KEY',         '!E,wlUYWW.s8kx)<G$*g{D);K@C-(vAZt-$Y b=$!@m5V.5|#.W[<Azf5d2a)A&)' );
define( 'AUTH_SALT',         'y[NL(t`lk]&%NPxm0KBi9h_8:T9zFCAK6H,V#+KKI{C/)fp#M.$3tlR9++tS9~ds' );
define( 'SECURE_AUTH_SALT',  '?h$qsE<zKtgD6an,LLpM9Rq_mEW#G: ;ZjgB6wec.qE!N$S{c< _|T6)0PS:y1h:' );
define( 'LOGGED_IN_SALT',    'Tm4]!vJjV!n,|p.Du@k)ABtmw_zq|~~Xu!foo^vW~t|qQ?=?KM&KFRMB1b8[P|Ia' );
define( 'NONCE_SALT',        'l|Ayc7meD6>V%o#q;,dDA<^}:sqm;F._`d7Z6)<)5qq%*prbh3LaF;$-4qh0<P8j' );
define( 'WP_CACHE_KEY_SALT', '4P-rD5(%!2LEuQYq@OTLe3Bt4(T7D) ta36VtUb#J?O0lB~Kp{B!|UsF)8sR:E]T' );


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
