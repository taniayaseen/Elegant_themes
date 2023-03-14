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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elegant-themes' );

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
define( 'AUTH_KEY',         '~@K750lizg ^Mg b:pG>d^%tqh^~6XV l|&jb4o$DV^GVTcti`%@;y)X;w_._g3]' );
define( 'SECURE_AUTH_KEY',  '9aq;]))*>|ax}`zvaGB23z*Q%lf4v4{=RbqZyK OatV:F81nIveo7WK3AT;j1N)q' );
define( 'LOGGED_IN_KEY',    '>m*(Z9> 5+xD$G>:u@_F:3j9=R%hqS|_+y(Z?HBfKjlsTj{zVm8C`72#<ln.mI2V' );
define( 'NONCE_KEY',        'fxW$0kw~h/E{&)+zL/6V_;V;&9YCjmc;aaME~u1|4R)eKX5B.OI{<8UQ=N$Ti1i$' );
define( 'AUTH_SALT',        ')cPUYe`K[IXAlo6unl@Q>O:O%yMc^Fwv[;}c<NbO!f[&8jI}nHH[TY9(u59UQo]l' );
define( 'SECURE_AUTH_SALT', 'jUs*la8%8{fN<hf1b+`M#NKD6uW|V[S!u*5jOD?#tN0+Z$*f7&`Q#e=NgND]:i.A' );
define( 'LOGGED_IN_SALT',   'NP|%.TK{tJ?[5Q(j|(U#H,nJkfcZE!w0WB4?[E+`e/y~~ik{L0>m[hWQZIvPO*ne' );
define( 'NONCE_SALT',       'N7H~BGt7gG;1~%_P-EJGHvuf5K{J<m68#)WCR)+K9J3g()uB6;gH15E|@sK60.6q' );

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
