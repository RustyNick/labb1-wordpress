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
define( 'DB_NAME', 'labb-1-niklas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WN C:{80rsr6&:cB7|sVoxg7D8LzOH>II?-Ix|mhwC$+.,&>H#ZNNo&bZ+ <|pgN' );
define( 'SECURE_AUTH_KEY',  'C/[WACf%}kh&w+7vd>f-2:zI<u+D lLKZQAQJWE(f_oLLN;9q5AJ4|@60C$n`d9.' );
define( 'LOGGED_IN_KEY',    'jVb&|e#_V0}[k/wA.Hb=*Rmypr2btn`?AW}Rozs:.>1l3ECMnB`WlMC;1m.^!M14' );
define( 'NONCE_KEY',        '{1ZAGidHDEeooMi6_&|wcEcx0w$YL6k1y|~q>d~Cz~6vTilu/~X&l6V/7b^%wB=Y' );
define( 'AUTH_SALT',        '-I>+j8ZyqW~|_PAom9 FV_a%b2L09Ud-Sh;uwXX^o%($=1vxHU{Y)1+;oJo>9C9e' );
define( 'SECURE_AUTH_SALT', ',F9G>?mY<6xJc5.*5.Oall)`yj%aoS0;f_?tNmyl>^pNd1uhi=oflg;t>Y8WIP 1' );
define( 'LOGGED_IN_SALT',   'QOt:B/[1<F k`Y~4I:V5!{>su5<fJH[vIe!{ErmDbRh8KvC5| `XrgGt,3Zv{<Da' );
define( 'NONCE_SALT',       'm%<C!>8GJA8x$A$s<={q50[x{jA5^jl;bRH8&8?5`Nh|;BMY1u0qP]nii5Cl=^S$' );

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
