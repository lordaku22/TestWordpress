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
define( 'AUTH_KEY',         '/6.Y`b,N/7`zH2z!rOA0-X8ot,E=b8nBlO9<mBV_Nr&w,$f&r!3s b.!MM`8Z-5A' );
define( 'SECURE_AUTH_KEY',  'N-lZ2Fvq/?lI#iU9C>>{G:E_ra![M-x-P[lJ DJmexWc3k&JdEd>!%h`oRkbBSxo' );
define( 'LOGGED_IN_KEY',    'chFv0LVPAS)(J~DWD#n~ZgO-fJTlq!*v^jWWY%_g*=LHIt5unO%Vzo/F-t#pTCjs' );
define( 'NONCE_KEY',        'B~>?CuO%5+2gjSUiYn3rj/dW`oD)ka5b2KyLbQRCu*zb`Lc6Ub05o7U]<yTO7oL/' );
define( 'AUTH_SALT',        '[t/tOi]C~7MUuurh,xTvl*!pp#9=_R.%hb6=_Yp_Mp.P]jN{m<aUm3w!tjEslK|D' );
define( 'SECURE_AUTH_SALT', '/>]}xi<bIQ}OvRT;:?LVG:anF3CI;r/#DO+Y~i0o*oGjf~<uZJTh/!Gsc#ekBW#,' );
define( 'LOGGED_IN_SALT',   'eVj=&%qZMg)EDj-Oy3q)V5X7Z7Y{1G^ (t`83-<J^L9Q#|6{9EyhhPg0xBO_X}tS' );
define( 'NONCE_SALT',       'St(m@qTU6h0yATaV/aKv6~B}?S1,@Gs0t8q~c]%m:a3n.%rXwQYdLGXc<<ll]ar!' );

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
