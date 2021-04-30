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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SWEN90016_WP_DB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Yc5l_k<m-UY# =J:mBc&$Kw6nZY)A*JA[b2jf%d$aeGC.=+h/2)|$6#Rz3QwS,Sc' );
define( 'SECURE_AUTH_KEY',  'A@2;}lT[tbpOHof;>wNjwzkv[%lqmxrpd!qvISTq=!Q!6Q1n}o5Msu3%?7.)B;_6' );
define( 'LOGGED_IN_KEY',    'E`4njgD+%5r;*6RZ}lOmBz=DjRy15n>wl?ClmS[xxFL83~#B2ZH{-@|ZGw$>hzG6' );
define( 'NONCE_KEY',        'QUlIB,D@Q4G-$e?VSe(_l>j7+JcM@}gCId5jle/A-b87j_Xn(jfX14ZFe&vfXfyf' );
define( 'AUTH_SALT',        '>JHi]vhjxBk~vdrkr_5JjG?{j#)&Ah>Jcl_am6yD/58F-$>Iv7ce4?q l~;drsZ)' );
define( 'SECURE_AUTH_SALT', ' 36^{7WAfPv0^&3}o;s@LrJmTsmVC{^jF?ec,W%xZ5{W-Ve^vzq3Qnw1-x3:#xKC' );
define( 'LOGGED_IN_SALT',   'KvNz-c;CGbx fJ$N-lpu(RK:j;<;FGa~CrdX?vGRh:Zv~^aT@fKnaH6,BzlI(A!E' );
define( 'NONCE_SALT',       'rj%;?D`$7PH_Y|GMa0jE~En-T7D6LF}+KE=IWel,@.5$`9XTINJ8)h5*oD&>SoU5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
