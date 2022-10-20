<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?rWlW$wLK|8i;$3I%JzO]Og%WsG.Q!i%NjrnuJ,^4VK!oQ-sY0Jfuwr5~R-P6;5S');
define('SECURE_AUTH_KEY',  'v{v@k|6r:Q1.6TA@170HxP<KbPJ|_ NfFQH;*(o)MO{.WQ7#Gj1$m`KQpzCib5[0');
define('LOGGED_IN_KEY',    'Jv-MXR{%}dLMQEO@OjTkv4K%++k2/GUPTN8LF<h;0uU#VXT`8Aw6-Vj3Dnsr=G(a');
define('NONCE_KEY',        '^e;+LtG;Rp@xg8bh[dVf&#vS#NU3lwgY/Jv[Eo+w{gi=*F&:?]GuNAT`4(r]rsp(');
define('AUTH_SALT',        'Kbf&kxcT[$wW>22eb}?tRf{$h=<-6k+O,4?m[b=/p8{pMFB9&l0SckZ/cU:J$w0&');
define('SECURE_AUTH_SALT', 'nEmdQB=Y(?|I~zc.Prk#5--Lf/FMr$^.gvaK##+LR$eJu8@Ohuu5FR[`-B6}fI_Y');
define('LOGGED_IN_SALT',   'B;b0Dg2Iaj0 %?2)o=N)wV%N?w!Q-]=~(&|]??|+o$pWLB3Q;;w!Iw:t~&}IfM7M');
define('NONCE_SALT',       'DF Vx6-qOJq9ok{@rmWTq1MxS<aW>|3<gs9=JF:,y138=YXqJ%W[dZVQqNiK{.E ');
/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
