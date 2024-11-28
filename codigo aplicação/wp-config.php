<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u912567668_XWB3j' );

/** Database username */
define( 'DB_USER', 'u912567668_yku6P' );

/** Database password */
define( 'DB_PASSWORD', '46583ikeuk' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3$y&@tgD(cL`zPe*_:{HZ+r^&6Tge*=5lXQ._n!LP]Ctu]&u330#NI|f-wfwC5$f' );
define( 'SECURE_AUTH_KEY',   'cI/AL?OV7&V]sa0%EVdi]xgVW9F2_`<X<[|:^ r[IR(F_}2P7i$%y62lKGb8lfMl' );
define( 'LOGGED_IN_KEY',     'IVrt@4wvzv^IrA5k_`TU<iqYbI-_8^2yB(-r-k%P &r^P5?D5`>aEp>%#:?$P~MN' );
define( 'NONCE_KEY',         'xK}7!J! --dE(EwHCj(58*U,Owog8oUy3?sC6&*|-MS;m&U&9PMFT>Olp-/o%O;x' );
define( 'AUTH_SALT',         '2]L2:^uA14QN`Q^o^LP{um9PWNF#d:j@d~SDM yBfGrHwBU(~@vlG~x9nEUXuuw<' );
define( 'SECURE_AUTH_SALT',  'Z&u, 3vFQeq-zEp%{*8)q,Z(v$B^`W!5a8myR{KD>ZudLo!U S:<^3a`,@G8%cl[' );
define( 'LOGGED_IN_SALT',    '{~NG2`/;N*HRcNzki6C+~oI8;Wz^E&QL>xlkNX3<bv,0L%^YJ6]PQl8W+LwJUzr/' );
define( 'NONCE_SALT',        '14WL#~1F|iyz xd:#Z=G{{3CbLDJtiShd^dUv7k%:D3QwLL:x4f;Dc7Dh_:*6sNQ' );
define( 'WP_CACHE_KEY_SALT', 'O&;tswp*;+d4+HgR;(Kwu/r_~i)_o (FA<}OI[jd.i}W5*JMVt0PYXpc_OZ+MV2#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'ad988cd77bc04572dd63d89e01df31ca' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
