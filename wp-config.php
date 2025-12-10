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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_devsite_db' );

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
define( 'AUTH_KEY',         ':BU92>L20)Zb6-@E!v`B].#H!pBIPLvNS&GhF]+WX5i:71Q dmhkv_BE@EW#ZPwc' );
define( 'SECURE_AUTH_KEY',  'h&ehH_cU+z,@u=ohvvxWNba0=ADMEW8xi{TvM-^y2d4zGQK)a%a:P}>EOx_aGITP' );
define( 'LOGGED_IN_KEY',    'pK7r^PEy&oJ2L27m)|$N;yn}!m4R)63}fh=Ui~f6xA?C!F}G*n^B~VG>9zqh UIn' );
define( 'NONCE_KEY',        '0_CLc~PSkSZdycs):U1ug%0gqEyZuhYv*H*D?3Lcc@a`#y<jfM09^YOWiIsT92#:' );
define( 'AUTH_SALT',        'Y(H+~{{/,9/yA>.p5ZVX[s,$S@B2?)U4 -bObg]CFcN,:em#Uwo?+Fd6|-~<,6Vy' );
define( 'SECURE_AUTH_SALT', 'K)VjFf!6c1>`:,m&`{VS:$_^#}h-g^:m//Jp(b m.?qUvKRDY(az?Z}^zLO.V:J0' );
define( 'LOGGED_IN_SALT',   'WKH]X`QPF:;4!R9bH:+I`?}rY/i}osB`Y!S@*&voou0I]}<N[Yq>0]7&!6;wf;2y' );
define( 'NONCE_SALT',       '*=t4alNv8 fp,.#Ptk~D=VYFcR7Z+ [Y`)k}25RC1ht?RxKMok!LyPI;I-qw^iT.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
