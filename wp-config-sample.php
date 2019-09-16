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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'pfE{;(-lBu@EREL;{<qKt|>bcugrReT$~B86+W*F?9RF^m&6wX.bQ^j;(+w!EUeX');
define('SECURE_AUTH_KEY',  '+~.z/-Q=Eh@n%}O:8o~(H3<8EmEJ@zz1mg-Tgx+?umxRY-V4[j:nbqKriL+VA)$f');
define('LOGGED_IN_KEY',    '1UgTDulp*TvQ%|Re7n6x_8g2kjYRl&B7WO*0-+j;M+x$$(#p]VLn^5w`RH]Hrj:O');
define('NONCE_KEY',        'I^4L/6/r*Y~v2@HPcx.S.=$w>W{wU+;qoqH^?$WLvBeD;Eqo|Y=6b;G:v5OnsTct');
define('AUTH_SALT',        '0w^~6&<{~]v?[FubWgZ|h%a=)Hi;exI-uu2/4}nsnR^C3mS#HT#_}vwbP~Un`q~n');
define('SECURE_AUTH_SALT', 'TmTQIm@x~Bj2yhvi87|:,+U4D[:rA+c~-]-:v5U^?Ok(K17p)r+YY L-:d3vT4PJ');
define('LOGGED_IN_SALT',   'F5AOD<a_8BHWi])+{<|-mqOmf@sG{0shQU1<-nXjep*wm~[o)*~U}dF_u5w1I&+=');
define('NONCE_SALT',       '7yh|b`V7s4_pS0G-wIi{k$Eui p5/=fDu=Ak.1(&kmw}We.YD2_Es,@_+bvax]&&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbwp_';

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
