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
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'sj,Q9Swf5NHxsB^v,EJA9mT*`Da-x/M&w-]pq~X*@Bvqm=QrL+16JiJ(5*{/M9!m' );
define( 'SECURE_AUTH_KEY',  '_OnU<n&=I]q8e{7J[]$%IeZ>mF))]O;L!<1JPOU@PzD)D2:HDQvWRt,tw6 KoToY' );
define( 'LOGGED_IN_KEY',    '=6It+4E3S2MyhkvY!j9[wW~Yvk]bVx|NnOjG07NjcrvHcvFq1DUTAQ+b::ESX(bx' );
define( 'NONCE_KEY',        '>Y5]ZQyfw3DD%j=!=1=<Rx(p-@xdt j8{$S2Xm7dH`>[7S|=6%J;&5;lOnS[E3%J' );
define( 'AUTH_SALT',        'EtEU*@?}s6hJx+ioO#6$ApmJ,+gP.a`Rjz`8pkz~=Lj<7!Cdr1E5@M9r^7I?+o?n' );
define( 'SECURE_AUTH_SALT', '|/[Q<vX@DtT6wU0;T:Z#-!1O_9NwftXt[o6B}TB6MHi%|Uo*ihN*xgJ}>9[]4=/#' );
define( 'LOGGED_IN_SALT',   'nWiuFt?.v}:oIo%h}0nFSDs^xUv(&,]k> Oh;itBX;?R@hO8~L(7lhBN<0;~oWy5' );
define( 'NONCE_SALT',       ',@_j^*]A/Q{>v=}&J9OCIL3Zk1nbT<u@_~bMC+} /Y_?E}5vfP@pY2%xcF<e!.O^' );

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
define( 'WP_DEBUG', true );	
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
