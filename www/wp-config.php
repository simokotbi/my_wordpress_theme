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
define( 'DB_NAME', 'backbeache' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'U(T}O>:)K$+Y5u v7/<A3iCP#mm,eu5ub*@`]iWP@N{4Ikl#lHy;J{<Qnr9qdL1l' );
define( 'SECURE_AUTH_KEY',  'LKD{/tCjM+uOF>#Av<j>5<S}UKbiDjVpp%w8D+ay!dVIZ3+t$q,0a)|<R;EFRzj3' );
define( 'LOGGED_IN_KEY',    'E@vmuBiKOnUjXUz+td}:dqsT(X|99$.lz8,.+V>(!bK+GPe|Ws[(?Xe9&hkdR;#7' );
define( 'NONCE_KEY',        'o>Ci_Mki_N]Ki6>W9Dbl^b.{y!kVX uwon&tS{Bpqt3 7wMOo`4BlVx}o_kshKFQ' );
define( 'AUTH_SALT',        'ThE#=t]H^]JAGQRX]O@G;O!9qduF@zd>okv B#3]c>~G8A}(-g#jNbh*Qo6#?_uW' );
define( 'SECURE_AUTH_SALT', 'T!x5;KBLb`8x+BRA3NM~eB)?To|;|dCsKr!Rl>}<Nf%r.iXM1k}cK_YpFo<0Bz98' );
define( 'LOGGED_IN_SALT',   ':Xeo/<|2;k7ZS_T^d7<Jr{IA $N4/9j4$]!$B8QWf(lO{FQmO05MGK^%{rb-3{tj' );
define( 'NONCE_SALT',       '=@TM3TB7NHAfJ6b=uM9fH9WSw{>RJ#q;fF)UO[!LwF]*7DTe_v3`fNz@Xs}eN$jN' );

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
