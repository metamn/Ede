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
define('DB_NAME', 'ede');

/** MySQL database username */
define('DB_USER', 'cs');

/** MySQL database password */
define('DB_PASSWORD', 'cs');

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
define('AUTH_KEY',         '3m=TI}E)l@|MV6&t:Jx0SwTKTyWi)O{x_#.:tgo<+cnk4)1J,kX<#gu{TzR4R`3~');
define('SECURE_AUTH_KEY',  'Sc~6SJntvK6.Q@~/w,H9zzRPD 8Cw2:R*9rhO`Yz,*cWz`n_T>.FOe BqsFmUKID');
define('LOGGED_IN_KEY',    'L?aas(#V}E~ts?LYNxBKmw=3*g(lfo#E%}F+&Po/Fqx+W!l6IcUNlb{> 5+CxF2<');
define('NONCE_KEY',        '$7GBNi3d~]p{iyr_bD)uXm[|a&I&/C*wh7G,dffCzk~JEU<:W$*:Z,99)[vJunV5');
define('AUTH_SALT',        'SqIPRPXH(CaW8Df7-@PG&;Z[&@7PB]?mnjfF!Ky|WgoD6ls+]=5Yp}M`>h8Ug!74');
define('SECURE_AUTH_SALT', 'vk*zg^Pw 34)_/CBqQU&*Fsd{H 5bm:9z~(WI);MQ(~[Zj%t]<<Q2Ga{bQuk6!8<');
define('LOGGED_IN_SALT',   '+ju%rUC;LVH Pza<~ICp/Ku}z?3M&8.b916f&}J2jT)p^gv STS-84VK?iU%4WsG');
define('NONCE_SALT',       '3M`7{TZvT`<(1R~YQSN,VT8Srfy)Ozv&hWOtry:)<;+E3W]_,x:ibAuel)HdsP,a');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
