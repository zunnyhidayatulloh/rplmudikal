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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=)AslHfJ[*OxF.@NycH+%4M-5DfXOkkUR=!x< 8R87YJ1_u](>7k!g4~]_A1>xKp' );
define( 'SECURE_AUTH_KEY',  'CI@N{jsZi zc9Tg}OX?LT$oo^1xDRh/`s:OX/gwX}H1im}]Jmj~!B3o`b==:e%Wd' );
define( 'LOGGED_IN_KEY',    '^!$(EBA-@-LAqO.:1OC|a1T~v5O_?R;lY4k43Io{5$?:6G H;?|m;,S.|R?wdA0%' );
define( 'NONCE_KEY',        'B.B)=xD&an 3jFT86r3/Z$W{49a7u6; Oad).&}1!bJg$:HXA[s09{4<0$Qj8?Mp' );
define( 'AUTH_SALT',        'z%gL]?.zd|Qz5!T$Km[3z9>mHic(/NWvb9 0Pq>Z[z8B?{21asPuA;jL{L!x17?5' );
define( 'SECURE_AUTH_SALT', '4%iwXamww]u>nl+L>P|_H8F>4!:|XLr%O*Y8H@zOb#Nx6j5t`#EDK=B KW^+M#Na' );
define( 'LOGGED_IN_SALT',   'e:Os_xk1:T>4ujwL0^rPSG:7Q7eiOfmEdzUh[GpZh<``V}Z!cj*d_Wp`mn+c.>r&' );
define( 'NONCE_SALT',       '9O,ES[Q_#tUI-7!cZJBsp9$V$!!{xm&^AU(%K0DP7p]iXLu{FOK-ocdDyB~dL1~?' );

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
