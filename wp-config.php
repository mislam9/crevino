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
define( 'DB_NAME', 'bdodeskc_wp62' );

/** MySQL database username */
define( 'DB_USER', 'bdodeskc_wp62' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lSQ[520@pg' );

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
define( 'AUTH_KEY',         '9u35fzbxjozbukrynn1qbestgsxzdg1qggvgb0z5hhvkousmkp1rs827qho2q1ns' );
define( 'SECURE_AUTH_KEY',  'v3lubptguur0jl9syf9e9e5dj6yzlhgj2hsd1jdtw9jyd9ngpapuizfqrtpc53te' );
define( 'LOGGED_IN_KEY',    'zlwkmfu4bo9uil5egyuqgwnrsphkoubu7deuelh0xledr8isddg4jw0bud9ulir5' );
define( 'NONCE_KEY',        '2cdlnjqevatloxykxpowhgzqqbxrvgjgiujn7wfqbwzpfeigckw68h4rwqxseega' );
define( 'AUTH_SALT',        'no6xezsm4bhxk5n3qzgn1qntg4qrjxrthrbewrhqqxd1qizufxwg4elkp2qgfzlp' );
define( 'SECURE_AUTH_SALT', '0nut0wft35roqxva5o1kk0u4bffweepcymp2tlgdzqwhbzgly00qxwxdvjnl93e1' );
define( 'LOGGED_IN_SALT',   'qkpf4uwgzpjsoeeu5ufiuuhawrsod7sijlhk6nzcwy4bjsx8upftj3qgkjqtxivb' );
define( 'NONCE_SALT',       'zjnwnvyscdksq5ihcabht5nojp8htskscswozs2rktobajil5744g3tk0rlcfdjh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpr5_';

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
