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
define( 'DB_NAME', 'cafe' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'Il@#^4A)|5o N;NcKs_=2?rvU5S1y!E1Qr/>&QZL-#5p%(1}K.Lt@^E!eRG|DK4m' );
define( 'SECURE_AUTH_KEY',  'fv[[>FS?@@;@?D8O:=%C.,&eu~8~f1bJ`;TZubMv[7KsrjV|@B*dgiLfX0!]Dv_%' );
define( 'LOGGED_IN_KEY',    '>TaoL KO&cDr/rLYlJP J_#s9Jtq[:!Z-uAp`_q-aP|3Cc1Mzx%JzCmVDg #m/mn' );
define( 'NONCE_KEY',        'u8r&B1zsmD`;Y*kZVvJQM}r8P^Ua1sM({hki=^kJ]TIJXF3C*NYJ(-)G:7x[n&30' );
define( 'AUTH_SALT',        'y#qa&tbG@1NZH&_9Q;pCa65~~R7.^,tTGG:9fGJF0QahFIla~l4RVaQ~g/5Ka=ky' );
define( 'SECURE_AUTH_SALT', '@rLumHSMeq5LvX_5^|y|0J$Z7=wu#8Bw$OQE!NN$1#)9YG?|lMDsltgvnq}XaLer' );
define( 'LOGGED_IN_SALT',   'QR-BOeh%5Fx`!q0Pl>GVK?|4bx{}|BybB~hwL>$``3Mi5q.{5MAq9JS^-*ik;%[f' );
define( 'NONCE_SALT',       'N28)7MkAfwvJIetcovw1XW1w(s/M3$zz95>^Acz!4!=]>3p^_:63(kych ^O14Gf' );

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
