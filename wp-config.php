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
define( 'DB_NAME', 'portal_alcaldia' );

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
define( 'AUTH_KEY',         '{f< Y2mYK@(uz/90VIgMU#;/tPT%P=`~8 O#*8Xo=[rx:Kl:;e29BqWClA}qAWoJ' );
define( 'SECURE_AUTH_KEY',  '*,K_[[9QmLN#mO]INSY>yTMaQ6Y-r|``X_$Ek7G.Z>nR?w!My-b$hg^A.?n^.j(r' );
define( 'LOGGED_IN_KEY',    'Dnc*tXfDJKtUfgSR!-#o5eFUQVY.}y*cL4y-E-s>c_?hg$cJ1WrdDr6Vj?9RH; +' );
define( 'NONCE_KEY',        '2c<M6Fux>d(-{^_8t]9R4lvQ@phZ$?8g HTP+y/weNv1E!e-pPMm~m8$q@FX$X w' );
define( 'AUTH_SALT',        'Bz4kKu14LSu9Wnuzv7ixj?00[ t@pg=l&@%j#}Lgcb[om>]@2ULC@X1/Ne{3Ams1' );
define( 'SECURE_AUTH_SALT', 'jz*+ADsICVqoe+L$[vxR8Wj+WdLRsXKFzPujM:jetQU+ktOQ{!Ho{i*AlUSW2|8m' );
define( 'LOGGED_IN_SALT',   '9.pDvD-nsgP)n:xF}Z%.!S11,Na1aTJ2IBh=LgKfdq^?c0>Wth_q.W4g/Kz[:,j@' );
define( 'NONCE_SALT',       ']q4Q-3/{|xRoo`VKP:tiN)Ytp:{?}.@V@k4F5.E`n,5aQ/4Nf)sKbXmEB|.%q7>O' );

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
