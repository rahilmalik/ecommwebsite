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
define( 'DB_NAME', 'wp_computerstore' );

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
define( 'AUTH_KEY',         'F|0] %@>)OaVjPiMpv{760~z-f]+[1_H>L}n2U7%OV+g93)R;0B4vV|hLaB!LUCN' );
define( 'SECURE_AUTH_KEY',  'Nz[DflTkwapf*hH/ueM[c_o?ZIX/2qDI_:9E83iU+}oYK:E/3e;@>f_T#2CqO)hv' );
define( 'LOGGED_IN_KEY',    'I,1,SsQc [.OT1:2,I1oDd g2Ce.bB%S#$(M>M[LFWKU~!K5D#x1dK3UW}]IFG1C' );
define( 'NONCE_KEY',        'W>ua~?1nnT:s*G5VY~K-#L)2WWJdkUTP6Io9 nqF*=;6LvVhvb31D?qKf%6t7LDN' );
define( 'AUTH_SALT',        '3emnC/cnYC~s#Z)Yv@@Uf%`M%{6SCp4S+;),G<CKJOzX9K77]KucFJ/p4Qj^:;3-' );
define( 'SECURE_AUTH_SALT', ']OLDeu4/Dm@,Ec/Fuci6N.JF<gh~y[S:1e|%CiZ#8 M{2h=e.lACM:&-*:s+|2X7' );
define( 'LOGGED_IN_SALT',   '&fT-yEr=WrPg0yMVRN;-k]0$^E>u_.Js0$;DpYB0KP06!Ph;&HkR`Be [3%2$8l5' );
define( 'NONCE_SALT',       '3Kb_r/AcKX6[-9P0 2Lm3:a:qf{i(C sKnLl^vChO{{EP6v!quGh_l#ZXT#$6g_q' );

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
