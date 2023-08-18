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

// Sendgrid settings - Read in the sendgrid auth from the config //
define('SENDGRID_USERNAME', $_ENV["SENDGRID_USERNAME"]);
define('SENDGRID_PASSWORD', $_ENV["SENDGRID_PASSWORD"]); 
  
// S3 Config Info - read the S3 Access Keys from the config //
define( 'AWS_ACCESS_KEY_ID', $_ENV["AWS_ACCESS_KEY_ID"]);
define( 'AWS_SECRET_ACCESS_KEY', $_ENV["AWS_SECRET_ACCESS_KEY"]);  

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ')}#+*xsatb*9l@[8=YZW6J-t%TT2D?vb:BX-*gaU,Mg>$sOh1VS=*Tr>L?lCN^w,');
define('SECURE_AUTH_KEY',  '`P#:F)uQsfVY2OXPZ.OCoGSkY3N|?^o[+NWBFa!0{e~R-o &WAOgAMS[:v kLP48');
define('LOGGED_IN_KEY',    '9DQ?]~KnB<Vi]4>E:8(N_pP2,S%.e|qWe6DFUei&&;l}7R-QG#W?)#3WEn/|Xbs{');
define('NONCE_KEY',        '8<|yme@_(LfKP_@fGd=q]FiI-c!~f 1z3]X#|4L-F8B??hI8s+[tL01Iy-l+H l_');
define('AUTH_SALT',        '`G Q4ZCGKx[G0*97m>6!N:bkc>2N-uP+,:]bF}PqJ#K.B4PCo1z}&KiV!3F-YG)x');
define('SECURE_AUTH_SALT', '<@R@rt!.XxEX%gbP/i|0L+qz8>eE^[a1vU?2L- rZ/=VGrD|3JX*(f/rmIXO_uBe');
define('LOGGED_IN_SALT',   'cX2%xPm70QCL-e/)~O||ide-%tc*`-Ct(TVq(`E?BeU9S+a9Z|+.)B|&k0`fx.:^');
define('NONCE_SALT',       'Hky}gka)Q0a2A+|gW:k&+P-=L>(KYD4IDf_zIHp2;g.fCdxrmp%jm@}^4bW)t{|!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
