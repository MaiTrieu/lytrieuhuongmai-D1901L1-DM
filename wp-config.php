<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mai' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',UTk8r2|LLVV-iOXycKD~h9oy/eUK%Ik#^ji<mryd?Kl>I7W[{~dnPqTJ,r8MfjI' );
define( 'SECURE_AUTH_KEY',  'IF3d|Sp>d}u`0DJW9?@R<)M+.}LH7`~_ wALRl($jtb^3-VBRs.Ixug0[Rs j~gS' );
define( 'LOGGED_IN_KEY',    '3:ZIc/bcBE/.:I]FTm/D`M@oO2)7!`VtM4L1@8haZ%wVvA(x5g7%K>Qn[g989U.n' );
define( 'NONCE_KEY',        '2^4|fy)JZ[wKDUIHem[$7,v$gyf,R47Hn%7SW&j0D1eJJ7C:W$hc0<E`^)hl8@ [' );
define( 'AUTH_SALT',        'F/]a*RT!ZaUJ#dIb8<i;tC4A=I*PX]Pk4F^nf7M:UIeF8Kx_<?9p(6.X9ytT/>bP' );
define( 'SECURE_AUTH_SALT', 'bv[PKS+e_GD#gMc^~L2IdOfnDN{hp0GQPL@gwD${D;P^e4Nc[b,Khm [:Bf.-X-W' );
define( 'LOGGED_IN_SALT',   'R[z}VW<{-Ip,J)xwr<7_Q~A>Nb594w@x;}|7df> /jzDmC]?}5)UDZcH(h.7p@lK' );
define( 'NONCE_SALT',       'OX[K|L[R.i6&K/64CF2}jdL8ysYiA4>63%j$]Dk/!i;[]ukI.c )(N3F3IO9+%@?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
