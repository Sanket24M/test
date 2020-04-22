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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '#r#ul%g;aBMFnnKzf+o2MtrpsG&1ZqGo<ifqgWEu;wJRvRad.,k2W4V[s$B<6A>e' );
define( 'SECURE_AUTH_KEY',  '{58M^)KDU&H_n[?w^OC^qCo_GaDg*B5Xa>4fCR98m!0Q5x$6?v4H6I10258{FidO' );
define( 'LOGGED_IN_KEY',    'T6}3c!+IH,8)-:8mt[8t*ZMl3(hq0{#VpXJ_:[1fIfx4+C L-uyDNf3Cgrk_jE  ' );
define( 'NONCE_KEY',        '-^Q`QZ=ZFloQA?EB%*x7K{F/uluShu>-Dc%CQ0Mr;%A>r7uGYkCr3+zw;U>H`FF0' );
define( 'AUTH_SALT',        '{*prgL}N<Vo<b+nj;(w$QUEKJ?el_MEaE]uS(z]BK++wZU;XQ__G@19Gs)+/%[{^' );
define( 'SECURE_AUTH_SALT', 'gN?S:aWQK53/lMi(B[nVLk&B;-INmphu|Yh`OG%86I!/S?FfH=|]{x7<KuGPQ&Vy' );
define( 'LOGGED_IN_SALT',   '``-I8r6I*iJgSv; O$yTQr-n5&j{:7tU?shBT~e`gp;JKwU,4J#Ondv*$;4IM{S4' );
define( 'NONCE_SALT',       '{@{6{I4AuL_DJT$>t9X_fHKHRGLiq Qi@ZGY^w/U5H+CADgUrs%G27xe8yf.lYL%' );

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
