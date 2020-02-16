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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         'd&_s`Kkq 4y-dHjIH-p<..*3RV{mQjcfoIHujSd0.|%lNaYexhgUu!kyO%E7|C?s' );
define( 'SECURE_AUTH_KEY',  ')u[]Ub=9IL:kdl&mH0WMB1&Nk9+bIys+I2~BUFv5Lch!h0M._%/q0f)b7uLtU~UR' );
define( 'LOGGED_IN_KEY',    'U!]w=xA3eQNz>E}XGY,Dx[nQyK}U_<#KK*<b-r:3zmN`-qYizx,NR-#>&~;:eG<z' );
define( 'NONCE_KEY',        'Df [=wsO{d:(%UHpS!/mRUuL4/5;99_,+iE2N*SRKCVj=G1ss8pLT0`Cz1^&0M%f' );
define( 'AUTH_SALT',        'cY3%u5l(r{mlda6TlB3VS#8RLRb]&9#@!)=,u({;~pAufq*eqe=2z1?hh{V@DL(S' );
define( 'SECURE_AUTH_SALT', ' >RIqxIu/wH.;[5ULT,~Jp<};G_n>6rQWqNx2kI;-vw8$Rcl*cs]LNjMd96~YW:8' );
define( 'LOGGED_IN_SALT',   '2sc2IIyT2OG1mf$R6#J_@(AO1Oa0fQvpmbQDs)4!!M#wbf[#[PVK4u0WR}~h~lFa' );
define( 'NONCE_SALT',       'T$?T*MXd[a0$%P~U&{MVn|Vd^54=jsTFCkO3n_aHO2~(l8}hY2l5eIkCsbY>H7v2' );

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
