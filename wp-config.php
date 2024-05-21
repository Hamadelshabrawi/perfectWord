<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hazCompany' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'X^+:B6!}bqPw/v3vY:{PD2w@J-*D6+Q{fZ!Rqe)NuSgf0(J.Hzu(96:W;$nEJ`c]' );
define( 'SECURE_AUTH_KEY',  ';:}|{Mb.~|%;vmV1Ksoz=J8HN%K6j!{KX!VhPul8mmHlH5pnul}Rtu=:`WQ JE4D' );
define( 'LOGGED_IN_KEY',    '}N=PC}+fBH{@0Vsj&S5q6msO4yqLcH0Ag:XL7zBg!C$u}kB!3<nuOpK_KM]I,Uj?' );
define( 'NONCE_KEY',        '!bI]$!;CinzK9v]2QJ`7X(~5>h]%3 DdnZwqZh+9ec^CH~/-+>;g+Xy.hjIp2?M(' );
define( 'AUTH_SALT',        'E1KN]C C&VvLJ,dA*]jPT:MC$wAdbiBa@:J_k$nFgLNhmrV1M=8e1ATq R{N#5 -' );
define( 'SECURE_AUTH_SALT', 'Vez6?.^@2Dd QwjF}]n36JVFaM-}.2Yb2C5%uH#R:.:zfau=#q~bmSAFy*rR9NKw' );
define( 'LOGGED_IN_SALT',   'xg*yot7o8)%oE~V]N;.C*&coGBC#c6Nf)/N/2:t>+$:kpr>zJt,Eq)SZ&5EXc)TM' );
define( 'NONCE_SALT',       'C$_}pb-l2#jo7/%aGZQ/jBT0}c7>#}bmx mNM&=}P7$$ytT0sM1hw=Z ]j0Cq;oq' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
