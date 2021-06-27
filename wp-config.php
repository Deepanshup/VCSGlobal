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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vcsglobal' );

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
define( 'AUTH_KEY',         'ni%P46{Jv~qvjc&1~O].{nT8dc{sc`=:sf<.gJ@+q K?9!{)[cqY81x!Gy$[hGC/' );
define( 'SECURE_AUTH_KEY',  'dy*F}WHfgrc1|?VBM2q}2fi4PCrT:*6oWser&GXI{(;uh~#2]:!~02;WS*#L@UR:' );
define( 'LOGGED_IN_KEY',    '8;](Y#At!;^qo^1/p q(.>Jo.|Y(XR1oRQ3>oz~Xs?2qx_T6l]>%mPc^tu&u8swK' );
define( 'NONCE_KEY',        'uwB@.l9GEmDVB0yg/*Z~m[@$@}^k,!WtD)*lCePb:lkB:5q-`(3)UPW&=P,6EVB7' );
define( 'AUTH_SALT',        'Py7.I%h(YKdpF0h!;Km=y`X:6:wp}2eB*7* u?YT*Tvr1`oIUE1,zL<;G[Um}?kv' );
define( 'SECURE_AUTH_SALT', 'fS61%QoOsTIf^B$d0:C<T-T7p[3Axg@G?JYiB_%;< 2bF#0zjG1wvgv.lq/E/F^p' );
define( 'LOGGED_IN_SALT',   'TI%%:x<pG@^{9QCngxxAZT9hX%*B?J%@=/Y#!GUZC1HE+CvQ93mHwy9f%H1I/QT|' );
define( 'NONCE_SALT',       '+fjiAWt=ddF;.$Eu{g_PYo(6-NTgR}X][,R;Fw~.$t?KvD}p7qU/{]FTrh=#zq[*' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
