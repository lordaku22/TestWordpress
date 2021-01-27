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
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         '[&13xWs+@`&xow6Bc9m:|seSV7`$0:vY7IUdH5Y[)9>3.|w,pMU>8(_)%^^p+I%b' );
define( 'SECURE_AUTH_KEY',  'xj?nz@]YtYGs3CZ`Mp IaUCzf&rpd>m;~8bo#g7V@2NCqI4/iql$r?_^rLVAQ.O^' );
define( 'LOGGED_IN_KEY',    '9DkC9OyXI|<+.8@]sGY`P`=3uPNoujPC R/N.(t&%MCVaxvg?+Dp~O!}CO2c&iC%' );
define( 'NONCE_KEY',        'H+AvgE$5fM{R28V[GTQlt.e[+3!HA?WvKyX$;oK+D^]7M%FiKPT?$Jk4l.[$pr-V' );
define( 'AUTH_SALT',        'KS%`axt0_g`XfQIh^*[B-OmOHh`Baq_e:H Dq]9^J(06(Q^RewQU)Z.x=m#gvRI^' );
define( 'SECURE_AUTH_SALT', 'MS*t&0soS?k5h7<525,`-B;J8>,Z*7)pQ+@e*n_w6-e!z:?JlNl<1z6Wkl1*V_*{' );
define( 'LOGGED_IN_SALT',   '0v;#=A#j#}9tCj0tKXHUuM9HEqA-kT<-*vkfCh<78s U3ZkK81PJmbF<8={a>!(N' );
define( 'NONCE_SALT',       '^&L.Rak%+4,R#$l,|)G_rl9om5-~Oq/!mi]#q+naqx7yx=[ p=lI@p j]wGS}_C8' );

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
