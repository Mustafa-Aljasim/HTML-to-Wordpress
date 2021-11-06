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
define( 'DB_NAME', 'keepitsimple' );

/** MySQL database username */
define( 'DB_USER', 'keepitsimple' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '~3x.hlj?_j>-2RqeSg5]K9(@c(hI{tFVj{%Xq5>u_>X0HRnDv@*T/b.~%(si]^:{' );
define( 'SECURE_AUTH_KEY',  '.K^3~,B;mn_jpyNncfVDiu=<M`k+~oX5<elb2Yz3-t:e-(*31P#Ji4lnC!J^:n<b' );
define( 'LOGGED_IN_KEY',    '.t4U4RkYA3F{ T@Qwa}%EBU,sN[8Olsk1[<nf &XAR%]5=A>~+`.1N~g1C7gmEJZ' );
define( 'NONCE_KEY',        '-!;YqLOh$_#E]yO{MkxY$~kBziedJ3 w^bub1Rmpnh|YjYx4?D1E9Ddk*:dz,c^r' );
define( 'AUTH_SALT',        '[++wOl!jjz63*E3!`4B:AYAOH r8r9S0RK|Z?1%Y9.~^@-leR6+VW4+T}fIDUfU9' );
define( 'SECURE_AUTH_SALT', '#Sd= =?UPFXrKj.qi5d,hi#i~9(1p@LaPv(0l;hP;C)dn]*$dlV6v$oTd<6^kQan' );
define( 'LOGGED_IN_SALT',   '[J?Oh$ZttInC9n.),zgjA3fN8$,tX40NV!e2*diE`=_jp2jXa}/N|*DHJ1<sT({O' );
define( 'NONCE_SALT',       '3?%{d*{)#DiKLs|mA~de&C4bJt*w.CtHn6EO<$U _[H06{|Rnjbv46;wV65X5`::' );

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
