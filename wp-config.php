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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stagingwebpage1' );

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
define( 'AUTH_KEY',         '1_4Zni|{E{^wajU?*igj%ShYO48q_tCrny~$gax`*JQW/ub9.j/xKovTL.H]XVVV' );
define( 'SECURE_AUTH_KEY',  'o0-.SL0DI9?|lT(TotdF1$^/1W(hUI ~SV .Zdd:Eu;k.($])x?|MTa]0eWK,Ghq' );
define( 'LOGGED_IN_KEY',    '4i%X6gHW_RSOotOGX1:()+]FnHp99OL0jWPbsnF7*Ko{8X1lpVVyj{AxnR<c+Doo' );
define( 'NONCE_KEY',        '`Ed7Nzm5oyx]/hOScZKj`M~%L&taHewA4irx)JD F%n/L_!gUt}FCL Txx[Zp*+~' );
define( 'AUTH_SALT',        '-jkmsy8XO/Fi_.33_ttFN^$*{V*H/8.Hxd!G!pWDsz&E;UzVKNggfQt2e&|%!DZf' );
define( 'SECURE_AUTH_SALT', 'WPa;ORR5a$eciz!U95=6A)I!BtH*>RO4Sp$Wp@0n]POL2;DqR4PB!<zFJ@ Wzb(4' );
define( 'LOGGED_IN_SALT',   'L~5t?IiM)T-e0Y VWg7  #8(>qRKH10lfDfarm5)*T+;3kqrg&3gF-+E,Ab[{#|m' );
define( 'NONCE_SALT',       ' 5;d!*S;}Y?78XssV)$pO0s=YExx|yG}(]a`oCMklkZ2x.P_8xAA8iuGt8K*j%OC' );

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
