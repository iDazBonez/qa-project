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
define( 'DB_NAME', 'wordpress_app' );

/** Database username */
define( 'DB_USER', 'opperder9928' );

/** Database password */
define( 'DB_PASSWORD', 'daZaPasa12#1222?][' );

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
define( 'AUTH_KEY',         'Ul/+GItf.X{iCqwe/c?IE?{t3$fSKj6eqAyQi}u?L?C4}Q>ujo~9&X0I/+Sn`$cs' );
define( 'SECURE_AUTH_KEY',  'm%dY}%VkJ)>/^}a5._(Z5jKR*Dntsxl[h]@8d5R5=zIyK92s{9=:_Qh1N?N<O2CC' );
define( 'LOGGED_IN_KEY',    '{3i=(R.5.|Pg]?#$r6 cB0[@c4=1=r!Z$^hxy3B(SC|HMS783?Q>BH0Iqw-[DcaZ' );
define( 'NONCE_KEY',        'a40pPLbqJE,d2b9Tg7?/aYYzYvCsO-tu?qV[yD&)GM[tyg08E>);2B`J2H23? gt' );
define( 'AUTH_SALT',        '/tBBn8@mISos>;M/CcNG^-rwrHE`qjGN-j+ur`<fs,d$wMp}eKtJMNRc,oi+X{`-' );
define( 'SECURE_AUTH_SALT', '*KK%&:jceXt8YZlQv`OwC]q0)%rH}*Ai>>qjV`;me)O{Qk2XKqS8+5UaGGAogMTn' );
define( 'LOGGED_IN_SALT',   'pgaT04l`?r.L`Hd;>1>%cc0BGuk{A#{>ExT#w*MSQ5JD $Rnwl*2kAf0w@n9Dd@(' );
define( 'NONCE_SALT',       '/dtuI2*y&Q?<h.&:Apnhlp44vag@-D{f>tvk>pH,>a&G3d?~D!fQs7; *h F^1=o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kottakoa_';
define('FS_METHOD', 'direct');
define( 'UPLOADS', 'wp-content/uploads' );
define('WP_MEMORY_LIMIT', '2560M');
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

