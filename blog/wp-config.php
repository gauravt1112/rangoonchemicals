<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'rangun12_blog');

/** MySQL database username */
define('DB_USER', 'rangun12_blogger');

/** MySQL database password */
define('DB_PASSWORD', 'blogger');

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
define('AUTH_KEY',         'F8Ugz!-[YJ i^?<&(,hp3/|P)]8AN}Xa^F`-nKb>F6AuVT+}H%OQ{[j5hdQ:Z{T5');
define('SECURE_AUTH_KEY',  'h>GC@j >npBKj%G,69P5.Y~+hs)a I$`qRip]T_Y^<+efQZSg1aG#M.t5K;jTdUW');
define('LOGGED_IN_KEY',    'y62}x<,@VAIWx|TG34q^I-gB5Fl2@yCqXl$|D2[O*Yz(,TOcRNNPAABKeU]|K-Zx');
define('NONCE_KEY',        'Wk-%#MI2[2N/+#Vaq8u}nsDm1R_Hmfdc:(zmO0FH+D+GGQT5!s>)HgQ4F[d5X7i+');
define('AUTH_SALT',        'orV)]w|5yS?>m0b5ry*P)~J6f}<YUkDw?{6C}$?}dTm@&z_+L14.^FnbRoQjHfh[');
define('SECURE_AUTH_SALT', '(<L8Z?a*rIxT|L[f_ul&~e4F@GKP$@)f(QgfZooxn#+X7v9VLjx=jD(/I,I89Pko');
define('LOGGED_IN_SALT',   'wgL79-f`VkOz1wn_a<1k<PU@0qf57,7t{Kf#OH `6shVw{VA6De|Z%pg #jl7vF|');
define('NONCE_SALT',       '$lZwUsJ<<k:Vd)|wE.vr58)wK~JPy]pEYXPSq#*S$v!hD,zKO)RNq~(#e[:(nm8)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'Rangoon_';

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
