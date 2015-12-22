<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	/* Grab db credentials, keys and salts from environment */
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', $_SERVER['RDS_DB_NAME'] );
	define( 'DB_USER', $_SERVER['RDS_USERNAME'] );
	define( 'DB_PASSWORD', $_SERVER['RDS_PASSWORD'] );
	define( 'DB_HOST', $_SERVER['RDS_HOSTNAME'] );
	define( 'DB_PORT', $_SERVER['RDS_PORT'] );
	// ===================
	// Remap site url
	// ===================
	define('WP_HOME', $_SERVER['WP_HOME']);
	define('WP_SITEURL', $_SERVER['WP_SITEURL']);
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         ']eqfdTQ8G&h}0vmRvdje-_w)N4&fzOg7pk%Mt;;hHn])rL0`]v#^SXvZf~d:z^h3');
define('SECURE_AUTH_KEY',  'kcH.$-_//!S%Bip}Y;Em>3}L*BoB/zBa`CIpD.;y<zQq3-oz^SDK~~gbftRbMf6a');
define('LOGGED_IN_KEY',    'B$v>sZ%F.z^YSi@g$L*BJ=TEf8?S?~*[yfCoQ1#9@mOP@!LBN[foV$2)Z5JH-rOW');
define('NONCE_KEY',        'CxwB_G*lkMBL(%(/E|WC||}e^awL8bE*YF(N@cE;|A0yJUU#^@)PUC0x-}<Vr#y|');
define('AUTH_SALT',        'TA+bdzjfvMM(>6xvhwUP+-!-nH7AqDe3&+~XQeq)c+j1.O#sgYW|<VSw-$y>fd+.');
define('SECURE_AUTH_SALT', ',!R^mxG2?0|bb%Er9N=j0T}a-n,535xe=t@u7>Uy?/]Eu40]Ac+ie<XD_LFkGn&)');
define('LOGGED_IN_SALT',   'k|(T_,d{HygZu1_f$7fM=+,hewyYtI4-#qN$a@l2nv!3$Q*!nG#@NpSc&y8dtB}|');
define('NONCE_SALT',       '(w}gDf0`;M`,[M0c_|:%5Va0|&ZR.1g7|K]6tL`HPouAUd]Ja0i|vhKS JvUi;DV');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wpag_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
