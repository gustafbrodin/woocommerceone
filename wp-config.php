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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'gustafbrodin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hello' );

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
define( 'AUTH_KEY',         ']Ybw{g{RMS)!quvj<Bq[(~IWM6Ou 8.Yp:w<MV0sWTEl0j[@jLpiy@T29Na:KHiX' );
define( 'SECURE_AUTH_KEY',  'KSKl]*Q_1?k.q-8RLl&H&k&eu}mWSEh2i!y$g*<GnKcq.R+5@GClPqvcsZo,1JYK' );
define( 'LOGGED_IN_KEY',    'r6$&*^&0TQ?b^?Ld&_^CP)R25(nCL|AV}tbwQ[W<$bTE~JiN)4(nmE{oY)y#n%|K' );
define( 'NONCE_KEY',        'ItCrOl_H.gU~k0($H7<%z/H9a~O,xZJ+~(sX|7a+lUZ3|z%]*DB]z Wn4ZS#,6% ' );
define( 'AUTH_SALT',        '>EU:~/z;z$PW7H1lva8+bk#AgF0+3S=/LG|?v<WizySoEKYc.7)dWzbx%N%ce%~A' );
define( 'SECURE_AUTH_SALT', '<%f_J3Y},HVt8|)G=)6MI~%72~2NJf(`oF,n+zOr3[%.!Jv:4o06W_MCBKcGn7)8' );
define( 'LOGGED_IN_SALT',   'p46WF@+P]((qI_j=z#.YwTc:ieY%dPPR]6y}}Fktx0T1t|Ey}9|A9MhC0YwyD?vM' );
define( 'NONCE_SALT',       '+#I6&G80MLvWastus9!z[,?J&2zhqhfMx&5GrMc6mAl{ps0nbjt-ThD+(cQ01x>B' );

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
