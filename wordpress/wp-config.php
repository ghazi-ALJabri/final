<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mo' );

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
define( 'AUTH_KEY',         'J0jE2y(DV:IGz06uojRe5Yy9~7vH lfZD=2)<5H%H+s] K<L!;SwvL+gzcm_0N!d' );
define( 'SECURE_AUTH_KEY',  'Sy|.#m r(n0oVbxg<,-MV`TTNyxan<kHA<e(-q~0M#C%s-L$:K:=eRH> QuvyOe]' );
define( 'LOGGED_IN_KEY',    '9f%)d<3BKSmc5[8+FA>Kd_S.j$)KAWe&Or$Zoo=FaF,h#P_TlBoTV3RS,:v%>KEn' );
define( 'NONCE_KEY',        'wq%Qc>q]?s,;C1Gy?kuU._;n<vJ ~eaH^GS?mbS>8iM:<}:q5S1oM#o=}BPyAuUJ' );
define( 'AUTH_SALT',        '=sy<d~tykv1-j1+9&w>h=UR2l[@jx4Np7)3Qu0&a9i^fEva1fa$5}Q5hjjN atq;' );
define( 'SECURE_AUTH_SALT', 'Y +*cT{4%Uo0;ELXX~pMsybo&XS<ZkWT=v(R~TExIkir^|!|sM5|#@voi,=P=cdt' );
define( 'LOGGED_IN_SALT',   '+2.jFGtJlaZp~(k;Ha]kfM^Dzi9-8@wjhFHRo$rAz2#DSYGKUo])t*BoD#xK@r_|' );
define( 'NONCE_SALT',       ' 847Da8W^J`:cYiA#%k$l[*7>^xR]l]AqYwrNI2yaA(tp6,$u,Q9=*(,Ch6Ww=eV' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
