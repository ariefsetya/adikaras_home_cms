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
define('DB_NAME', 'wp_adikaras');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?q^L{!E-pdLF_sDd3Yh!LP5YI_IU,<L}TuK+lKaaokUC .1OG=rWpjToxi@I?xLf');
define('SECURE_AUTH_KEY',  'scr!]#YR,@meC@2GtLr1h)#W*Ky@9W=@%[SO)I__Fa_O7SIwh<O6qws!Pq.FIF=E');
define('LOGGED_IN_KEY',    'D`KK$-09oDXVNyF/L.8;TNwQ wm:a*OY?ru3KS|8#w|S*ceX>`;fG],wQ;RXT!v+');
define('NONCE_KEY',        'q41Uy/*U9r9{roJ}tVct]l4?Q=;5%l&=U7-(7Q5R8@p<3TMS:h=0!R<AW2-+6x%,');
define('AUTH_SALT',        '|n0[E){IO&nNch{![A:U6%|{U`6;o9Onk#h+H-yq-%`4k;Wi_{Cw5y<)x!<1isNS');
define('SECURE_AUTH_SALT', '_$XvzK$0o!gzFb^Ek88|E-nh6|3-9SdM1p`>]@h0FD7dvU&eGUD/-@ij,!`TlVs3');
define('LOGGED_IN_SALT',   'n<MZMK}2~lH_16=-xWEA]~@Up+~}Pc$NXW}g%V|hhPQ{,5-.<!2U9xw+`p],As.n');
define('NONCE_SALT',       '&>GSM`1]yv}-b7Zm|H,iva-;9v;I:Y-3N,S+<LVUZ<qJB>Fe4-Z9@Ln.9% Q,Bav');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
