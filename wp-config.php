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
define( 'DB_NAME', 'namtinphat_db' );

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
define( 'AUTH_KEY',         'WC$lfoel{AdMipv3bA~l9pwGsD/vX?F]Snx5#En$-]+1wE3`*yRu.2YihuwhNEr1' );
define( 'SECURE_AUTH_KEY',  'D2yf+7XlQ_!%n``4U!|WHwrM)Brn>]uXIGpX3}H_/kALC7))V8_C9T^dfb=TG`2V' );
define( 'LOGGED_IN_KEY',    'a9=%Cv*@J`Vs#R%<mMLW}j8]_3IExoU%}AT@xQhj{o-RmmrC@(>Rl28+PDerTeb&' );
define( 'NONCE_KEY',        'WGH8Y|B.-R,~7x>6xT_J19Jzu7bcys<l00q,n/WpfD!<TmdR~0G+sJVnHom)SYlz' );
define( 'AUTH_SALT',        'XAIeRX.IXWp)!*?A[V3]!+*S&w=,;=YO}sp8&8LO `fd~+6_vZPv$iH*SvXbTR2,' );
define( 'SECURE_AUTH_SALT', 'fa#-~zg!VgGpNz <vt.a-%M[.L@7oFY2*O-a9;c?/`,]S(F*335zV_c[ZwAw(x3z' );
define( 'LOGGED_IN_SALT',   '@ `WT:LJp8a%/Y&J3huWE$?EG9j`P_!~qB_U`^;kd*mu-#UoYlu/: |Ghx!S v7N' );
define( 'NONCE_SALT',       'KNinqziU?g0{/HL#.W-v!&_+PoN+ +sb9dTSj!* Q*~5;~rHL6jQ-(yCq^a[&uar' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
