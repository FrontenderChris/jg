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
define( 'DB_NAME', 'wordpress_jg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MC2.mysql2019' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KkA>|;.@=Yfs%c7;y)0?VefpI>_9e^rj{x9$XIVxQ1SKU~g^[1`{7tf(4usE?Ols' );
define( 'SECURE_AUTH_KEY',  '5K`1Zp1KtVc--|s_Ojb@`G.#qdd}D-G/B[;PG5k6p6Y$3=)jv7>>YeE0j^09+,8y' );
define( 'LOGGED_IN_KEY',    '#APix6MUhqOIOZxqk&+{MBV]=]Xy#l:Rzr(Vt{JxFTlEIHzngM85RW=_&FL%!.XW' );
define( 'NONCE_KEY',        'J;;vUHBY<2W7{6%XUIu%T4[D)*Yfsoy.b0E*/yueYZ[psC[v7Up=gY.VT+!S{E|-' );
define( 'AUTH_SALT',        'oc-DH:.%^HWUIq|$|~aFCvZ8zot._aDCSX?PyMbS;;0~P/>G%/()Rh0qcHn7ymKp' );
define( 'SECURE_AUTH_SALT', 'd2P#`*@t*-*iqOPtFo/WLOn~<cM>+Vh;$?.;r:pY]Z#h}.?0)[VJ`+ck>cE>v0Sa' );
define( 'LOGGED_IN_SALT',   'z(6Qio&0|2c*uU|i#|)uHy8SJRb1TFvz~~qZVZ9r1H$H:]k8*^Sm}f6_D7Y&ypNU' );
define( 'NONCE_SALT',       'K*#<#i.qdYBHo@oaz*Hmty*#<:EZ}<R@C#k4KK-S>qz}74QU>h>OuE>x}RSIb5x*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jg_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

define('WP_TEMP_DIR', ABSPATH.'wp-content/tmp');/* WordPress的临时目录。*/

define("FS_METHOD", "direct");

define("FS_CHMOD_DIR", 0777);

define("FS_CHMOD_FILE", 0777);

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

