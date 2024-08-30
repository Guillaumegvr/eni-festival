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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eni-fait-son-cinema' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&=hkq7.,e2BW09&Jf4pg;>;h*8}bv%1}Tqw]zU@m+%~(V9=s`L,s9DD<[?vaf-6!' );
define( 'SECURE_AUTH_KEY',  '@XFGtRm[3;yKcht<by-cb6E.kVl?-nAs~^Z~O7_ReiQ*(:d|#in)MWFsh]+0J{4o' );
define( 'LOGGED_IN_KEY',    'Si`7!<Y2yg1m,0=@_l&MOPk7J$HVyHv(=Cbq&gLDC9@3)/(n2ok?& C#5[=q6Hc9' );
define( 'NONCE_KEY',        ')2j)csP/SUr=[IYNI=LuaM*Cra9Rfm{b5H^qv)ODvfd>3J_`cuE)y.yZn7dOoAg;' );
define( 'AUTH_SALT',        'isv U7>rPS_vs@9li<&=5SUO^;6y:6!m|#K|;<Lg05BGXf{1;G-/!#h8p*Y#>DTW' );
define( 'SECURE_AUTH_SALT', 'wtMnd%R;Ec` =IT?jUCw2EQ}~ie8|it?U,TWt(:U62,J4_i+(4W(Fbxh|^~R@RFy' );
define( 'LOGGED_IN_SALT',   'G>df~K?4]Ov.=X4/zkET8a+=uT/|Ul,(:fRng=J#r9@tN;fri9sL%[r/<+?k-XO4' );
define( 'NONCE_SALT',       '.[AdkB$$4<[yRZONf&DrM|auV?Jn9$3P*M6RR7_&DDeX$PdgAo4|zQ!CIheS2Isj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'DB_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
