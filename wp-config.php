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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b8559f09c07d31332966698cbf4a22f9fe447709264a2de5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '%R?( Sdx,__1M!n^Q4Htt+VH1a~IogmAU:qr);0jyOG]zgw%nTQ*S{iRK/X/lvO:' );
define( 'SECURE_AUTH_KEY',  '06I#p}D:v=u^> &G3dHgmR(`).f-$^/=)I.7WZ_I6kR6,.SGyJ+r|#WJg3={YPVm' );
define( 'LOGGED_IN_KEY',    'j&Jzit3=}ttZX8NnVF;Rfj;SAG89luai.sO;>=cQTE6{`YnB1;#Jl9iShS;k:!bl' );
define( 'NONCE_KEY',        ';ng[)<7N<8wC0BS.z@LKdGSL){;9y&uCjy{{n&z?[U;xJ[n@CANxb1AOS5V,5Ri<' );
define( 'AUTH_SALT',        '`XsI[6iiS$7FXI9;E7N2MVUj%J1H%yi-3RN6iwQ~5;(|2d#6r&LSZ$@Tt59%V/uU' );
define( 'SECURE_AUTH_SALT', ')o#F9Al*TQ==|CO_K]ve/RN)E{W4r_4twyRmy#O<n)FfIpScy>uJXlqp[E{j,U|Y' );
define( 'LOGGED_IN_SALT',   '>d!nFx$fkg%.$%]6)NvPBS/ i)n?oK:^3gEfPG56nx(Nqm|+A5Ut`T#!Wp@&v-6l' );
define( 'NONCE_SALT',       '7gHYe`{OOIy7ZM`8RDXK(=`[5qX<h>9`9%o9As(X0Jm3d4^..B<QvaZ{^8$o:BLP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
