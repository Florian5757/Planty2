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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'hp-~1V#GR6m4iNf3Y`{s3Osfz4~Zu&t`+o]J(8j@(J8v==$4@!R4,e{SakYu`qgn' );
define( 'SECURE_AUTH_KEY',   ')fO.;O4H0-&;}Wvuop3KjuUWe]g5Acx.Um9|P!f%hY_T6(koYH|:?SeDwbj7Sz6K' );
define( 'LOGGED_IN_KEY',     ',`mF$I#81>)9QSi~1ac(HGt6o&|u&+sfNJ2LYIi2T#p!H*YY2xtmkT!fUe39vwB>' );
define( 'NONCE_KEY',         '@FOMoP$$Q#x?m+N/`wBPGRV[!+qTOtokDp1sd)ba}+,JOWqBfYuzgcWsr}$,d<<A' );
define( 'AUTH_SALT',         '?23(]C`4UNysKaWdk/a9h<8!_]aA2f|C~yfai3hyRM8HFzyz&Xpd`QZ08;0UuwO&' );
define( 'SECURE_AUTH_SALT',  'Am=fvXF8=z/Dm=Rhw9X#+.jx`zn:+iKK6d+xf]4~JC{?P79Mn>-$a c,Y5D*xvjw' );
define( 'LOGGED_IN_SALT',    '53iafnK`8KfAI;Id[^SCMS7{yy{~c|:<-8#TN(ClU,sC8.ROrphh%:>hv~eJEK^|' );
define( 'NONCE_SALT',        '{l$YrdLh2]$:x5z}>Mca=R}9,)h.q{_7d0J;fzjtlD1fQ|(#cAGUBG?s9[ooy!<f' );
define( 'WP_CACHE_KEY_SALT', '.!ezuvmYeM^Xu%d:i, -F8x@mz;)?LY%;9R90SSzyn2k[a{uFk=/oxE64D1}e%D/' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
