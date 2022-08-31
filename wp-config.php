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
define( 'DB_NAME', 'resify_db' );

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
define( 'AUTH_KEY',         'Bt_sf33h&EyYbe2X,gAA.4~k{rops]y+b1mJYaGB{zkJK:9b2x[Nh!S^k&Lg 8L5' );
define( 'SECURE_AUTH_KEY',  ';9*[psoA[DX%.=*jgibqJDu<GgB~ICM=HI&@F^e!.h@/meK6RNP7!hT `4#kz7Lz' );
define( 'LOGGED_IN_KEY',    'A>@deFJv:j:G[0#JoWr.w2g3ykb|6tfz1aQ~VZCP,t*?*(y|HZM!U2>V_u~~@.9m' );
define( 'NONCE_KEY',        '6n#HcQBSXDx,j>dz3QT/M#F1[mGpFgi<_l6:.-T)OG^17K|KASe)3>1w|/+tj>[e' );
define( 'AUTH_SALT',        'jccJ{;n|3ZZyhat;Im-Zfxs:=SOgiuQY<LOlG.1EI<I2FyQle<Ve9u@6}ij6`=2a' );
define( 'SECURE_AUTH_SALT', ';^lpHWdXMk4 pT1G129Hix#GbUnHqMozbZ&KAaR*ij~t8wIesU79hM-Wex5*XYvR' );
define( 'LOGGED_IN_SALT',   'y/Ds;<aT/KT-v}<k$Viz}6K(*6tFIT!xa2(rTnM4<l{J%%-h2N6O2Ba+A%^*9<cU' );
define( 'NONCE_SALT',       '3[<7*/Kq$x %~o/$de.[OdL<ra_2k`$+Z-vgbB]Gl4z~3@NH-K}KA7xflZ/N4H=J' );

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
