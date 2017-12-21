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

if (file_exists(dirname(__file__) .'/local.php')) {
    // local
    /** The name of the database for WordPress */
    define( 'DB_NAME', 'local' );

    /** MySQL database username */
    define( 'DB_USER', 'root' );

    /** MySQL database password */
    define( 'DB_PASSWORD', 'root' );

    /** MySQL hostname */
    define( 'DB_HOST', 'localhost' );

} else {
    //live
    /** The name of the database for WordPress */
    define( 'DB_NAME', 'gregor21_universitydata' );

    /** MySQL database username */
    define( 'DB_USER', 'gregor21_admin' );

    /** MySQL database password */
    define( 'DB_PASSWORD', 'Prov2309' );

    /** MySQL hostname */
    define( 'DB_HOST', 'localhost' );
}

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
define('AUTH_KEY',         'cJgGxWJX+cEduPqNkTZJXgCIlTNI3CT5IfBicR0DvwuFO+i7zSu3LgL0mdmQb1Vs442umPP8EfFfEqTtZ51Xzg==');
define('SECURE_AUTH_KEY',  'HqsgcjJLW4o6fwW8eVRTm6OybyGXcj7x+9/ynWRmR0uCvpnkqg1saRljuf6pdzOjMQAoBZeadoojpNbeoWKTOw==');
define('LOGGED_IN_KEY',    'LynMW+XRBK3GwN45JKC5yUgTzm7KQHlqY4W2a6rewoUI6nrSH1691rO3ePHGt3B/KnyWX0POCGdwu8uvyTOoBQ==');
define('NONCE_KEY',        'h4XEpEX4YF4Rbh+xhrUM1l0FFVJIJxt72bqo8qJo+qnHpM95KeEIiSYgOgMVB32wVKLTCj36iWqhob+XK5Uq+g==');
define('AUTH_SALT',        'cQVVtLajdSjCP9iMNePu+CnUkoDgQYJpOTm0yF6gejn+vCWPwiG3NdcBNbU2HdFqv5ttu4yWFDSbkUVC/QAsNg==');
define('SECURE_AUTH_SALT', '+iq8Ir3ybeJSgLHyfH4CNAdBxoYfe5uhiOrTKMKwgmx2ApfPFVErVx5jI0fwSLBhTNU1Tghi7nxv3eIewwUWMA==');
define('LOGGED_IN_SALT',   'SAylzQk7jkpdc3Wo7NDJLWN5Q+LECufcXl8GsEJVXxxh04cfcjaXrTICeVMC373oArHWlw1r66fN/CYXO1WJFw==');
define('NONCE_SALT',       'Cj7+gMg+OC060F5jFTi0WXvGLVmgi6+QhA4F2A+eCxdP91E7G27rDoU2kPEP/ROcPhoDD1Obut/HLp/u3qcgBA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
