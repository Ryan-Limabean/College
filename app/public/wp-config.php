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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GowxQlamZ82D2tBUlRDUuKKrR6/Q/Y8CswATaxbUdR9eofv/yXpZib9zajG8IRx8C+Fgrwd3AVmp86ZiGC1GyQ==');
define('SECURE_AUTH_KEY',  'hHKj3WbimYDRum7nlybLI7knGaoZ2pdT1oKkUXzsV7WwZBSzf5tNA7BHq6XhF3eIa/Yc11XRZJ09pUATNgq47Q==');
define('LOGGED_IN_KEY',    'ckAXQwRiWTopH+eg3xgxo8EP+cHkd7hwUPjqw586+vL1biF/FeBJMAjJyCu4gp5htUAG1pyLjwwxWaFtPdSEzg==');
define('NONCE_KEY',        'abJTGTolH5KThnGvAkUO7uPXiGZ61j9sFeD87eYMF/AdBY3watLiM60T0srCYcy2C1r8jEHiqXMXEQ5yYVC28g==');
define('AUTH_SALT',        'XDAXUNF6DqG4/0QH30dr3uO5ENhMijG4sP+P6HYCpc3LnA0epfjfRt1bhp8CbtpfVfQXzmnzl4Dei91l1fbctw==');
define('SECURE_AUTH_SALT', 'DCdAiKe+cAuSQPXJk0gz+MU8HwwAhEi8e7K725NciBrNobXeylRKvcoQKfYSmEG8vGlOsDvdDo8eRMNhKvzJBA==');
define('LOGGED_IN_SALT',   'O9+7taAWHdcqBJrrK2WsHNRf8bryqN3r9j/Q5jjktqpX+HBNa0izDcqNaKRP+PBnXGO0pJsE3ExkYlx1MUlYHg==');
define('NONCE_SALT',       'kqu3SVosuGIq4MAowdjxUMufrNx89LmEvj2nyHHIzUCzNsBoRdwYbA/HFtDb9B4InmUU0axzsVsGv/2iKYP5xQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
