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
define( 'DB_NAME', 'revista_seuat' );

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
define( 'AUTH_KEY',         'ykBU-f8Y?f9*Yhq#T&v?quF?_dMY[zLoR,Xo1&9l>V;>{tc0[I!e4#X2m~fi]QGW' );
define( 'SECURE_AUTH_KEY',  '3 k3xxduuLN<B}Q~$MQi<3`67lc>gMR/BN B/0?9ADes-Ir}xARrrLLI?R8zCPDR' );
define( 'LOGGED_IN_KEY',    ':vCn75oUy -zMkNWn02@:u6XK>f:Xa@u.S&!hX7hh0|,2+%t0qj:Uj[F@}.6hZ:^' );
define( 'NONCE_KEY',        'gx?qy).oJNh!0p@hW#g?y5,cG9!f;cep>~H=F,JFb$Ar{AX>tN6MNFEZ0ZtW>&~}' );
define( 'AUTH_SALT',        'N<Lw~P 6CJY9+q.fFu#(f6:sMpqZm;BN-}hOaDyzhT7?@[G<|Ps]#X^trHH9R4Y8' );
define( 'SECURE_AUTH_SALT', '3u|rovyx{DKTH~n2vH|i<8fniT}29k]-F*PI@u/6}_[_Nw*:aM=#,p<hj#snEfdC' );
define( 'LOGGED_IN_SALT',   'o<VR gX*s5+?c-HnI7dX[GNw;=DO`R(4L820s,lt3Q<Qd}t07+XC[|@&Y&9?,|Ph' );
define( 'NONCE_SALT',       'gL{_jLErIbZti<0ra]-2Y~T73brjJzC1c:^;2F;(|k6EAmA(,)uK1s;+veYG%$BD' );

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
