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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'wordpress');

/** Database password */
define('DB_PASSWORD', 'wordpress');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'VEcw#F+<iT~SK1@=uVV4S90>sV6pjg{LG:=Ka=Jx+BRB/ux3n#u8NQv*]Fs*gY70');
define('SECURE_AUTH_KEY',  '|l*=[;U.MR#^KTODngMeMFSMFG}QV1^=?limmVaH`:>lfA-?)2^}m8pqsp1$j@Bv');
define('LOGGED_IN_KEY',    ' n0cPQDiH6+tJW^u=q7HB%ViLB{)?xN}Qa_XGpgds+AV:n I;d]Mp;6%d$W[wRqf');
define('NONCE_KEY',        '->+` &}%.Q,,kM=UhmVE&+*4r{hTTu|P#75&]K5Cu_G?6jmuHOFgtTHOUo/={DBs');
define('AUTH_SALT',        '; Y:96RY^B>2kD}C/JY9DVLL@TeYt/S6Rp25I1Ky+!pR$%W hnyN`TpW,7f,!5/%');
define('SECURE_AUTH_SALT', 'ypDP}PQ0+4&7^Ml+Hvr+S3nUb)A?GKvJt6pg/DQC{E5?Dkt[W8~Y-NZ=sATeN,tb');
define('LOGGED_IN_SALT',   '?m4Nx;S(SyNH[Xiew(R:wRGO5C5#~LZ0]g<.}Z!$^= EYK4XF`._p4C.VyBz}N[7');
define('NONCE_SALT',       'QKw?X8% v99(f{rVZQQ4XPdmf?2Y4~hTMV7Lz *]hwp~u>&AclR-6g#)fRNKHTQ~');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
