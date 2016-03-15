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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'e,H8td,j`i<G}DT2yqAYCf)+3K_f,l3hD]{V$XPh++dw YK*l[;;c2:YY{DrTkt`');
define('SECURE_AUTH_KEY',  'DK|Igu_u_c*trEy:FL&zb+seW{F+M6upBY? (-*vP!l97ep:N o})<QMM@geC{mQ');
define('LOGGED_IN_KEY',    '?Fu@;zPFCZF$M~]|A@1Ltl5_gBl~_{7x9M9iyk%.dcq}P?@=G^tR/PlJ1Pt84~:q');
define('NONCE_KEY',        'ZT+d6_]:oh8 08UpnH]GS<OAcLN6x]BP&:Pr3l>3cf5|g?b.4MI!u-a&+y!5>/bW');
define('AUTH_SALT',        'z^;~2Oua34H/<hZv&;6f`0.goiF>`)1+E+5/uHFKh0nY }l%N0rC.I?vN1NAKH`P');
define('SECURE_AUTH_SALT', '!(UK}GiYGB0La=r6*fWDJ~6xtvt9H-m7qY!s:ih7}!~Xk643HBrJRm_V*KR}|;ze');
define('LOGGED_IN_SALT',   'V{Bnh&}(b7+?Sj-D W3n~-[hR7KGxRJ,4^k %mKivqjW-?8nh}u+P,]V!+LooUoe');
define('NONCE_SALT',       'XT(S-JW7Su^69KCkxE!Ep5o+03L<hMt;,3t%).3e(Z,.Ni+O1+Z$3IE-Efaa%ncb');

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

