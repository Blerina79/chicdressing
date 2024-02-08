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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '.Vy8a#KJFgA2$Y|:8zheQCGbihvrBE_OgZM))vafh*![Xq>]|Q($$c@2@9vN[.%$' );
define( 'SECURE_AUTH_KEY',   'gp[WNE.Y0e1DXhrB:@&n&ej}UM@Gr]{fOl%;Xp&L>;oS~/-P]4K)A6v1|g0;5m+M' );
define( 'LOGGED_IN_KEY',     'Nv~Nn0n8e`7xQ:&&jgBe.Z!UN-=G)VIX$F[Ba(D69ZVGVwo`y)uN;3ZJMIA>8R17' );
define( 'NONCE_KEY',         'bE,6z&3kYFn-  ?N-Y)bvd4%zl2^BYuWXL^kn|:.KR$^AoG/?#547K7kiPSGITCd' );
define( 'AUTH_SALT',         '<TqlwphX~Ex^K|pj< c(5<2|*hSA}^::</K|vi$K~qRf[[]40}E34yIqY,r:|WaM' );
define( 'SECURE_AUTH_SALT',  'X&Q7%&qGeWgerD@.}|]$`g)=9o8tAEf=aVG/I-G4QHA6y>R`T F/5flot#Sc[r8d' );
define( 'LOGGED_IN_SALT',    '%wgC}E;5f<!  h;n40pKO11vG7zyf#}?zL2ts6jnn:d.Qgr;8pVrCl0Gq[b M,Be' );
define( 'NONCE_SALT',        '0{r~^W4[l^yC^&.gdjCN+:h8|</b_+K~:vh)C+}UX[F^ydn5`[d~pbeS#:a|[M0F' );
define( 'WP_CACHE_KEY_SALT', ':;bkoX&Rf)U+H`eRpk0/0?ZacT](y,heFQC&rp,Z%tn^TA`L{?Pyc|mRdEDc=m`E' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
