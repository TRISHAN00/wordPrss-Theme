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
define( 'DB_NAME', 'trishan' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'PA}AGRvb%wsMf2>Qb1UG>6S]PR=|}D+QWOL6:WrkPWLA[giR1ah[Y)3Bou6[.3Gr' );
define( 'SECURE_AUTH_KEY',  'zT%%],A_,fUetW=rixcB7 whX4XQhMRL+JzmLwF1}I_lm@,KwUsD)E&Sh6?HCwt!' );
define( 'LOGGED_IN_KEY',    'rJO0fFai+FsoQs_Z&IYGC8 2-(diI:RU9a,y[pzccdkTj<P</$80@h6fn ~DPMj6' );
define( 'NONCE_KEY',        'BF0lGmaipM.am~/4Fa{)Sr9PX/l@GAz:bY9@4fM5^7PR8q !1QUc`syb#ty~?@G?' );
define( 'AUTH_SALT',        'rHC P1unNof_Nr#,_B3Dw!^%hFFj9K3yL[*~y>k2OkE^8.]q c4aJA$T.1 G*^I2' );
define( 'SECURE_AUTH_SALT', 'wAkGdWV!9*+DE;P3}!ucD|2&;k?MLQgFrr>a2d>~^JKBAD^t$b4ZqC%Bh#n[FY1G' );
define( 'LOGGED_IN_SALT',   'QjM>$ VV[bywj76;9Ln@v,*S;f0o+mun9cGrn;(P&F{dVB^o]oIBhn~NRDGWpDj9' );
define( 'NONCE_SALT',       'e@G^ggzkX/sX=~ReskKC<_0xD.t*=$hi2Ci{l1~?6^vI<{TO=H,n[S^>dS6jU5;U' );

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
