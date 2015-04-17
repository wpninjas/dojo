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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'r78f0B&V)YbjpB%^O=h}2}Z}<JoYTe[!{Rs.{?E_3@m)1F-V!6tr4x,0F_eI3_L0');
define('SECURE_AUTH_KEY',  '99g-W;v,?@@tD|-%ydB60vLLg(Wa?X)ZcbKElf4Wz/sEGk2uv<OYX=/e~:BMoe;z');
define('LOGGED_IN_KEY',    '9T-gU_T,JrNUi>>J+7eD7<#gy+u|Bmuf9F}U}w+!7/e3wInq1[k4I~|Ak=]Yn0cS');
define('NONCE_KEY',        'J3JyXYTZ~Jy.y`!V~s ~-0J<~P[_E`c)V/fS=,:<31cy1C910?G>nI7E#LBu@wXR');
define('AUTH_SALT',        'ddf00^-XnM/g=uJExwg7Bp]<Yi0Py5(*4HJu{#zr9NdM<jTwPKaPy6?<we4c,j06');
define('SECURE_AUTH_SALT', 'c53c=;NU5KI2p5!p0 4?p|0B:VxT#*sc+%zF.N6``6@Fb^i&{U)67zP>0ZbhJPve');
define('LOGGED_IN_SALT',   'QNZ:nD0nWHU[vmBL[Xyga~Xp sL=-RpbE5(SacR^~A[5kpXOGrjp]wW<;5/skB!F');
define('NONCE_SALT',       '5#UZ_^akrM1c6HQ]*X]H2y<t$p= >>u)XHuJW.4%Gq}-s`S;bAR&aVo:R5p6Lm3n');

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

define('WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins' );
define('WP_PLUGIN_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content/plugins' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
