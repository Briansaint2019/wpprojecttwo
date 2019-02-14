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
define('DB_NAME', 'wpclassprojectmain');

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
define('AUTH_KEY',         '(cQGS;+F] Ir=hS7kZd@|BI_v.oi$!uP5 ?Pq$Tr}9dGJyO:dW)-5|gBA${VZS%B');
define('SECURE_AUTH_KEY',  'k 9U9oq7Cd8(_![`0.B?sx0y|P|f~>^RAi]G^>I4Ea>xFUa}!}KZHi/)fM<ML<x7');
define('LOGGED_IN_KEY',    '#7;Vigyc:r Yago=FEqSD*x:K+gcxd&]-<$P3uBd!KX2z.#y9y*3URjRe]~TzsyA');
define('NONCE_KEY',        'p.Lo&;%mok2}A?qg~8=kF|()W($F NXXZ-K|@Q4bcUaczB[}Y-X?J)Ym;eXfPy((');
define('AUTH_SALT',        'ptiz|0d5cG2fsc[gu$su-:W=q13f_<BPZ|V2?t5=qj Q|OQV0`:]apVlFE{XDX*.');
define('SECURE_AUTH_SALT', 'z#T2yGM#Rm!2a)?s(bxKMJlS3lz&-RZo1U^2jQ$@EsEC:b,pT/3`.D3vygQ@/&o ');
define('LOGGED_IN_SALT',   'T)*XSRz@EjHZs+&Us^!aJbTZVld5X3b88Dt=@4MY7[7MBw[mhZv>hJRiWt$Ud,S2');
define('NONCE_SALT',       'l^0o1oce,#ob^`tfvBk]w^t~5Gl}_(GEYX<H8:I:BoloOk;~@ S;F1#)@HJ-tTYC');

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
