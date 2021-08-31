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
define( 'DB_NAME', 'duanthuctap' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'wTNf^&_N%T1iiEC,eITz;[&r5(!0m~|95i$uJf 2f8aJ/!S&c4OH4du_AzNK:7SH' );
define( 'SECURE_AUTH_KEY',  '>a(gL$>a66Jm2l8<}-gy}6gyH.*MF9H?/drVh-8F_`]E~Ryqbxr_T2P=-6a:hD%n' );
define( 'LOGGED_IN_KEY',    '9d,OOS3LNykeE}e 0)+/L}+#T9P_ 7R&_~7q5|#~mtOk(GQBK2|~K`5R.R}n_~}/' );
define( 'NONCE_KEY',        '~(BaVv-CvBWrb+S~%Z5sc+1RK QFZ/QX4a7y^o*]efcF=o5zpOVYT%OYw S%;ec1' );
define( 'AUTH_SALT',        '9ZNGTmM@hP1UJp%Z_o!nMVOoI*yt0[Dq fir=Ff7e~-kA,=;{!+x7Y.y-&W<[AN:' );
define( 'SECURE_AUTH_SALT', '|g2AWS`u+|Bt~1CC:;/gT6lTx>3*o^boa9_J1Xr?pAATx.{vRC|%RO b%VnY)NcN' );
define( 'LOGGED_IN_SALT',   'JzuB;gw<bn&u.$9>IJ$RIfJw-qOWtH`dI|S|9C$DG]$~)q9)Rhl5]cNvmA;v(<6<' );
define( 'NONCE_SALT',       '`==<QX<G ez8)Op [-<&:k]Pb `X/T[F`koD2Q-/Z-oJ|aBOBdr-]m/)La@jxp7Y' );

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
