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
define( 'DB_NAME', 'tech_wave' );

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
define( 'AUTH_KEY',         'b.?V`uS~c~|nQLlw_*|F6,qeH:/X6hGubzgpEj0zV|i-cpT..B0Dg@BA6t2mUqf[' );
define( 'SECURE_AUTH_KEY',  'GFz(G#S=I$l-c4Su0HmQ@l-RJGyEzVXYn/N|aLJjGkF{ge3`BGhIlywKD+)u}Arc' );
define( 'LOGGED_IN_KEY',    '5su4d}8-o[|t=DQMZKd?iW~)P=OFM2LSW&?wK{JsKX];Sgmj:da`2.Vl9Gs#&$r5' );
define( 'NONCE_KEY',        'qT2>&Hi1C$f W;EvUpqs!s7^P{$kQVb:b7]A0T2?@8zF yOiQQc)OozV,)s&`LZ!' );
define( 'AUTH_SALT',        'jZk|HAm,IkGgDr%F|tOb*+]D[&%f#%vWWDBrt6W$wrdCX}/Uuw`k&4hy&Ey$Ww>>' );
define( 'SECURE_AUTH_SALT', 'pb?rgvmP6M|~a0 f6hpn<ZEFx/;;N<=IABnXy?;jnT7r692$mnW$2`@+EPzwIeTG' );
define( 'LOGGED_IN_SALT',   'bqnpm[ }oTkNDf9YR|/T!m{TXmV[&|dyu|OUs5XzK{d8{wgnw{F[jpH5ryFVOMLc' );
define( 'NONCE_SALT',       '<3cnY[bdW{A:zV|/Ei4g,#&f-(sC$bfS,rTS9!)1g2[;VBFK;E8#v)0C5!](p2bH' );

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
