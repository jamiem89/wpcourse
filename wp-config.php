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
define( 'DB_NAME', 'wpcourse' );

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
define( 'AUTH_KEY',         '|kSFTrc9@(9ZtIFV 3:TyU@,zugB0n>_36xuBEwUv*4S|S1n1EqmbO-vLW~~m^&[' );
define( 'SECURE_AUTH_KEY',  '&XD0Ojw)x5<vCjfwS+s;Gu{tUvq`T+AAUvCJ7)KA<d0BLcM.ZIA7>|^g 3LX:,Q ' );
define( 'LOGGED_IN_KEY',    'a4O^V)G1[o{7~m=W/R8)zb4~S(#/~p]2`5OeX0b.Q}#S3d@X NHN.N=5;6Y?Fsk4' );
define( 'NONCE_KEY',        'A1=9jI0!sgIS!$8M3gbw.CBzr_$4(<^VDHyitek_9A*]|emVk-14:rZ/A1{w|u@L' );
define( 'AUTH_SALT',        'KX6oeaXGrc*b<EA6wEh44JEEh@!~pc*&`<t[ejB7KU.UYM^jJVWV0XIh3LYM<fn ' );
define( 'SECURE_AUTH_SALT', 'YBkV$TN~c&c~9plaa-Sy&[HtIZG`t6Nm)3kJ]~?.)Wqcff8VhN!Zou^d61~irJpj' );
define( 'LOGGED_IN_SALT',   'sryAnJ[lpURo>9S|-mE;pDx;psdgeE9N4Kv8B|Sy+o;.0$45LDYmMnI3#f]]brg3' );
define( 'NONCE_SALT',       '(Yi5ILcXhV9NLt<,7*47D&r[k`o_IWW#?v.ZdD|QMid}NVrFn;YPPj2gJf^2c|Wq' );

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
