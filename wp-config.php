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
define( 'DB_NAME', 'practica' );

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
define( 'AUTH_KEY',         'JSFPkhLTx[xVfz5n#LFZZYcT=uRAfeIKbc6g<fs(00r)J=wRP`C_Ds|~Ne7{Z|=Z' );
define( 'SECURE_AUTH_KEY',  'OTe^Z4<w>[e2q<VM7DnDW_ib9`}D|r6O^p n[)5%7O&>],~*!B1BvRhBhhb+q&h5' );
define( 'LOGGED_IN_KEY',    '.`oD@{:aN]p TTh*;w0T?;S]D5A#(3#aAFB,-X|O,<aFskm^|1<o>+g/hzT64!Tn' );
define( 'NONCE_KEY',        '_@KWVf+?y ~2ux5G?=I?W6UcwmpNr$0<JIU-9QsY1:}HL>~*|w=) 5bxhY(bn?36' );
define( 'AUTH_SALT',        'd$OR*{dnZ$6/AP=1uGF.t:VMvXx2-.?&<Xq^BdUabDc1N-G.m8JXG3Qxcm_gaN5*' );
define( 'SECURE_AUTH_SALT', 'P[2mq6&JYkBQ&UGYTAaA|j~A4yk</VD}k32]D:4J(l8RQnwBA^2},UX?[s{/FW.N' );
define( 'LOGGED_IN_SALT',   'HGxzMU!E,9Gz<dx~A_PciB<$;H@5BTy;LA=kG:OZjJd^0 R)3Z-n}Y$[J8;cJU7]' );
define( 'NONCE_SALT',       '*[$^6ib}AIi-~>m`D(M]*UkEvoGmc~In<WGTzdcTnR5QG( v`Qzx GMGYGBQOnM%' );

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
