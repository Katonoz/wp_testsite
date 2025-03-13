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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'NQ`+JZnf7mFHyyjPg3IQc}gN:)/N|9qlU 8n238)Y9Q9s)@Xj=J64H_X_Ml=xw:!' );
define( 'SECURE_AUTH_KEY',   '{dYpymVY:2J>zGH$bV.F.y#oJBEpJ x0[7XH&<O~+z>CwiiBw05: (GQ`.u/pwfV' );
define( 'LOGGED_IN_KEY',     '{u7GZ}>a5=cHhmU3-OC<4%Ca)U9* %<;}v>~19-w0b3?1xKclvX$x^d[l_H$G)>&' );
define( 'NONCE_KEY',         'wbyntgy&E<Bio|Byw`ovR)8!-Fg Ik?9EV0]!W(qn74fA{@u:;O1#d)ZPX^ZgS]p' );
define( 'AUTH_SALT',         'Pe8w#A!b9d9tT(X:-r:|%WjLsyhlWw~=hsP7JL(BK`K-ZzU&kM!=|kuxg52Mb_V{' );
define( 'SECURE_AUTH_SALT',  '@]wLjSjY)o^AzOK^C@=;Ox7yRE*+)D[S!u*F[)Z2x^,8D?3WVJD6V-yC_dZbxVGt' );
define( 'LOGGED_IN_SALT',    '%j)K-SsB(K3t2->PO5uy >sVm2U6:zH6kbC#H7AVPq%ya[BVZ7kkVplyl,1P$Ypm' );
define( 'NONCE_SALT',        'C#Ad?8Y(UYkv]pqP8T.F*Bv^~vPk(@=T4l%ZB9KK5LR!xp|ue0Qe(u=I6>V:As`A' );
define( 'WP_CACHE_KEY_SALT', '6UVA^~,*kM>*5q48/~hV`9/~:QS/<6DLh|hZ5cD3E&jMp&TKqr])&C,7*c#/SBWh' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
