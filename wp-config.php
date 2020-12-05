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
define( 'AUTH_KEY',         ']a:hyHlo[`p8gQ[WYuLB$XzthWkpYle)f&H{xHu:y`u$.7n!_L.`xZb::I.9JPmH' );
define( 'SECURE_AUTH_KEY',  '&Lk>jU{b>mAOi[JEX%.+4IY-]qLFTc0A&EhgG2g(tMLEL?Mv[PSkj<*R#dtn4rX?' );
define( 'LOGGED_IN_KEY',    'hGrb}NLGiefjlp_WA5a?4%?pI-I054ed{[y3_G~xg+NH.0fsz%&pB9f=pDd0M*~]' );
define( 'NONCE_KEY',        'p !Js2~E:GVh+9m3[0s:*M9!/R5$_brx&)yskJ&Tgmi61v1*4Z/I_4uFt@yWsUN+' );
define( 'AUTH_SALT',        'aqC)D61Qc-.-bgB|<)l|>T@+r5PhrWm|2pkU7%a;1nDrMCDWzk1c%fS}!|{8uVyz' );
define( 'SECURE_AUTH_SALT', 'TF<`Id=~Xm,8b!j^.o7ab`?dS${{&|/ 06}.*tUm_fcu-|1}D%rnS*E-`2o.N)(j' );
define( 'LOGGED_IN_SALT',   '}Z97XRffc %B, >bI>01w_Px%Qb^u1Yzm#B?Ndt;v0Q<{b,Vee*>yb|nlw<[$X(p' );
define( 'NONCE_SALT',       'VJ%A)H;;Uht.hhKwI%N7?VsOOWlrsL?DX/k8!e]@z+)8s}K&0Pu+].g%?=,xE?HL' );

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
