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
define('DB_NAME', 'inhabitent');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'xO,C 4/JHtzl ++`;f;{6dOW+S@0>~hSN`Kk*j.PFR{5+CW.-+QDOWUBPx2|xj#E');
define('SECURE_AUTH_KEY',  '<K|v;oZ_U|XNFP/A||;YkAzt]cU*%9(j#,CQ3~%d,6pk{`*T&{C<?i9Z9g)-C|EA');
define('LOGGED_IN_KEY',    '?.?vt<C#gw}]6o693@lbZXSW%?1RBF@varu<r6rnMrbc^jxEH[@;ciQzrW;?&UKC');
define('NONCE_KEY',        '5Ze=f(a=n^fi&U{VOnL#%FH++E.$a1l1Yugv4|W+m/k-r~h2)?.<1q[?]GYi10M`');
define('AUTH_SALT',        '&b0zW[;7dPH2>PJ>BT7Aa}0WBd&L8W!bhTjw4CfonVcrVo,btp-yz1a6j2y(H>Tz');
define('SECURE_AUTH_SALT', 'V+rM~7VTT*@%J,~^_gmy0%yKris.oE&`=*&oGUl<tHx--8(|AOb&Lo-a5)iW#nFW');
define('LOGGED_IN_SALT',   '<``w:dz8HMWeD #_q#)V|=Usyt~+Wk!7|M+T.j Opmv-](q1T?je L&Hs)GKxa4s');
define('NONCE_SALT',       '~wtZ/5t6;U0-}qj2#8-+pFb^ra8leEj-i-i+;a`~*Y*+<KXnI]ac~;Ha?ZulBW +');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
define('WP_DEBUG_DISPLAY', true);
$table_prefix  = 'you987_';

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
