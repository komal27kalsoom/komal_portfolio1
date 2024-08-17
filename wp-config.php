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
define( 'DB_NAME', 'komal_portfolio1' );

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
define( 'AUTH_KEY',         'ecTN>$j3^kefAuKz{9h-r8wZ@GBl;NL$[a}0lm.x)g{|*8TBcTW9a!/h?$%SWP^8' );
define( 'SECURE_AUTH_KEY',  'Fy[WwV{1|v1EblV>EC6}y<!0uN39oM_g#MEH5Y9sxg:IMb#p;:}8un0${)l=[_4%' );
define( 'LOGGED_IN_KEY',    '-8J:s$(91uAGq2s`( @a1?=G nECn<4]4vod-7uLgdVz9@5{pJm`$M(Kd6VT*p}y' );
define( 'NONCE_KEY',        '8Oi24/R>)Kt^I0+Kt0=Mb6Jeu!:n1o@6&y|RgLrd|)uR{/HtjENgu37Fy2c<2|%d' );
define( 'AUTH_SALT',        'vs0e{!&{$O~=pW_0`pX-w[q{qi*(Q{GPD#{Tx!r?jc#3NQ3dQ94A=spGkT!0pCO*' );
define( 'SECURE_AUTH_SALT', 'WwAnE}(N.i?/+8azNN7a/VTAR*xBL;h/BW*N[ID(Ji*W}4G~T@%)KpF8Nm7aqjG{' );
define( 'LOGGED_IN_SALT',   '.Qhb:a<}^~UPuG&IA+i]*FDZ[<u!X^{X!(CtGsZ7aooUxfQSHEt92c[!xOo8h?kP' );
define( 'NONCE_SALT',       'HKoxz=)l*d)v?V&tVn>X@X@|]=ZZpTD>Ytl3zwUqDA=xR8pDyZB;7Au_GH*{wTOF' );

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
