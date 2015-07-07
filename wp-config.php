<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'techencraft_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'techen_admin#$');

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
define('AUTH_KEY',         'J<Cf1I+4>+ Ot}sP5S#[(g)uwf#Z?x&&/&rWAe5b{qj!r^w(BbDW`:3|(IqxLXSw');
define('SECURE_AUTH_KEY',  '@uHfJXL4u4/y[Htx~QT{+AK3@y^k6MJf<+tI808i]+%Gn8R>#|aO!,MnIEX2p#!|');
define('LOGGED_IN_KEY',    '-hY[tV*WJuJop*vPqx|M%S,@FOK<iMeU@@oC#rWGN%(6}++Y$oH`~g^~/ ,V^Tgz');
define('NONCE_KEY',        'hJoJ!3ld:)wc{|EwDk2kc|7|iuw`a+&2 #gIhi&?d%Qh=I_;9sAqD1<MLS 3`U`^');
define('AUTH_SALT',        ',x>4Pb<|AXg&a3}j@C/uI|E|eeKkW.)M=/x$+v]a:avc.jI<.A.Y7$20=bA7EQ;U');
define('SECURE_AUTH_SALT', 'f=`FAQ^dRtRVlZb<x#wwZg)c[+{U@7XT}jbagX3]BPTH`Q_%U$${X(]zhVfIdb+Q');
define('LOGGED_IN_SALT',   'm_0kJKgVZ&mj%/s1zK_k~pKa-t}o`>l<y2,_%N@[r7TXnB/x5teY>_9NW7+$o ,=');
define('NONCE_SALT',       '_X-d5[V+Q_KnRp;L5pvx*8ULw&PL& {gUgfEgXAH}RI.co1a`1)9Yu<q, bm)=K7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('WP_HOME','http://52.27.46.108/wordpress/');
define('WP_SITEURL','http://52.27.46.108/wordpress/');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
