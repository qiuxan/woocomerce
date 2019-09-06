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
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'DK((5]baeRU@R8Z<+s:yU]HAW9Q^{w YY-y!HBMc,?X$8ThHR0U_<!gv@:@ES#eD' );
define( 'SECURE_AUTH_KEY',  'K?SxhG{|U]xrbXMR*wifE2gm$}n25U``!OH-QNi1e)Y?! dt-}}hg? >lv}@n_e#' );
define( 'LOGGED_IN_KEY',    ')GWE x5]},L2mC,%*v8)*!ro+*PqOI<r)C5$]dG)T>:yxrk)@bD6ih8>Rm#*BK%:' );
define( 'NONCE_KEY',        '97g<fB8o_[mdx{f<HPtVvQVz9Bz(d#7$g52$Y%;c&pCr+hS7fw@mRWEz(o`1U{r0' );
define( 'AUTH_SALT',        '!Kvo:)$`hz)pEno%C3y!0ICO4D=r56krJj~ncbg+0_qV9Iub4i_eRg)63bq(%M&Q' );
define( 'SECURE_AUTH_SALT', 'm!YTfL0$XEE1Vn+}$2T{Du*g0xA0MqTo0aa/F<&]%4@cH!JSEeJ^(-`k4L#K6pv+' );
define( 'LOGGED_IN_SALT',   '~NwSct<DD/zlg&QJaj<jU6UYZDp-?{R5=Y_+#Kq*N.SIG_Yydo~ %-OGCe 0VL4E' );
define( 'NONCE_SALT',       'Qf;^fEH0%.{XV$Sk@g^UZ9?*ig@-5w~%S^42)N:@~4&1.mzSZkr}vayc|0XLYNuC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbqx_';

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
