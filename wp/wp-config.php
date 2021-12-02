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
define( 'DB_NAME', 'seymourm_wp181' );

/** MySQL database username */
define( 'DB_USER', 'seymourm_wp181' );

/** MySQL database password */
define( 'DB_PASSWORD', '1Baa2)(dSlp]!K)4' );

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
define( 'AUTH_KEY',         'jx4zdyk4vah1u1eg3kkky0sezt1qx1eiihkw6ooulgoeqnpylbfeatoz2zvrxmsw' );
define( 'SECURE_AUTH_KEY',  'sozom9tehfe6lkicd2itwmf3pgmpdbav9zvwaw1ccsw6kraplpv6w4xtcvvcb6bi' );
define( 'LOGGED_IN_KEY',    'lqjvusgbynwwuvf8liv5voiyryvxqtprvjopvuq2bav0f4anggqh2p50a5vyjdhd' );
define( 'NONCE_KEY',        'irtq98vknmvdw93bipvuuovzuwbf6hmf1snierzgzyoibgqwvoo80dlvx99zswlf' );
define( 'AUTH_SALT',        'iboszyd797ni855ayn9cczraog6dkdiatxpxwgeq3lyxiozs4c5gaxi62ki7vqwa' );
define( 'SECURE_AUTH_SALT', 'whb561jh2mncdg97fctoixnknxy2bbaoiedaqnfmolkku3l8fnvcmepghmlampvk' );
define( 'LOGGED_IN_SALT',   'kjtdirocbii1nlmbw5bqg0ye4idme8kv8wnxrn0gcxljtspet89og5ip4wk2qsbt' );
define( 'NONCE_SALT',       'fork46liohy5wclimjyatrqafyuwb6l4e44ecwadkjrjutl4mdebglsxt0fztcnq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqz_';

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
