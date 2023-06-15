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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ThemeBuilder' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'Zo*ez_V`Foy{=u$}N3#|x6L%(bN()PaYz_Ix]23ooC~V7^.`,iN7uu=kaJA8d8Q^' );
define( 'SECURE_AUTH_KEY',  'l8f}n7c![d)A{~$(Szs-dd%dfN9t|EVx@@qI{`29Fw>pI}1kL5JM}0,}Z3*hH<ZL' );
define( 'LOGGED_IN_KEY',    'I.X~vbWk_.7tw=|X:2<Kcldq0T{:LhX~h&d*Y~`d&DTCco6gw4t[+D3Bf#&$w+jq' );
define( 'NONCE_KEY',        ';u7lQN[L:w,&no*VgPtgB?%B@je;Bu-kpEmX+8%bQ@42l_N],JS^0,:I^wW(;Y,x' );
define( 'AUTH_SALT',        '3rA[l~88[nAqc6wPVnN)K8%x_]]YSIY*c)EOBh/072gqZ]l[ QuPj;S$}`KA}xjh' );
define( 'SECURE_AUTH_SALT', 'wu^~+;*O`E8<mJr|)ox@;qhkDyc6=HjBh^B(J?3lO)SzX=w{_)[6O5OEs8B#Bpo}' );
define( 'LOGGED_IN_SALT',   '@*svA6X9Gj[)<R)LtBB-)2?;@%>JK,i8<AP:St>ON0j4BRq2=Df}S&o$T7Q2G91/' );
define( 'NONCE_SALT',       '&nAo&2~bfxO1yN9 QAO+a03`arT4_U}c}H,d|VSQ5&x%Sb65+lU?V&Fx-l29J!1|' );

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
