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
define( 'DB_NAME', 'mibase' );

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
define( 'AUTH_KEY',         '-<J4hb&GF0D<tzExZ^qu-pn:oD)5F2x;o0+LN>3Rvfw*Wn^^Q^vMq(P_cZSSdM-7' );
define( 'SECURE_AUTH_KEY',  '}oC^Eb-77FCmp M)/nt91!G2[2-`w%Jwb`!/?GwxLzAn=,?!Y?V|A.LcY>HZd1X$' );
define( 'LOGGED_IN_KEY',    ']8KG6v2nB&hI> N`0Jh(i+YrL%OGZsJq{`>STKPAgG_>&0[eJnL0A07KGY^7[)_L' );
define( 'NONCE_KEY',        'xiE[MA6G@mBu([Fe)Z]<R`vI{JInU?j%uY0%@+zt*p|}I@XmoP?=xy:.7BAr(cfU' );
define( 'AUTH_SALT',        'wup;TjB<Xxd^tfiR!/:3`wZ|zLa[q+*zRF=}#NfWK`RUd8Ax14%8[OB{ciRg+Hj*' );
define( 'SECURE_AUTH_SALT', 'Hcy-392`-i]M,E&,d-PdxSRj6AKvctp!#)]m_{KjbJfW{daxLxGNnDj8Zb+Jfcki' );
define( 'LOGGED_IN_SALT',   ',%}Fz~:{ UE$Nnpa4S(q?Y>.!mx`^K[$,Z9:*5b}Y!&} 3k:wr[h~Y}eBi67.rG=' );
define( 'NONCE_SALT',       'X,A@G!E}}Z@~u^+lkCTHB)LxJ<_ot@s<YWPy0G$:SnK$v5sn;Hm@E@?X&STip2pb' );

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
