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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '31;D-?ik%SKz^91Rc?]?PHB4q1lf.rH^khlw6ZSpHWu^9A-gqO;DMM,!:oa`hqaH' );
define( 'SECURE_AUTH_KEY',  ',[cQ4]U$b:3U!b>Abh@CXpI!8w6g@a~*HeAfVJG!z5rO]/^ecN0xGJFf1uuSoo.z' );
define( 'LOGGED_IN_KEY',    'Y+B-9f%:izdqF+oteWD *r$XhJt;;xEo{o})i-J&n6`}NzMO(<Cnc1/xD4)9i0(`' );
define( 'NONCE_KEY',        '$6a&EmU^+hYs?Qq]/xW@NPkXw3)ax9}v.+ZS<DjB.%`-{hxx3/MM.|*#C4/gQWji' );
define( 'AUTH_SALT',        'n2pF0dDT3?/)HLw{p^y$(6#B!P?S8Oj) W;/M2?SdKmH;V5!PJ~l&JQyvIueohQl' );
define( 'SECURE_AUTH_SALT', 'o_4ZgA~p|F^4,%:LYACahkUq0}J#E&0Yl3dTF7r98Ce3($?p9PZXCeX7/RxqaqOK' );
define( 'LOGGED_IN_SALT',   '4Se]?E%5^izZ-nCPl880<,M<-7sjX*fG548dc0x%fO7txtOHY%p1EK4@}itmJT$m' );
define( 'NONCE_SALT',       '?N:h=m~&FhO2wA}|@$g4FpNe4L5aCl@}#y,47v?+sp,AAh2qWA+MGR!UO7 !p-L.' );

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
