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
define( 'DB_NAME', 'codesuivitabac' );

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
define( 'AUTH_KEY',         ';S@T)&p/Bq+Oig!dNk=]uHHep<6Ay#Tg!!L!nsY$1nG_O(luMpMkapR{v^h6Oh6Y' );
define( 'SECURE_AUTH_KEY',  'Mm)VTZn;V K,>I1Z,rsf-SawQE/W4Q.ZEdK.;Wznm*++Jn<]$^nu42s&ybu_Nfgm' );
define( 'LOGGED_IN_KEY',    'UzDg`_m),>7-_L{N(Srux+7 |Q&pHe@Xi>CcOLqagDYOSY%_`68V<),}PR Hh7{M' );
define( 'NONCE_KEY',        't3X9<C{PI|n2#=(94F3aR=.wwx28)Ro;Ge7CRdr$_i#J4Z,F qX%SUKMr:S!d~B.' );
define( 'AUTH_SALT',        'Yz?L7^N@H:BJQ:X~WnijI-lqVH?hd[B[@c%7]UpA:(u?D=zFif[JMQAg@ u/;tYM' );
define( 'SECURE_AUTH_SALT', '&#3pE<d+MX!Q;IsWgF9XnD)8&BIS[LnP!g-Pzn>b ,&XOos&zF8mdG9/iJexzMdh' );
define( 'LOGGED_IN_SALT',   'F/Xi_PM|TFDz)9NC3V&#zGrZ/+5P,G26MP3%JK}#X`M{0v+1mM_ytQ:6|U8JA+ro' );
define( 'NONCE_SALT',       ')kKr;$wv@j<88MQAWDa*psNzzqDG(:Ci1-_,Mcwpc[~3-s*q.EV9(DT<^24aHh;3' );

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
