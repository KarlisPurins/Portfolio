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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '#.Q-[`6 A{+YH+NwbFjC;*|n6v+b#242`X)W6h_dqa6bf$$x!tHd|}j1HsRw4GgI' );
define( 'SECURE_AUTH_KEY',  'HAR>wF~m2rtv2rfpN2 :::R.R{&!XZ{egLGHin;)5?GUw(r,&B^edT(2^i`B(-rS' );
define( 'LOGGED_IN_KEY',    '~cm>8nX1:7(~i[VS3N3D9/|-VMn PXGJ0(d+|}F_ym=lae+Ae7bMl{ShSl%XLh$U' );
define( 'NONCE_KEY',        'yr&>Z4?Lox-1QT;!kez<IuT,N*<DBuaeTx!d4[I/][FSOojoJm2((U7  30pF)gy' );
define( 'AUTH_SALT',        'b8Bye?7@MmYC.~nNJ,czv>5Q@_ONgf`:VRS~LlORV? U6*8t>T7FYY3QFE?}:w:y' );
define( 'SECURE_AUTH_SALT', 'jq6/J1<Reu`kK#43ua|6{j}Lp>_*#q2j&pFWn&w:c<e]bPhtFE5`kI=;9yy(%v%^' );
define( 'LOGGED_IN_SALT',   '2{DTfK_E-{N,vO<U`B;S5j )wIxBw;Do>==g$AQ!53C&za1kzj~d&t)3UNc7gdQ9' );
define( 'NONCE_SALT',       '1;UIey58fCJ(t2D@&BgUFv&pmXx(xm|RTr{Q2?Z?OP#dCptHm-l3B((?Qk+8z G ' );

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
