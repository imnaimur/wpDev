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
define( 'AUTH_KEY',          '(3=0CKL[gQ$tDLQ7/=?D$!/Ku>)4e$cN^hVbCsVh[pa;,s.f*&eVzaRGh0=n@*-X' );
define( 'SECURE_AUTH_KEY',   '^My?(e[h%v8HOgx?kZ+RQ=vaCq*unmLVGghMOq!Qbgg.I:x@}iaLXRI(iJqh`ocs' );
define( 'LOGGED_IN_KEY',     'c weZ^k92K0jd17lv`OuG}[eQ(3Rtn(p4VZn*Tg)J{5U7vSG^j($@]un_IVq+Paz' );
define( 'NONCE_KEY',         '@gzW1>,xO%E4_1/#=c0&A=pafrBforeAKXcM69<R`r?B@,_>L/lWc=t7yOtTQRX^' );
define( 'AUTH_SALT',         '(fM1egr.<OWxH2tW{4nC+$ ^jNar)L2m/)6c-phI<-k092rBXz^AWpFS$8A)f=wX' );
define( 'SECURE_AUTH_SALT',  'tLZqeB6zB^zp(4wlV!*,&@w?Te.Cxej!}pPfwzyeK*n>3n?B;J&h0`/XgF{I|BJH' );
define( 'LOGGED_IN_SALT',    '1IA]s1zKlhJ:XF2bXq;As4nE8kVtMFcbyd6C$RaA(MX]ek*<$]GCMm_.ps59z|Sh' );
define( 'NONCE_SALT',        'UaB}mht^C+KBpF-m|A2vuI7!^IC7f1nCg/.#hjU~!4(C3Nfx5&w*^:p!C_Hu l&B' );
define( 'WP_CACHE_KEY_SALT', 'EPN&Zys7q2_b|$CI-sPB}G!n:+hqMgW<)pt-hH@K9y^`xPYxV#*[W2R2$0aI!sL!' );


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
