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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'vel-admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Itfokaalensembleisinmachtichkoar!' );

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
define( 'AUTH_KEY',         'x9i:|P9#z4~6I(n1sW~p=w7a]LM;(m]F)B_imSJV2nh)A=BcK.Y)_r*i:]5kY(=0' );
define( 'SECURE_AUTH_KEY',  'TOo_s_pcd2m)#YH#1{exIhuu;0Bi,]2-A^UCwI-[_E( )K5;@E(IT+GndR;fG+cu' );
define( 'LOGGED_IN_KEY',    '^C2K5otux2kwf;I=Z<=q{PsVd$D_8*zUP,ThMuIk*Y>? 4z)w{w&fsSmlJ{j.n_I' );
define( 'NONCE_KEY',        '(*dmU6D7=meNzM[%DQGQ4.^dZ@V.4(7m?XNUz0+L4Bnw(2%Pu%.ui#tXA(^|iy J' );
define( 'AUTH_SALT',        '2!^3_}GmHgAUUYi! Ee}hE &.q+= rQ{3uim]J.Ki8|vmi#oV-`f~8NitZ~)Q36/' );
define( 'SECURE_AUTH_SALT', 'W`7/(IHF1Qa}W_i`*s~B ?ki%6H~#~3HXmnne6SwKKd- pCX{6<wx7Gx!D-e0BH6' );
define( 'LOGGED_IN_SALT',   'cpJ2G-CBNNsc&8Sp/s_upZ_~N,J@@PHh)D8N2|`0lPr.5:[(XI^`|~|r.~6EI1;2' );
define( 'NONCE_SALT',       '#`4EkE+Q.4J4a!.po5M%:`;Li`GI|i0LNN42g5@3Ylok<.c`n4n.|/V|hh/.V|!i' );

/**#@-*/

/**
* Enable sessions
*/
if (!session_id())
session_start();


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'VEL1_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
