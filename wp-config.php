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
define( 'DB_NAME', 'satter_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '80InnPMnW]{7C2v`p%O*SNhY X*ZY7@I.USx.w]]F!T9nssDF6[#fC84qlc*DkO+' );
define( 'SECURE_AUTH_KEY',  'ee 4FZ:d[ikA]3,=F0vrxj|S9/ |k#9c>L.SESIQ+()5}f $x$-N6Qb Fg<gu,~0' );
define( 'LOGGED_IN_KEY',    '#lqPZnd>_9N S6=mMej_V^%qxn.2Favzu#QC__vI@|DrZo{e/f_e*|9aZ{rVJ*m>' );
define( 'NONCE_KEY',        'uWXwMZ}xzgAl#W4nYkSwFYAG7zee4q1rLH1//D-2&2{,N7 _Q;+>]xQ~3K+4t4hX' );
define( 'AUTH_SALT',        'b.v?8b!W@f`V7m{QS6gj?G-A3*.6*2F%rP2+esATp7E|Z.KV}Ptr4.X#s&;T[Y6I' );
define( 'SECURE_AUTH_SALT', 'LHASfOmnkG!Mbn*h&`vuu/EX-Ci#Bqs8ib0zTl H?:1zOJSwT=si[8VWWRG&*rx~' );
define( 'LOGGED_IN_SALT',   '}[XUX3osz;L[.1./6(f$yBX~oj16}BmOaFp_`yvIO|~TBv}Tc:uiA;~6yw57s$.Q' );
define( 'NONCE_SALT',       'Vw>.1.V&E00GR<Br1!hgGg)L1F!S;RyZKit.c&GtN7E/rvRd/htHbfV*FnViMt.v' );

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
