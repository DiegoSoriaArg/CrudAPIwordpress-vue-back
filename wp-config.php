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
define( 'DB_NAME', 'wordpressvue' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5csR7xqCW>wt]p&XNapVA4e0a$ZfU+:YSB&ksE j[%ezg0urOrv5:gY`eH^JDuam' );
define( 'SECURE_AUTH_KEY',  '0t5BKmu }f!Wt26}GQEj1|)w&iv/~N*V#$>-qj5>dPfk:v^;m!PlZ|bh !q(%79k' );
define( 'LOGGED_IN_KEY',    'T{:*9s2058{+[yrC$[Lx~m,rmHJTG<,bh#EIGJ(H`hO%%@Ws|Cjfh.c&li 9g7Rd' );
define( 'NONCE_KEY',        'jBSZiCcw0wdUakbc&|0%}]  G~Q^OWv_d0oqN1f%VgG_|#PJ>H+ads0o--9GYTJ:' );
define( 'AUTH_SALT',        'CE&A&|QU5XXW3=mjyg3bWA:_OoWt|9r1i#6a(N4kl})FXkH]fv+NSX26 7}*9iyF' );
define( 'SECURE_AUTH_SALT', '9LtD|!N 6RUMr5yALhPEv:QSx:HW!,DLg4WN=Aor==)~av#yrIdQx+IKtVjK<YKv' );
define( 'LOGGED_IN_SALT',   '!sbHIRZs?Ke4{xLq<{0[]jG%BKfGN6VJip3P5SxYyF4-ip%`*3g]jc=Rhy]n<t8{' );
define( 'NONCE_SALT',       'Q[!D&<eV59 _e;s,CbSE<0EeUb]Oy^QNmi7~A[[Br]l8>-^D.HTwV+s@nmHhg_EG' );


define('JWT_AUTH_SECRET_KEY', 'ellaesmisecreto');
define('JWT_AUTH_CORS_ENABLE', true);
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
