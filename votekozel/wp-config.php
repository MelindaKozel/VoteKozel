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
define('DB_NAME', 'melindm1_ss_dbname13d');

/** MySQL database username */
define('DB_USER', 'melindm1_ss_d13d');

/** MySQL database password */
define('DB_PASSWORD', 'CuAciFFscYC8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'zg(|Yv-E&O>n<+iZ=_P;|X&X$Epok<|SUTXSdF}R{&(Z[^inlOz)XT|-@+//KnxdcubrB(||svQF%f|QspB[zvJVM|WuX(=[dGkQs?x$(YnUVXQK<ej?pg<[GqFsyGBG');
define('SECURE_AUTH_KEY', 'p+UNngc<_ltPGBiJ(KcQ(y_Y%EuMcPs({D<[jmxmax<gVSWgMI<WP=AkLMiDWr?KsANKXHREU^;yOab@RDZKaJWHwtBB%|zwx*ZGTGIBquHG=H$XB+bdS}^{E&jJJnOn');
define('LOGGED_IN_KEY', '%<dD{$BZv?xk>rB?o<Qnb|YaK+wndZCf]vRjjdEHn+{c]B<zu|-%YUFDR{NM<_dRAielvBOtcX_vi|*FwdR;^QLsxd/}aC/-l+gp$-Zc?Hr/T&*qlSiHla}(v^])WM_O');
define('NONCE_KEY', '*s_uO;il^BH%d>)Y{GE&=;ma[Ui?sV+HI&>o]+;gh]gc=Sv@xwf+jA$L[IXf-/UQxI_+VE*+y}XU?&UV|]a%l^ljn!hauNxH+G(o?Kbf*HXrefQWLv){GTe<{y}$bbC_');
define('AUTH_SALT', '=/>I<llnXVySnwW^VmD^;=AsX}=nKotBgT*!/lqCvHVM{FJUOJCxtDJk_TwLiSuH|UdBnllu%p<CokbfqrKkUrtVBP<?S$/[N)NzjdY^IaB=!{g$^}k>?cDe_JS+c/Sj');
define('SECURE_AUTH_SALT', 'S;}+U]n@=Pow@c;){b$t]|tm<>BZnqd-TaPvS!cU_ZfX/H]M)icSwYG&GH!wdlkZmtE{bG$*qaKfY+h+l*&=E+Wmbnl&&eOo&esOsnL*v?QLHf@dydB;DKJ?zqdB]rx=');
define('LOGGED_IN_SALT', '$H]|[ntovP<afyVJ!GFLfhLXK(C^j=q!c<nzYcPKc[[%sFeAX*=Z)|mUb*A{;daAR%$pk&Zly{gA$}Y{?w@sA$hyih*lwisUM&LqlxBb&A&XareIRLWc$BMdKZ}m|ng}');
define('NONCE_SALT', 'LK&bLF;TOq_O_-UfClWs+MYGI}Vc-=!@cTOGimt@)WaD-(!ZE^iSkrr-mzUT%cOJFZ$;!Jhkjh[sPvYiB_M-^eveQhurwHlXqRPCLq^tBc;v_Y+b!tS!}{oi}ODZy{vw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_oftf_';

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
