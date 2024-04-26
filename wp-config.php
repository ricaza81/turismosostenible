<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'turismo' );

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
define( 'AUTH_KEY',         'UnWbM|R6B/Ug!${(PnJce>2?<Oy/$[wa3vUKj:=:+n]JISDKa ^^ e1}]nD1dvIb' );
define( 'SECURE_AUTH_KEY',  '2FN]h##/XoH<&{h|@U(_uns>.l5%6WKoB|Q- RvjfuJRFr*bJ_i%;]H%R/lchA,D' );
define( 'LOGGED_IN_KEY',    'h%p^`kE&` LjQ|FcWLQMuy!@#5Qj}EItxWK::iinTI`Yo/%8*Zd&:u$hF,o*?G$V' );
define( 'NONCE_KEY',        'j`0~lMd-$XO?<(ofEEZB>n#jXh[:+Qg;]s)?7yHx0z?3:3TzG|oTP^f}5)]R?dAY' );
define( 'AUTH_SALT',        '^ @`-:c*>xNj@<@)_`5GV:2zJy(^Ojdd#e$%:8eA_<^l!-Cg3Jp@v[BN0lE&N6&p' );
define( 'SECURE_AUTH_SALT', '!Tv1A6Bf$FDV[gUu6XoTz4OaV7D#%)!{.5R?y2(q^JFP_Cc@p^0#Zr,]:JPQe44F' );
define( 'LOGGED_IN_SALT',   '#[R:%d,)#]uXiPLGdo**IYImP%fF,0+Tp@`(:nriF1qOe?GMe6=E|x#YX[Bk}wZI' );
define( 'NONCE_SALT',       'F W.W.V&5SS8N:91KH4>Q|$gioQZNhe@l2M!mf4V~C-w.gaoGLS#oHpo;<!K1dva' );

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
