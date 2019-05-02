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
define( 'DB_NAME', 'watermelon' );

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
define( 'AUTH_KEY',         ')XaJa>sBP#5_g<#7~:9jY]$u3H!0SnD8Pq(A.S*A<daZjf=^ZkDjB[8DNP~!C||D' );
define( 'SECURE_AUTH_KEY',  ']<*m67gj{^[o*-Lqsl_C7olsWU/EXn2}a3/&++Dpu>pDM~JR7bxh$tiIe14FH@2R' );
define( 'LOGGED_IN_KEY',    '&w*{BI)c<TaQ^x@||nPnjiTov}U0*7|>:a7qP4)3FD5W|=X<-9y`>vF4Zd~fVU6Q' );
define( 'NONCE_KEY',        '3^[.m208Q}bdoVI($?at*~,[.E?[/e NM6=ScDMH|EI$5{?B=: YS%J:FiYXl5Su' );
define( 'AUTH_SALT',        '*0YVsJ@=D}Br$<b,AENu1=v+5^O8#d3k}mv&sj_F]qEK5RWeS5A[-Hq%Tf{L<jXP' );
define( 'SECURE_AUTH_SALT', 'YVIfPjQ|D]~$Rb0)EUC!Z6X1q8Q_<1A,VdS?3krq,wa=-Q({n{K4N@5x4a?50ryS' );
define( 'LOGGED_IN_SALT',   'Bq;Zrn: S0v2*|VrBF+#RRK^nMfB0IP0]#wC/{oAU1@tDzwfPS<m&Z<BchfH$|M*' );
define( 'NONCE_SALT',       'AdYoepSxDd2Z.KrI)`-FQ<iNF4}@f&L4cml[ 6Asmc!#u+<jWDAmq3/vtAb]P3KT' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_watermelon';

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
