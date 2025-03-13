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
define( 'DB_NAME', 'bsc' );

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
define( 'AUTH_KEY',         '}S<Co~Ogxh8 bJ{MBl a`V!GW;Vm{Y pK[=0|7|&~/K?o&`(L7d?*@|=.R,gF5k^' );
define( 'SECURE_AUTH_KEY',  'tpMZ;fn~Ny|Y|Jz[rK7uiy&s|IT_`<H,;c9Q<W}+,Pphl~hQes+/s=PpD lgBe8s' );
define( 'LOGGED_IN_KEY',    '>?iqTF<ut)VP|-Z$}~k`Zk~Rd.B,hD,{Q@eM|:>1!YW;+WJ}g`5<KzYQQ<p4H !i' );
define( 'NONCE_KEY',        'dTTs/bQjWU5[IdeN>]VAv4zQ0Mo}u[#OAb:{OM!Oc%8<Vc;2G,]1(=a#):<g}res' );
define( 'AUTH_SALT',        '2pn_/ig0$C{|lmv)2O0B`#Q&_f[vAzI3S9#E2bY-?g77hN~ZN47JE[*Augwyq*}?' );
define( 'SECURE_AUTH_SALT', 'y3WL?XjU0gNzvCPNbkK)).O-h2u+dM1&?f@J[LG_Yt}b.a&1% J1.s@*|G+XF^h$' );
define( 'LOGGED_IN_SALT',   'M_9Zi{7+#05JxQY:eUqa*kimHWfm|6~{3 2BZYz[tFq!2,kUmKe(+N1&io&^w6/)' );
define( 'NONCE_SALT',       'ncYQ]:-W:*2$I)jgtkQsTyXVYL|Ime_Br{|tWep67@C0u1pltRhw5?W+y}V29.>e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bsc_';

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
