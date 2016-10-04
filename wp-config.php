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
define('DB_NAME', 'wp_ponderosa');

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
define('AUTH_KEY',         'b?:[<E$}VocJQG3FoxKp+3c:N,*(Lt*9B4XSaKQxXgtrZmj/b50cbeLL/#Ax?bXr');
define('SECURE_AUTH_KEY',  'U1B}>6rd:wKXD3D!O$fwc;nB]Au1.[E9d{RpyI+9Hn9/2lYZRl_d>wT@Uhhfjxu$');
define('LOGGED_IN_KEY',    '*Hk[sh}Nu3>c12l/7Yy>eoNR!,6Iq@oQqly-8nmg(5T%v.9z2q;~nzYt*GQfnWt@');
define('NONCE_KEY',        'W9IxCm1ZTxgIi;<;3;$RX?E>EavaUtGK1>@SOpO2p u)2XWT#bFgz&Z]E&0cXU*<');
define('AUTH_SALT',        '&Z{8xZ3`>iEDx{!.kQ.nsFQkiRhyEb ze@oWV{n<M@M4P4%s2N2Gsb,v)bv+$=1/');
define('SECURE_AUTH_SALT', '?*i@O 6#]JIJ$D7uK%u%r*&4Z3L25w@.^GD~<T]P;]G3&zLaIWm0<NiYSaB64K&5');
define('LOGGED_IN_SALT',   '9f5*?1pIX]wt8mn0tfMV$Ef,y!S-aX  */J1,i:~`g@X34X&6.%(|rhLKw)Gwplh');
define('NONCE_SALT',       'fMp{YEc/_Tl=hA2D?FJd]yk)PD!i5ym-B~dnP.pHt!YsAFvJXevWshZ<a~Ty}q:p');

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
