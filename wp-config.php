<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u815280611_KWadG' );

/** MySQL database username */
define( 'DB_USER', 'u815280611_wYSQu' );

/** MySQL database password */
define( 'DB_PASSWORD', '2SSawFwz3Q' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'yGK,*H,X]x)oPl+[<9j~MV~SaIygQd{8^<i]EEfCv3]84>zm@v1P_`yj|Mes#go4' );
define( 'SECURE_AUTH_KEY',   'pPkU?d.iY:Ln7:Qb^2uOsgf=vtB2~lk>[rGkwUrqQrPE*IybZ(l_Ty;<cV_z^XUe' );
define( 'LOGGED_IN_KEY',     '2#gzdRRDbQS#r8`eLLLVvY+/*+IgJq.$D!IGBi_f>&.,<gw<y^?XA5oChO u,/:K' );
define( 'NONCE_KEY',         'Dm^1`25I2y?6s{]09;zz E;Rj$T|m7JW 1[^a{K/]JpaAR0g<: [m9=,7#Y}>I9P' );
define( 'AUTH_SALT',         'u2S&C}RV%FOa-]wl$C?mVC)mx0h*&`rY#UJl8LI-l:g+&7JVj?:CL`n5Aylm%hhy' );
define( 'SECURE_AUTH_SALT',  'Frzes`0p.J4A?mk^i`]7Gv*[!$HI|LNrYw76Y--}rSVz&5lxW)P>pN2!!UKR863Q' );
define( 'LOGGED_IN_SALT',    'DR)G`p:Ps(fawjm<paQ-{?f6q u>SA8-4L`3l=Dj=Lc ?>lh3&ZFF<7)X%IbKoWY' );
define( 'NONCE_SALT',        '72)r%D_NiKcl_]a:)NW4^|OA]zPL6XmB+pkT^OS*Y^[EO1-M~!exS~J/%dx2(q%9' );
define( 'WP_CACHE_KEY_SALT', 'p8lPcM;As2{[fU_XOPxZtaTu3eYq!Cc]:WWG/6G]1Ste)RTmw2NCZ-_nEOBV52a0' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
