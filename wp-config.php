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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learnwordpressphpcode' );

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
define( 'AUTH_KEY',         'IFD65=|mc_,]r`zN=_6> .;_-0w15IQfg7T?L7tBn@cgwF.MAXT~G}$A,w?@5Ct{' );
define( 'SECURE_AUTH_KEY',  'pom;9eRQDQbrUaBWSA/<DLQw,(U*R.7[&aZgVBh*Iw G1{SROn0No_%Zx5q{DDlZ' );
define( 'LOGGED_IN_KEY',    '*aEY(JS+m6Ly7vz4$ }Y8[5BBGD~:!*E&XH%eDSSL+t9]OJ:vTae{I]H:tGv%Ati' );
define( 'NONCE_KEY',        'a$B)k%4lc2Pyyp4TgeC0}*S0a4ug.(wRP;&-DtWqU_e4H=KWUXo =F6t*#poqyO{' );
define( 'AUTH_SALT',        'Y/GrW@{m7s0-Qu`Na+jAxHo:LIYN|$!P@Pe@7jWonMjW4iak;xyMVmBue(Wj3M_f' );
define( 'SECURE_AUTH_SALT', '>U)4z+P|In{{K-Yk%HnW+Ko+i<Vp&x-$}r/EHXZJGEf+^$|~};&Ke*$LfzZU)+{&' );
define( 'LOGGED_IN_SALT',   'qkQ*s!bDi@S~b1RI%n&w!<TJRQZh!ds;TV,pOa!^YxO+{~RUV<g9#_~xaw).>.-<' );
define( 'NONCE_SALT',       'Y$9B5B5=0c: d)_$=d0G-59M@Ufoct6reHxD_BhP6,EF+4vqb<4f]t=_]#I#g[K!' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
