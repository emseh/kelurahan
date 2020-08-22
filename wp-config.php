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
define( 'DB_NAME', 'kelurahan' );

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
define( 'AUTH_KEY',         'K^F,#O$8+$t|{`Sc.$PL.g[y,D$U/z6.Y~A#e1fTr~DfYpoB<0TufPJoZU[B]Q!{' );
define( 'SECURE_AUTH_KEY',  'a=cjOnh6<~4fiJJ.8U!Q]}((FRgK{y3!nIT:%b@RtU;y@%2zAmI!pHN+WA:N>d@s' );
define( 'LOGGED_IN_KEY',    '?Mujb ZT?U27~[>w-9g(,I%Q8Qap)nC5S2MO&nuNP=L@<qA,{`N?MY#sWM?xaVD$' );
define( 'NONCE_KEY',        '5d#aIIVm%*wUP0}Uws!K|O4V&_GR[AHRl(@1hw2VM[JG*s;LOkN1vW5V>80o~@/K' );
define( 'AUTH_SALT',        '0E-C-7;A[,Q|pi~kbFdv!E&i1&yqB@K?BbBzlh1<UY%LGl=cgDjLe,9p;r[~aIJF' );
define( 'SECURE_AUTH_SALT', '[FbGN$#BCPq%O=H&#xOBLl9S<Q#$B~e.;5(Ex_*@g-aVy! O[J`itgu?>l)l#nUZ' );
define( 'LOGGED_IN_SALT',   'X[9QERfjW&{=n%sNoj(wjS7kU S_(>b@UmP}[ybJz{FTbai!=5tf#GDE?s6n40v:' );
define( 'NONCE_SALT',       'I# Y;^5XuY&*J^5Qx-Z-K=vsv77voLi;sy[li7_LEN*wL*ABcx%9OR8AG`}5SDWx' );

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
