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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NgRGyN9iz8AbR8q3FCQ8Ky3' );

/** MySQL hostname */
define( 'DB_HOST', '109.20.225.173:20562' );

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
define( 'AUTH_KEY',         'CAh60b}|6lyRT((rYO&IW=J8ie9si*2s&>CTLA]$CsnXhRxSqv>gWr*;<UML;N!~' );
define( 'SECURE_AUTH_KEY',  '>T{[=#whSb]SlQ{/gyqdcWl]O%~]JfO&I *)%FgP^-7C) f;3s8x*vOot,-j=jl}' );
define( 'LOGGED_IN_KEY',    't]3^~ ([44X-9H0U,/+NRaTF<F:d~ !]*Zn@u5Fa)Jve)4IYQotJ;>! d.o&<?5-' );
define( 'NONCE_KEY',        'M88lknNUTE}R}+VSl^&RSf~neCAX?DW#=&8s+dn-wEZ:c+-(24i&,j!/3&o2f`ix' );
define( 'AUTH_SALT',        '4m`{,K/HjswYQ/2t+8&w=w|7#;(5:WP1i{&X;YWOo)T@f=ALssx!}l UuM%_eM$l' );
define( 'SECURE_AUTH_SALT', ':d9U5R#}5prOl@|@KIBm-oc)]_GI5RcMqc3Ab{EGP^)53Dw^NcY+FLCNwBF(<53C' );
define( 'LOGGED_IN_SALT',   'I,a/v9PR;E_d8EwyS@9ndA6HzT|gd/O,H%A2t=@AqeK FCfHLI2elV-Bwg{nu5Nv' );
define( 'NONCE_SALT',       'g*Vb Htvn}IP5!qwhN!1e$)J+;tnE5].)ySRsEy83i]3[]oC S^$<,4K*3MvEbqb' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
