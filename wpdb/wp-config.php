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
define('DB_NAME', 'loncke');

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
define('AUTH_KEY',         'FL|+/@rKRK8nC&a.yDhc.Fi9,52cJ6CPNz;AS|BLmh3/a/*(My`3bs@11_-ITUk}');
define('SECURE_AUTH_KEY',  'C}t7T%Jh-5Rn~aiGtvsw.:^^QIvTS/TC=[(K`$B=Q(X<pnUMvXqA0I$<KFS}~$TU');
define('LOGGED_IN_KEY',    'e-~},B}^:Nx%pe!x`(utxk?:3B*OE&7_}/#rViOEJ4zXrw$};9u,{MRLYwun6UWz');
define('NONCE_KEY',        '!um=[Hx#c@t6Y5|cmYj6l4zW*3@$?AS2y*ZRtK>[5BP7Y(V+b+$]?;f{~?Sj<1pi');
define('AUTH_SALT',        'sNImvI(etj/teG{OQ-uV9yy`V`KyHlrAe`.H6dID:u3%o$-|G.NqaPSJr7< Z|cl');
define('SECURE_AUTH_SALT', '9<<>v[_DGD %Y~@n00iPwJG6K!N(7DO@amnII}>#8Y{<6cQI)r<WQY!in8BrT,FM');
define('LOGGED_IN_SALT',   'nA@%~76_H~Eb$LPw,&Bc?e}}zjpA4Xfvn+6W0!cY70 S StI_eXTHm[ U%;I;`(u');
define('NONCE_SALT',       'h:)n`WgZk1x745Q;_)S_K#_ SesCV}3+q^)I|t3J]Flv4/WJF{1e:1nu%2%OwA_]');

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
