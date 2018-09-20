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
define('AUTH_KEY',         'ief75zdpg4Bg13b/LPaygT/9ukyBkvDkhRJfDUFDYjXeUkaheiaT9NGu7BnoM2ry/KoAuPXgGjxFfmR6HJdGMw==');
define('SECURE_AUTH_KEY',  'Qo8/zj2Ii1SxtIKv8L7Rs0yWu9Omovsh/a8vKPXnceZCnQnGxj3ZoQNfje70TZLtg/5zj1jE1fYoNWyh4YasIA==');
define('LOGGED_IN_KEY',    'dFfjxe16oIpilxO1P+kUE556oiNRIkuwWs2dBBHQjaTO2o7gNt3aCPDYua+pG7GbPVDZgEdVGTnYW1zehnG4MA==');
define('NONCE_KEY',        'va6PviS98kxQtmi1nT9QNLDPRSQa8aG9wLZQrJAKu+OwlYIjYshLHSA/HoV4yOWsojFDNaeVsZm6xfLbtlAnvA==');
define('AUTH_SALT',        'LfK4oytibf09BM8gemSWxsxlz51j2Nu5DC56Pw0M3yzTWUAYRMqmqUCDSaIFxNaK24uC2x0dSdwQJgRctxoaOA==');
define('SECURE_AUTH_SALT', 'uccH6DzwLZjRCDNFIk8+iYHOQzV8q+yhRYl2hkHH89tSR99zZcck0+t3lx8WYKAp+vxKMOu7b/Ibm+DLv4LbcA==');
define('LOGGED_IN_SALT',   'MXHOyLTOLX358RErDBWzCKVO0c3FEkST8luavbeC++ZXKc8K5EA4Tku9djr/+jELb0oll3L78Nb70+b5WCv5WQ==');
define('NONCE_SALT',       '86yG2GiFsEC1IGvRRy0+6P0sx3rOjx7CU8CewUn0Oe/d7u3B2o7owy0s5piA0acCcu1MlyGjsEwlbmakU4Jt6Q==');

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
