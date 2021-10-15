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
define( 'DB_NAME', 'database_wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'databasewordpress1.cfn5q4mcxckz.us-west-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '+f}h(:WQ_CUvQt9jLhm.trnKkj`NR2[ekrn+)>/>6T>-9#3:Y3G22;.EO 8rCgCp' );
define( 'SECURE_AUTH_KEY',  'h7XVuXpo|>;9mHQly,W|@@0rWa8SQPI_h]CdkY_|o6*_<5E&-4,L5ogn)&LWiK^|' );
define( 'LOGGED_IN_KEY',    '@#JG03G|5ch`-R6X$BO_{q3P?+,]h)3j#0{)`z{oCe]mx./k9pI/,5z4w/3F{F_^' );
define( 'NONCE_KEY',        'FjJ[MetG(*|78u87&?!pnZ{>Q=**_s3NNO%ysDeijiHuX2;5cG]0l-cs8*p=S}oF' );
define( 'AUTH_SALT',        't0)LrtR&nd0*XR$~ &g*]x?|wL=yD~6a56V&Nn?/eZm=L-HUFN!DHQ2cQ8c@G/;T' );
define( 'SECURE_AUTH_SALT', 'hNlVhPU[7ce70:tc:w?hws4S8dEhg(nvM,}uL1>jd|m[P&g;+$+J:dXOlY;n>:-!' );
define( 'LOGGED_IN_SALT',   '}Zi7fOoU(,a~)_AJ/xdnyfY}EklA5 5dn%u<4;eB|%%>tMbY&sl-x:< 61wq5o@B' );
define( 'NONCE_SALT',       '0&H,Dv-/Jz@m9;2,{zw8k;#5CUNSb=}KHl[cOjMW>/rrl3sf@O]fM$+_5(Q(*j~z' );

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

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
