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
define( 'DB_NAME', 'fact' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:4309' );

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
define( 'AUTH_KEY',         '&?QcO#@_p:q*Jxg;9iSWn.em8<cK)%?[p{Re:bpz`T1r_Y gS!)Ca2| T~g4;15s' );
define( 'SECURE_AUTH_KEY',  'g{/[IN}!|!&DP<eDEt=-|>BXC^cuS}0a Jhz]:O}ALKWrg0dxSw|hgd*958H(M@:' );
define( 'LOGGED_IN_KEY',    '$^kiY^DgQg$TvLuZ25F3gC fKpji*FKSM TzEXsV/%VK3M2p%A=z|bbbJq~Y};v=' );
define( 'NONCE_KEY',        '`1uk&#5iF^xF1g9o:/G:-9glwnb$c)sr1s-d=jic77C zyCa|t|&5T7h#)b Cs8]' );
define( 'AUTH_SALT',        '_ffupFr-rB[7kBc}2?+#LTTgjzKdNBLknQ~U)S7,ecUk1WxXQsZ87R,+Vu>!5Igr' );
define( 'SECURE_AUTH_SALT', 'pK6zHc(P&!KtWX<z&$:p7l 5bC&~_zM&&7FYG6?v0r?%PwG8#~n-z4c@Ka7ASa,N' );
define( 'LOGGED_IN_SALT',   '?WO$SIIaah&#iPOj#7@ ?&5U)qVy:(oOd]uH~>s>i6&.6U-D?9gp>--CH4skfsbG' );
define( 'NONCE_SALT',       'K7Ln1&J^brqA_fxWGMNThCr$+s)fqVPvg>s=fuq.{P>*QKH8.qb|U1dn Y|qPiVP' );

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
