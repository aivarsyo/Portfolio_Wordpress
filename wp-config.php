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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_webpack' );

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
define( 'AUTH_KEY',         'C;vbH$J5`M-xsC7{@o!Y*sz3|lxLNPZcc9F69hE~:SMf!`]Q6Z%RtL0-^.3v-xAl' );
define( 'SECURE_AUTH_KEY',  'V487kCoHCjY@!9P0K_9](xd(^`UMO<-W~17TP)QC~b54&#TJVYByIh,/0H[nlM+G' );
define( 'LOGGED_IN_KEY',    '|k}xPc^gzg%Yn2bYwoRxT(t0.cqDO>VF5rZ,1E,@2+5.WM%@}:F}1[#RTPU}GwbW' );
define( 'NONCE_KEY',        '62b+>{HiW]Zp!j7uZO@}[frqa?Ro<u9u05WHAjv%f_% K-z?aPQu;S*W$X|Sz]cy' );
define( 'AUTH_SALT',        'F0O9LX^MZoQw5-8w!1zV#,FW`AT%MC=%1nN9[S]+5x2Y|&cinRnJ9&9B%IR@+s5M' );
define( 'SECURE_AUTH_SALT', 'G1D;Cp!/a{PzCg24[`,F@VA,w/6_PqFaan=&ZE]<:Ilx;W@U[HB}6H}_QFckWZM)' );
define( 'LOGGED_IN_SALT',   'QEg[&G_T3+~/F/iTICc.CGh/P1#}MP&xnsG>GIXoz;X5POFwh^8SDD}O`cDE86^>' );
define( 'NONCE_SALT',       '<5D8?@1E{7yTBb}}Qh)++7_ !sKY|OM68yLPFNV t>P$9|x3+[p#iA`(/k?EGE_y' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
