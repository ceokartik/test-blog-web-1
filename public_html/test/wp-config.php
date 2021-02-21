<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u787768074_indiaiot' );

/** MySQL database username */
define( 'DB_USER', 'u787768074_indiaiot' );

/** MySQL database password */
define( 'DB_PASSWORD', '12@AmKaKa' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '0Ld ~*eM[{WNKp%fu2DmiKMWL@i.fvu_?<x#-xhhZ-r%1m!T*Z_Y9g)e_bAg)>xX' );
define( 'SECURE_AUTH_KEY',   '+7CQ H%&e^|THTc5qKaAFP6qBp~)4_qBDRIbHQmSM:R$8;pp2(l*WhX}S-VE`tI#' );
define( 'LOGGED_IN_KEY',     '@:2}d1RBjTAs{ K!k6u?08~.js%.Vwk/~pbNNb1al5gCh#GY*L#4sm2v+w&3Ape`' );
define( 'NONCE_KEY',         'u{l?Q^@<&3){S4CI>lqzV#<;oDKh:>_yy(M0,G?ow~x@q}vsnbt$4[??;h~rUdFF' );
define( 'AUTH_SALT',         '%Pl0RG*%>tVOjz)vxjov<qUwd_Y*~%*rZPr+$z;Ck/{:$,f#<hJFmn`BT//T8dsq' );
define( 'SECURE_AUTH_SALT',  '@vA~s[-.UY`3kNw|hZ]oD$#VSn2.^b#~hZ9H [=9XXmE8C%VL/HJ3Iw<.D59c0iU' );
define( 'LOGGED_IN_SALT',    ']zVP 0?FH49LovwHO.N3Pnib3k;Z[_6E_gtRkaD5aXCCxS9TWUdB5Q} bKwSN7c`' );
define( 'NONCE_SALT',        '])YD.iNw|I=Tu(0HFFTSWWD,>}){6[`7XBpB.%GmrXyk9+,}|j8WXscXANS*d|>P' );
define( 'WP_CACHE_KEY_SALT', 'd|h <Q4ZqWZ@tnRC5og|%GY{gs`F>@&s>zIjoAkK Y&{Rg{`z&ja=?NY% qx)/UK' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
