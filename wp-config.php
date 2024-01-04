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
define( 'DB_NAME', 'webtec' );

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
define( 'AUTH_KEY',         'C`TohG}&47o%`63:gW|pAC<ZF^btu,pQ&C#lAy(3sjzRfd$s>4pi?.Iy^Gu6i(Qk' );
define( 'SECURE_AUTH_KEY',  'PCPENUY^Ih22#,[jr$dD(Ny+7^EEEmf9Wr=-?)XaC6xuu/It}z;Jwuy%$s)j5D>a' );
define( 'LOGGED_IN_KEY',    'ZP[BH-eY7=_7JM:Y^t-:UY6a4aqs}8ewd ;ev^Xa@/r3ana4KQ5Tx*.Zz:8gCpq(' );
define( 'NONCE_KEY',        '><A!B$WBq;23JZ-]1IV~~uo4G$F/FY1_Z~g5%]QUG@ `1%F@Zg<z=1IQ$D1+Wyyg' );
define( 'AUTH_SALT',        '>zi-vPLR;9Q5J:x7%Idsc 9jdlPSQ8V$_&yfNP)>/?5+Xb*VfG(h]@HidwrEgxfh' );
define( 'SECURE_AUTH_SALT', 'B}Wk@(h F.X[MSklgBnXy]d!0xvsw8a a-0W=8M<O*cDc:&mfzy%RG]z!V4N8_&9' );
define( 'LOGGED_IN_SALT',   'nd:ir/OTIc*<H4_(@u~&-$gn3gl[1&@x&0FCUfPVNuVW)PzVkl)w%5/QrHcoA~4R' );
define( 'NONCE_SALT',       '%mz@Mb8-PZ,b2p+&`Y3J(o]9iBtat/so9N-]W@%;5BSlGO1-4hcRUjZ CP[{Ue3r' );

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
