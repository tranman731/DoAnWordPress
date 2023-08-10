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
define( 'DB_NAME', 'wordpressudnm' );

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
define( 'AUTH_KEY',         'ABf)|+lw+0$|4*X8z(:zg)fm*qaD[h*}stl<Y}5QR)ps*n+/KsWw1#@h41Ge4j H' );
define( 'SECURE_AUTH_KEY',  'i?>k{$D25WK}RtUf16A.x[Q+/atf}eR8O=|F>G(h>%qzMPd_dsrEF)Q=I1{b$?h5' );
define( 'LOGGED_IN_KEY',    ',St!pLJhvskH_W]J~[Gs6Wj{:<J*2ef8T_+H]ja7k!LBgC>Z+VA8Z@,G$3N#_ch^' );
define( 'NONCE_KEY',        ',f,O#9m=C>:UQ_<_!#VxzK4YUqKVv.jls`6=e4[`BFv$Ho7q%~tU:R9u<~C(G3KB' );
define( 'AUTH_SALT',        'Uqv<6{k6>.)RTv;/ZEWfiDqTYTwz+xLSp.0qO7J4pt`!4L?P5CzWU?Dv=kr`!(b1' );
define( 'SECURE_AUTH_SALT', '=[D/qlz_PHep j0gUGDGiD@=1}mE|Ov.~R+UeF0Gmw6t3;I1KwB87!qm$E!U?kMj' );
define( 'LOGGED_IN_SALT',   '-8PY0|/(^E!^BHThFHAi)r0f8OBJM!^lG-8EVKB5I;)gZ#x+~il<BDqyT`$ox#_^' );
define( 'NONCE_SALT',       '}rrzJ/kuHpxRxaCQLny,rQCtfe_<TRS8}7}Vo&|Lr&n GmIrzh8;lK3ev1nI=mnD' );

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
