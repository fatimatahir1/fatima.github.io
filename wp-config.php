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
define( 'DB_NAME', 'github' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '4V{[ID_=[B<d q iJ~2qZ%y/AphJi1MogU>gr*pa,U+5R9ItkQSYc+ ou@~F1Ify' );
define( 'SECURE_AUTH_KEY',  '=-/`z,|OYgJSWw-s&w:#<_ql,IJa+YHq,+}ZR@zPgq<;1mk`cE~NErijy^5]S@,<' );
define( 'LOGGED_IN_KEY',    'r/^}167LEqAKGUNdj?kpd/hM S|Vn$52~EP6SEM2fzgO}Hd$*eIVx/twW~<&(/;m' );
define( 'NONCE_KEY',        'F5!,P7S)XxCA35c+xNzbiz.18YyB[(?zLT >]G#>t/T/Z-|O[{VuYN(~M#m0,^Q=' );
define( 'AUTH_SALT',        'x3?5y@ijumQ]<_ZkYj.5l?BxD-M||K&l_VG7Yvu;r<o~1s*=`C hXS11@ Q4O6-l' );
define( 'SECURE_AUTH_SALT', '^c3mtCi(?FfHlYUCZ@(VbJow8p1$uPl$%{5-lxgbLKzA9og3@hxA+F8 hAfeQK[}' );
define( 'LOGGED_IN_SALT',   'tMWF7L`@/%Xg``m5o3MSx@:*J2K/2r(U:t+v1Kx^b,+fWZ3o/Lp6:9}ywM%z%vAn' );
define( 'NONCE_SALT',       'aHwjjhHMBC*$G)%HscjSE+:j]:mFem?)lctQ$%&SD2;Byll;+zt%`<^DLFk,p#8l' );

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
