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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         ' UQX L8nP^Zk.%>`:D$K#q,?vc&>Ili$ll-`gPb#j5==DZh zR6cXN@.@dtV_5BR' );
define( 'SECURE_AUTH_KEY',  'MYje3/}qxD}I?2OH]GkeKf&$beZ`>$2_qA*8M-LXpG]aff&84z2QW~<2:n4`G;`~' );
define( 'LOGGED_IN_KEY',    'v-w$:uAV^1IJlzGEWk.-Is_k3@W AN^8Od fH/:,alwW&rMl2$HMoY7wMR+bMH_0' );
define( 'NONCE_KEY',        'XqbiAqx$gfQ=iFDf[RnGyW731nfMx+8aBI/lUGd|uh)/i#hT:|]=:;%JQSY+H9/(' );
define( 'AUTH_SALT',        'nu(1E#{DEb2>vzEr1Mjy05@,Nm{y+-a|mIJ52*wZBg`J-&OVlr+{xvxUQKMlR]*p' );
define( 'SECURE_AUTH_SALT', 'LLVzA6%X7c@BG9mqD#:FQlY2A;@Re=a,=1WqJcA?gRRN.SfMR~sK^zbuf`:e$+]:' );
define( 'LOGGED_IN_SALT',   'l&t=#ZG-/r;XNeD}ln4hnJRKzA}[C_w2t5,oFVRYJ.braMTY.K9|~a%0D/pK9Nky' );
define( 'NONCE_SALT',       ';9o$1O~b.1m~Ey1dftNq^pmICwS/jEPz~G[LlwB_V>e%))Dw<^uU0<Y3i4z#T9,p' );

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
