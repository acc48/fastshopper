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
define( 'DB_NAME', 'fastshopper_db' );

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
define( 'AUTH_KEY',         'x_AO=@2T&n%-A$WvCm7] N/8DM=&V[1qWN@n8|K9.%Vt@vL-}CBTz|}!p-l&[IqL' );
define( 'SECURE_AUTH_KEY',  'u<l-5 kSkXLNy8=8IEff1zB$Yl6(Z+h|6i_(0s+:/gu^T0&E_V,QX+jbGPoO{oOw' );
define( 'LOGGED_IN_KEY',    'uoMhL4z;-`T/xk~C^up#sg AAJU`*>W3esbFQ!!LW`u,^zr/_3+14 %JW_*3Q~> ' );
define( 'NONCE_KEY',        '}Q+~>tYo(lvPox.nitr[lPIT2>@31 T<,0$:PfP[)vgVO#2[9qE2nxasJfm)HDfX' );
define( 'AUTH_SALT',        'm*vjFNSl]-6E1V.W0Vdr=dP45AlzdGL{%Mfy!jwWzNzogFG>H_r|3@nfYLW{tRU_' );
define( 'SECURE_AUTH_SALT', 'GLvO59Lu0z<-)8N4Tuqk)<5`6Xm{6QVxm~*/`&lw~o>K=Lx5kYd{>t v.s%Yz(wD' );
define( 'LOGGED_IN_SALT',   'djMz}TOS9G4X-<3$QzQgB*NpQ Qj+t&t;-TFK!k44PhBB1hwEYqX~sYpG~@UxAz?' );
define( 'NONCE_SALT',       '={l-XZ0y<IKC]jMcwIiLB3oGya)8cFz[Nr#w^G3QGN-9#Rv8X00))KVzknn},@n>' );

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
