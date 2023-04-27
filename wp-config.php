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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'l#,Ajl:I$n@]&]xr`*-/(j1ZZy>26}6 kzZ^ik|2(i=$`{uKYlqdn$1wp8u6zNWJ' );
define( 'SECURE_AUTH_KEY',  ')AZo~TRiOExjI4lxtJsjm|`E )S[~+hBR`py}m?|hlH$2X!-7b}j5hHint*,t[W~' );
define( 'LOGGED_IN_KEY',    'M<1=n^BxeQ{.GPMmL$]gmU|W^rOA~lP%f$)hi,6WJQ)^~q`x*Pn_+}{Y+u_9c]IA' );
define( 'NONCE_KEY',        'r_&}ptnun_-F-(quK}{R)%)>7:g?O>Bb&]^=D|)tAFM?[z:Von;H;>7JiP;$?<Ua' );
define( 'AUTH_SALT',        'rjB<V%E<e+aB4v@IIu<;7]AjaMpcn@<mzk}32PwvJx8bxoh$$-wV,|Zr&uTy&)hE' );
define( 'SECURE_AUTH_SALT', 'b>LNVc$,ciQyDMi_i[$@lx(7FA/NJ;KOhk/(](m0u9/~n4Qc{4X`%Ui/zjLO@-(8' );
define( 'LOGGED_IN_SALT',   ']E.|`SKN; ;I[6|8JQp{9KG:LZ-B/}Fz2~xaeB{Yh=0T7+[>#THxF1oG}>s#*4jb' );
define( 'NONCE_SALT',       '1p.L+T<p(.*+P~NiZI<6T|DKPXto1+)e=KJi{7dhD?YG:xtr34NY%az#s:-L-7,|' );

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
