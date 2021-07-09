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
define( 'DB_NAME', 'my_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppass' );

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
define( 'AUTH_KEY',         'S>*#p.r09q#~,=vFzj?_=V$zJ@p#*@:avqz7N)5D=X!PQ*-;/l3WcyTM%d{q(&J%' );
define( 'SECURE_AUTH_KEY',  '`>mg>CG<q;AISr3Q[9pi!H8d*. y{)5#]sH1u!9lylmscQs8I2@;X)[g*(qE6JRe' );
define( 'LOGGED_IN_KEY',    'WQWC{9(zi&MsuA#V0]:@>GwE)$!,whMxDx}tWc*e&#/|``G}Xd!^0@ ssM6yKwWA' );
define( 'NONCE_KEY',        'N1Y^%UI[6Yt:#wDeFSOIO~q^PDd(kf8&SGE3]XW[~rINW)>h6~?@36c^V2Ft:K_G' );
define( 'AUTH_SALT',        'tD(i,qf:s>P%&,q0C&[IqiPpn?}gZVpsgg$NR737> RwJ]9%E26P3>kjT5g[(GLI' );
define( 'SECURE_AUTH_SALT', '`f61`H{=r(@Mcr_<6vQx#;QOy<fi)<%saG>t]<maMB8xo!jiF  <r/}}l<C15PpX' );
define( 'LOGGED_IN_SALT',   'keCt<k[~ItR+Qe<S{g?w-GCW-(xCV-42b?>rW[Q-<6w<=4.K+C?22HUB;KW}|ni?' );
define( 'NONCE_SALT',       'q7tR=s|9P!buF#3^{H_%-*<[I*/I4 n:a2dc:P:SJV2>5NzRlq$Z:3Mj#acC#,E+' );

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
