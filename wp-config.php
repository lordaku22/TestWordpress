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
define( 'DB_NAME', 'TestWordpress' );

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
define( 'AUTH_KEY',         ')(=V$_!C/Hj|xZ7P>7z%8UITa7DG:VC$tO%4L-s7LVAr4`ZyQi:+G|L~SeFW+vlz' );
define( 'SECURE_AUTH_KEY',  'w&VPic+s? i+4VgE#|gq|vm._?7NDT#XS_Gv+f%gf*U<S~!j8k=COjG 6dPTbY4i' );
define( 'LOGGED_IN_KEY',    ' Mc3fvf)hY#aJNiwBI4nZpg4vBVj.b3%n$2zwHU_AyjO^2ml}n/cr-L=h{FcT-Lz' );
define( 'NONCE_KEY',        '1sf%Ri{#%99 (E0$qkueS:IND`K[^T8y _?q`>jdBo@.-2#`taVV=1P:tj?0R1LS' );
define( 'AUTH_SALT',        'P:V%nGLgf!}l&uplryYI%w6e}1L2:rQvnxUISb!bs>4U#7(Q878y;o}73jy{sdU~' );
define( 'SECURE_AUTH_SALT', ',ya,~hU!{j?9U!eK.7_E12&ey~}t<IVK92~%E*61s>Y)r~F++tiu4}_? 6wRm(_Q' );
define( 'LOGGED_IN_SALT',   'a|:DNz]q~_Odjd2`d8I;F5^qh:zrbID.$eOSsw~sTF} Gr.F3LeveD*_Cy}^6hCH' );
define( 'NONCE_SALT',       '-k5WWr6C7HTKw)5`Y>>|tLaLXmm6hsA&~zf%-Z]n.&GdKdcsQqxlfc0+%hMT)JhS' );

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
