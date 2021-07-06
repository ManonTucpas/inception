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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'db:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'y8a^+PQiVeXP1)`Z~+O5+@KYt`-L>UF5l*AxV}51G?9#CIHoSceDaG~jjOKXCMeN');
define('SECURE_AUTH_KEY',  ']v}^-]h(vFOY-tGeEfpV_@/[qYdAU.QF.v?Jw)LV&hv8* G{X&>++U^|rm+WQI<2');
define('LOGGED_IN_KEY',    'HkL>PevM7b<(7hT9#<] e=gkQ+s:PzCv*-D#s[k%CPsH;3N%P9J]+sHn,4g),L5j');
define('NONCE_KEY',        'I{1GF@+Ow;E7qgx3i BHcO^l1ci+Glb(ut{#+K4[f_.<lf?a<%j*)*aB>;GGYG;C');
define('AUTH_SALT',        'diYc2,/(E*k8yy@U-lb5|_fgb%+p-zB-Y55$%{G8pmi14<?%p62rWb =0[56MngO');
define('SECURE_AUTH_SALT', '$[3=-YgshDFb{amROmk>d |S^/+mH?x~rM6Z@+g&jq`h8V- hh9R#_kmG)3,xp:l');
define('LOGGED_IN_SALT',   'Jq2@Lm}]zu-8-1a,S}!?}?71RjL!9 wVxE;|W4TB!>KJe|IC(lQwL|_P=|d--y`d');
define('NONCE_SALT',       '-<bYba06(nrMtK-u-CbSk/&h AG,ZU6=$pB=;WXH7]OVxjavZU&yum,[e]%qqGAw');


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
