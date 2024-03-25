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
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:9000' );

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
define( 'AUTH_KEY',         'bKDXQ, oR|i8I6.]wE$o@~/B6fCIVW+DD_<~bduCPUDlN#uRc]paZ#xk0pV,yCnP' );
define( 'SECURE_AUTH_KEY',  'J%R*s}~dh7,$H{9jyNkA,a<S|XSihZ?XJfc@MeTAxr:Hp-c4_If2:j`J(6_.(OC9' );
define( 'LOGGED_IN_KEY',    '889~?4+Y#/WqkL6LF8*Z(*+RG1p,7}JL&bnJfYr6E?fUaGpc8Ey2{8{ev|Z_Hm~6' );
define( 'NONCE_KEY',        '<Fh%2ofxGi_ba{Tds<&{&?5ox@)T3!n*SY4d^gmsSu9)E:x Dl2*[QnnUW*^wkks' );
define( 'AUTH_SALT',        'Zl},nv*ysV8$1nI,dcWlpEH1-#5Q{fugd:T,oY6<y;nGVy ,M_B;ny]EI.LcQ$zp' );
define( 'SECURE_AUTH_SALT', 'S!RjOd5BnBMtuq2yvh1t~K^BR9FD~gDf|_lJg(u@8dYjH)N?p|.<k{/:Th@c2c,#' );
define( 'LOGGED_IN_SALT',   'o-7E07o1$.eIf.zLfN#FE,`O%5:|LB{.Qs0|~r#qgyGKMS#A!_k|]?08MSVflb)i' );
define( 'NONCE_SALT',       '2sx{?uQX[ni7uE={?|*Mb88 :%0}(JMb>Ga#r7Ysjl*S6,B0wWo/Q1=B{uC,QeVr' );

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
