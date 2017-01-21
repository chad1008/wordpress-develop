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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_develop' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'kTS}#m,jLv$Ov?kZn??Gp(EW@=xyzT|z6-E^56lt;zXvI(ff1*ExD2sdyVkY&Z?H');
define('SECURE_AUTH_KEY',  'lgQg9Cf9-3*=;j-HC|n/WxVhgR0`w?DS|?m$?NIQpfu}Y3XN7P}D/xLFD$I0rY3F');
define('LOGGED_IN_KEY',    'jn`db>T-nBj)Fc7$ IPYEP`}IkZz9*79$A^]q&=B(<Tf<|3 Ys^M|3HtW`M5cZQL');
define('NONCE_KEY',        'rj)|DtIj]^GXR$dXv3c5jONVlGCF|$ ](#hictmP(4I[an*g/nns, B0ov2P2TaE');
define('AUTH_SALT',        'wRG|T01+[qwl{NUjl2+ihNmUNel&IQ|)lqm-lQAR~-2Fn~{+PM`Or 0Fg!}SdA1)');
define('SECURE_AUTH_SALT', 'r>M_T|h0r.(c)k!`wZusG!T,e+6{v$(;}CUdO4*fX>$6-U3K4,uZ]KqjyAdIICH)');
define('LOGGED_IN_SALT',   'P6rg>B?]!JZQGoX?B}WKQW|$7~(EM>V^Wa{nE6EA-G[XQOC_)0pb_*~*Ek1UXzh-');
define('NONCE_SALT',       'N8qjnJKi:Z9cYYCcGlCGfd!n.S`sl/8[n6$is(1( wO**ZZn|${^UNx]uuKyNqrg');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(src|build)(.wordpress-develop.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
    define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
} else if ( 'build' === basename( dirname( __FILE__ ) ) ) {
// Allow (src|build).wordpress-develop.dev to share the same Database
    define( 'WP_HOME', 'http://build.wordpress-develop.dev' );
    define( 'WP_SITEURL', 'http://build.wordpress-develop.dev' );
}

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
