<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define('DB_NAME', 'seymourm_motel');

/** MySQL database username */
define('DB_USER', 'seymourm_motel');

/** MySQL database password */
define('DB_PASSWORD', 'x.cuytJ%.V,s');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.v Aw|$Y!ahXy_Yu+UmN!-Pze$NEO.4gM)r|+[!CATb9lHYM19FF^-QbL^i`BRil');
define('SECURE_AUTH_KEY',  'Emtj&Vzb||cYH=D:Qx*Dg((qYl:b[2gZ[C?5+gs{GiOg5|(,4LY~RnO8)]S_Uz#+');
define('LOGGED_IN_KEY',    'i(%1T$jImH`=u^spM,_F&SmIGg[jSye}R+1m~4h$@N4@<3|LA?,t#CistD8^|^7Y');
define('NONCE_KEY',        'mN+-&JoX>YRORQrg7nJFGk6r3`Sg>||.%rhM2dLb))W^u5W9~ksK&V5I1^Ouay{z');
define('AUTH_SALT',        'y=>VM|[m-[a4p5Qyk1K7V &IC_$kWXecmor.O2x0/q|}IM>IXq4Rc-^!-,n*8VDf');
define('SECURE_AUTH_SALT', 'kq}wOw-m=#!0L[8a&Y&7,}Y|h6!#Q1|`&Z)8v-E9~dXH-n0y|&ijc~?~43j:Ce|o');
define('LOGGED_IN_SALT',   'JUZQ|DV{h[ZOy%<A52hOa3GH>e5<E-FYT,Y(73EvD}_PNJ&O=t2-M(iI270C-}7L');
define('NONCE_SALT',       'vEId#dvHy4AqhW^>F-G)Y/-RP`IA[&5(2a6TAG,jQd)f0yvYhxvW?RB`|31Ri-7<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
