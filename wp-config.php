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
define( 'DB_NAME', 'indahgro_wp942' );

/** Database username */
define( 'DB_USER', 'indahgro_wp942' );

/** Database password */
define( 'DB_PASSWORD', 'pS!88!c697' );

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
define( 'AUTH_KEY',         'ss7dcfn57ukewz7to9smswrqppxiydmyoq1yxmjpvldhgwqwzjygojhjofxffcd7' );
define( 'SECURE_AUTH_KEY',  'ujprlpgsk6pdajybdefbjnpjxvmg7frvd9d05ktrbhsnktfxmpfh1mrzya15edtj' );
define( 'LOGGED_IN_KEY',    's7arrisxacojtgtrw23jgbyfsumpgx4q5sozmrymhkwecr4iqoxbouvjplbceqjk' );
define( 'NONCE_KEY',        'o32m8gmsnvauxddh99scdl7gdvmzyedskgzmycighyyg5x31uoy3eibqp3nxuq31' );
define( 'AUTH_SALT',        'psbvvucrigplqane3nmv04akowfud7jkdqyg3wqxc82b9q03y6ifwsxqyuv3tpir' );
define( 'SECURE_AUTH_SALT', 'yrjhtzcd99dehaawmonfgy208ar2rud2hexd76nclasy8xk3lqhubdsl00vxdxyr' );
define( 'LOGGED_IN_SALT',   'hyjfs3ciydjkd8qzci3zvr2iv8fbqmapa1baucq0ni5ag298tcipbrv2ctqjhj5w' );
define( 'NONCE_SALT',       'eilc0c5uljlpnufwsyp6v9vkml4fnqq6swt0dxbry8xumaegqveqhzkcdigi0exo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpft_';

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
