<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'r-Hi$_gmw4de/dQ;Im*AX9t}pU|Q~Kf8MA$NX>|APC.2!bq#{B|^x9 S-EgAT3%%');
define('SECURE_AUTH_KEY',  'qyqN*X0qi G)zCpxZYBM^#8.?k+_<=9Acyj|*oG(V(ddE_89w^yn#|Cx(JFtXFD]');
define('LOGGED_IN_KEY',    '$EGUt^PG6D^Ro_^dE=y7XNG7w(dU-)Q 0^u,e=krn+y@I8EIMiJLR(~o0a-;<CDJ');
define('NONCE_KEY',        ';as% O9PU5RnJ4,?tILZ@,8IK=1x~-<w$VT:]9s/{[E:G<E^:-. Fk+pjyp~2M~e');
define('AUTH_SALT',        'hM.)3d|`F~NU9Py [dvW!l_EOyi?<.s+eZwAUV.+XJ:F]:tSr-y^F+zE#|Xy+x*k');
define('SECURE_AUTH_SALT', 'cr]@3k- <B$ZZl^DW*.yN-}H{H:oneFF7WK|BM+N!Of0/15D%K q_t/p%ey4:ew*');
define('LOGGED_IN_SALT',   '^4<|U|`ZEQ6-32Xg%q<Pwxa$<@WY~eQ+|86`d|_nB9](_RH-).<p4*jw3[uVX|rS');
define('NONCE_SALT',       'O*_.;R1-Q&f-EvG4H2kxt]Kz&+qKwQn-#1ICRJ95mQU)u+|Y@![sM3NLa3xMR||z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

