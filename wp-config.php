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
define( 'DB_NAME', 'thebbqpalace' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '43&:=?+g?zb#FN8!dFGL YBSBGO M<x0D%T`:m0C,Q:9H:=Z]u(/1KfLXpkG|J>x' );
define( 'SECURE_AUTH_KEY',  'l+lD0qv|O$od!Z68{6rRlGqg|t},G.H_gA;&_-4lKMEqH]6 5B}cd9.ekCm+?*.g' );
define( 'LOGGED_IN_KEY',    '@B%<IFG]Em9Cd/X=[_TA~B~2YXf+PYn)}`l3j&EFOY!Dp0~SlFi%Iw^nlV2H0JwU' );
define( 'NONCE_KEY',        '~ogDy3)Z%w>_v/VzouF>ytK|a.-4fmR$qNZK|t`Xs$Goz$MS=B!BR~TaF^UrFldG' );
define( 'AUTH_SALT',        '8DP]TpvE|giy.cR0`NJfy>v7_tj/4epu3#U-j-1J!wA`Q(Vht>O$;7-fPVC&&Z8l' );
define( 'SECURE_AUTH_SALT', '<0@DIGV5;dTlTd1Bs$w;692SnaHh( Ez>:%.t$J8-G@+7i?bhL,ncslJm.a0K.TH' );
define( 'LOGGED_IN_SALT',   '4a)g*TUAq+-5@/m~8|.fZgxsDtO@C@oC5Yrkb`+@H!(`i4$hG#0Ct=&GCMNbQp$<' );
define( 'NONCE_SALT',       'UTc0X}Wv]Qo/ugzL(0jG*F1}DxvjcW7A1eX&_uE&to}eIRL?vzZ.%A&Mob5NRZ+-' );

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
