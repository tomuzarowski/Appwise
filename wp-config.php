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
define( 'DB_NAME', 'appwise' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>K@.S,v7M-*{:Fw^~1 BC3<-I2,1.BD0@t`pL%+eJ:G(v74ddG(~Q{{ylP}+|sS:' );
define( 'SECURE_AUTH_KEY',  '&670)rO9%A!hUq+7G8<Nc*_P-mBa}-1y|X.=2=ELm8Q8,mAwa6DF)3Z/uL..%RM~' );
define( 'LOGGED_IN_KEY',    '=qA}3}n}^^iN/a&>v7y<L(w%PHZ#%}w5{a[LE1pf4L/Zu4eCGDu_=sR<6=[f}CCv' );
define( 'NONCE_KEY',        '=9Rvc]JZXkRtM&PTS=o[BW$o)Ig,sZ<*[:lC8~$Nb;bP{Xl`qLtx<>zDa qrh3B@' );
define( 'AUTH_SALT',        'X.T]SMXzDnw840q(g{DjXN.E`I=+3K%Qs(r4w%bmG<@G;8h.GyKeR&=JlVDp,x.2' );
define( 'SECURE_AUTH_SALT', '6eh{%Q#YY+Q4*NC$#7Rg8{sxZ?+BrkG#_uOR8dt%<ZDE7u2.q4.&3+XLtIWC|1n%' );
define( 'LOGGED_IN_SALT',   'GsN k9<RIGH Qw9bZ_-x8aQ%L]!;[bFeRN%4|,=IjqNarYEHJ6oaS`j[eI(vi?+:' );
define( 'NONCE_SALT',       'qZzo%gSHe#@3Ti,{((!5:2p,ga|X-# A(]2RP,pZR<Qiv%|LrDjL{SC)i_sTxq`i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aw_';

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
define( 'WP_POST_REVISIONS', 18 );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_EDIT', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
