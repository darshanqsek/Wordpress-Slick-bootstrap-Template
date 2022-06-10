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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'slick_wordpress_project' );

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
define( 'AUTH_KEY',         'Tu~EP[b8MXtIOn7oHR)^F.i!=`CmZ16.N1z*1.nL>L+_Ln^5WekGX5-;3()Yb=P6' );
define( 'SECURE_AUTH_KEY',  'YzQ#b)I$K%rcP}@DYJ&Ao?HhWD>$`k)P(JtB6RC&:4l:dH4>gUPj=f: *)vTZD^o' );
define( 'LOGGED_IN_KEY',    'BIAM>J<:+_!`w1UJ~y2d$PO4t^/~~ww-yCf)l_cWoU~i3-!=dW^<hi&;6FpU;xCI' );
define( 'NONCE_KEY',        'Wi~=)U=N_j8LR%F+D~Cl6l,E/al@^4! j[p?cwS)([t5lQq6K;kG]T(|{NqM6K11' );
define( 'AUTH_SALT',        ',2Qz8|@!&=4&~FM+sAP7Sny[L=hE7S!C(rGkObX?djJR*h;ODkLx,I1/i|vyWY-y' );
define( 'SECURE_AUTH_SALT', 'S:u3q~-1qNHuV0rV|lF_L3o!Aal.YT/ndFaIX[Yhy:U(0$ 2wNP=C}{YsI2&2Ck]' );
define( 'LOGGED_IN_SALT',   'PyWyn1R7I4Fv>AMD$&y&hw ?vV)7C2X=f~^t2U_yA.hPfOQ9~jzmDQJo7iRsnC}q' );
define( 'NONCE_SALT',       '~Id?g*zPJcaq,c(R<y3AJD,m5qoC.y!to,9B3.t._igL7uS`Plm%}F`z-p8~UHTn' );

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
