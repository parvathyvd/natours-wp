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
define('DB_NAME', 'mytheme_db');

/** MySQL database username */
define('DB_USER', 'parvathyvd1');

/** MySQL database password */
define('DB_PASSWORD', 'ganapathy');

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
define('AUTH_KEY',         'QY+F(=M{&eQ8QZ>|}~QxgwY`QWz/STSQOMu/1/ywsejK@,v|Kg1v/wmg|olSdeQc');
define('SECURE_AUTH_KEY',  'Imkglw8:rBPE[nGM1N5YVJ`<9PSR/Z$2[5yaS)Z8tIkg&1E5Pqnm.;xC7$qnl}@]');
define('LOGGED_IN_KEY',    'cOlhkap2* {%SI!5MpG--]uYbg@4kWcu0x[bg4@8(qMiY--BBz3nS$]dw[hzt]vF');
define('NONCE_KEY',        '2MJJ#2!>.uL_IP)megBV.g{1/x; {PU*Z1J%6_6)hO9< Xj/j$6p>g^p1vBp]Hqy');
define('AUTH_SALT',        'qZ,1b2MoPpJZ$Vm]4h<Fb_;;,wZ)Jj&EMShI>7E|:&:&>Bv9MG;heyVGg$)3/y(<');
define('SECURE_AUTH_SALT', '*s@iRY>:&2iuQ4f[9&mq$j;2+ePE!DZ`8GUN/FZ_rK`2oW)q8sfK:)T$b],Z6?y4');
define('LOGGED_IN_SALT',   'ouS0,TvC1e85v@`a0@yu`RaR||w%.#L^z+DReeJUa}rC=s0RBvWn0}4Bk{G&sJ)=');
define('NONCE_SALT',       'R$d9`}(on73eaYjWY9eX,hYNl|q)3O<fS?VS8h:S|]o~RWL_as%{iWTX,wk,7=e=');

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
