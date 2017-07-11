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
define('DB_NAME', 'trends');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z3p%cJ,hV`J.tOY{u{+$JF`}W+*y~haA4QURGQ^.2+F}*D*,TdGRZ]*6Z0l3yC&3');
define('SECURE_AUTH_KEY',  ',DC{/H8-5%dxKP1;5hl9SHCx4qe1!q)-J[}7bU`DT6f5BI:&(PRg~@ab0f]PCzZv');
define('LOGGED_IN_KEY',    '*Lp!y8#>&CT]_yNLmZcA9Ve>8Pfl%N>l9 J_G{qfb91$XU*&O^:F1Q&z[&J+86>P');
define('NONCE_KEY',        'IQS7%wFn+R}#(}4wIt?]Jf*A#0`:@f$@9kU7_:Kq{jN+*#>W1fE.gb<I%d?0Dt%l');
define('AUTH_SALT',        'ghi*j_I;vH}63Zzr!:|LBSEU%=@UsUfd$gz:_p=,$A%U2?U$8kH`L]CEAgA9xhx{');
define('SECURE_AUTH_SALT', 'P8gm;>^46M0G<J$]|E*h&JY>j/*0As0E*7I}l_/ho(J9aLPjl@Y?7<Orf` i7J?h');
define('LOGGED_IN_SALT',   '+ZRq3BVWYAz.4j_zW*uqkDxfm4,%^[9}c:Y[h0]<wd{0 #I+.1~.c:4(|IUcVz.C');
define('NONCE_SALT',       'q>ZC]?nmDQd]*~L:0SL_xYRK{7BN,;$EoU`@C ;Bn.L:QT+zJZ59[]OtWS)%S0V0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
