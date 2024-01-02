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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_KapelluddenCamping_db' );

/** Database username */
define( 'DB_USER', 'wp_KapelluddenCamping_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_KapelluddenCamping_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'AT}*UI2]Nwp./N_~p,8o]S<0vMq2j4#9U@|;i!.St8~%h9PFEkyh,Th$09Z/NN<4' );
define( 'SECURE_AUTH_KEY',   'f Ob%VDG#`Wsa??r;R-ze.e<cRVe;OCP7RZrK]I!u(#{p6/<mmSbx(t()5O$eTQ_' );
define( 'LOGGED_IN_KEY',     'J]nN+^D1[IGBkSG%}bCcJ_H;W#Xr/JpsO4+|FADTZB/mA%95U1v9c.l]A:085;>E' );
define( 'NONCE_KEY',         'ekc=uYuG7V*=Z[Na#rMNDr=Uq6c 5m/e>,kyQK7_8{0QD-[Y2^3GXrE>nT%2!/oq' );
define( 'AUTH_SALT',         'XJk.pcOQp9u&)tje?x5^@/a4m3)>Y`WXr4]QQoIfm(<Fr}{=W-Cf/P86XgJ}%C[Y' );
define( 'SECURE_AUTH_SALT',  'iV*bnj-2KH+`klEs6M{({[Mn O}]b=_/23V&Ve&Vh#DzMDqcev5%h(SoTN!l3eKj' );
define( 'LOGGED_IN_SALT',    '!UO>8/3EoP_IEomuMg=pca/^LHqf>}!RiuW7aMwI1!+twwOm+xU;Ny}~M$rC--X,' );
define( 'NONCE_SALT',        'coABH;OjF>@Ajijl0gi70g%$^w]Uh!&$6a&AGYtJ6`:tpI7IP(@ut[|B%EJMg)<|' );
define( 'WP_CACHE_KEY_SALT', '}1,SNR*^!2zXK1TuhpNtU<:|PK+L<0jU:2^_r1 m`@IR/${?i+D<mf5Q,}4[++EK' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
