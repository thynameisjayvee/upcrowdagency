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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '4dwrunndrms_d%v{Y::}+Rmsh<h@P6.zrWV)SpL$y+08>fRNYwf1/H5f_o}8^}*L' );
define( 'SECURE_AUTH_KEY',   'z-%3g6Y7v]J!838Mded-%QAN)>U)<zgKn9 Ta#n@LIKD$JvW?iC?q7ZES(^v?P;2' );
define( 'LOGGED_IN_KEY',     '>m/!K|WG^#8d9Xr+,#_8WT7x(2CehtQ>qQ_a*Qa`{lWKu0I0(D%NmaTnX&LlCPk-' );
define( 'NONCE_KEY',         '4zMve}_{fI>:K-M@9L?@4Lv>&[).ymOm:dc?]Um:*8V6,Y]Ix$Z_@PQxN+U-p#3w' );
define( 'AUTH_SALT',         '|Pl${27TJ12R_J#uk~^qtZef~{bVI@UDphH#Cg/d<Mgo&d`;8_oaQ6RPS@9*?^b0' );
define( 'SECURE_AUTH_SALT',  'Gj$Oiu{k#~L;OX3-5CKumm/UBr^RR*X/?D&2DPod?`XT*5Itp3FeplnKb720`7M8' );
define( 'LOGGED_IN_SALT',    'K5{X#IH.9?@PYzSz,)cxm=}jvl>c{3tA-p3i9L;W~;){wQn3W}R0~.Eh=KGqyn}S' );
define( 'NONCE_SALT',        '+a0F>Z~a/@.)5KY43d.v9T}!G2M|Y;3UZa>+z}}6O5(V.-a>&k0BKk:-J|Q-}c::' );
define( 'WP_CACHE_KEY_SALT', 'Ot:4{T8~iI-b23_YL1Z26D;XJb)soIJz^N5F#16AVelG}p3)}/&D,sO&uz)H1Z>d' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
