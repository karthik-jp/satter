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
define( 'AUTH_KEY',         'C/MqI[aYBkr|DG,KCUY;Flf%0ca+{k;-8i9zmE1tu9wi)H{ nFEx4%1)VBdI}27I' );
define( 'SECURE_AUTH_KEY',  '09,32&T?Nd~rb85,!nxBg3p-/@ggk9@Pz&i{LI7/*JZ`1%31w8B!M;09s7*,[Hyq' );
define( 'LOGGED_IN_KEY',    ';hYt#}c{p,JBMQi<:bt%ll,i;z_Tib({FM^f|9?<@Y{#5;/I+j#7``GZ|wa1og{d' );
define( 'NONCE_KEY',        'jUo|^>k1tps`98&8SM2SWX}Lq)5E&`H<`TWLOachL)7A`ZJi(uOgGD0$V (xBmnm' );
define( 'AUTH_SALT',        'pGE;PwsTK-s}0<19R%%|Qfg4#{sBc |^?VuAs?px$vL^FK<f0VQ39pe;+z=i,W?t' );
define( 'SECURE_AUTH_SALT', '4pu+6=)C N-K>,.i~9_yEsO f2WncotnA=>TH.DoGK.cFq@(x^/hUgHs?/EpBArE' );
define( 'LOGGED_IN_SALT',   '|MG?q{~6}YtjOZnVwQwln^86Mp90#@LXNqZky6$e0A$BNWMAJ)DiziaEyK$,D5Oy' );
define( 'NONCE_SALT',       'd2M|:>8KO}:nz~sk.((BP/xcnH]/:SW14Dx}(.ahu&5V|#x1IhC,e)_(n;fk_hY@' );

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
