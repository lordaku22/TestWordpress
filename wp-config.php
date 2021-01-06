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
define( 'DB_NAME', 'proyecto' );

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
define( 'AUTH_KEY',         'c_f<Ayc!66p[Ao+w|_TW7`%kGjicz{z^&g93B&}j*P1CP*Bo!? 0#=u?;03$ZFdI' );
define( 'SECURE_AUTH_KEY',  '73(+d#K[e%Z6~0vdPHJXl+X}`vj|CozKBsGK+5r@*QPL:s9r+G(vBb#>;/1cGOBE' );
define( 'LOGGED_IN_KEY',    '=cUm]JZU`XPjQ[OcJCd;~KP6rwX+*F/7Ij%GKP;3XS.#rU{M@:Z=Xw5WzQg}J xG' );
define( 'NONCE_KEY',        '{BZyt$lw&* nD-KX{MQ6bnm=fw.?>cfVTb_j/-YaU$CM>;5jB pF5p`A5v0Td/@1' );
define( 'AUTH_SALT',        'zc,ib8=m-iZZt7T.NMn;,2)(M]xr4u7iAZY9}[s?1vQn+Bj@J@EWZk3{^G7=ixY7' );
define( 'SECURE_AUTH_SALT', '7&M+HVo]rrdpfN^-Ww!ff4aD;CoOw`ya>!9TN_c]w?d }z2<w3Asc3}Nh)%R6=|I' );
define( 'LOGGED_IN_SALT',   'vbR@?[3Kc`dq:NC|82;s5H$DT.#.d/r<HAQhbO;7%oQVKy 3cAjpj#ExJxQ7pz5f' );
define( 'NONCE_SALT',       ')$(6d>W4CtEbZ1j{(;%a)c-M G@l{X29#7u:d PU 3~}:On&4THL*jK}.i42Q3Mh' );

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
