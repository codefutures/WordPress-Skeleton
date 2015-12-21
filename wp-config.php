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
	define( 'DB_NAME', $_SERVER['DB_NAME'] );
	define( 'DB_USER', $_SERVER['DB_USER'] );
	define( 'DB_PASSWORD', $_SERVER['DB_PASSWORD'] );
	define( 'DB_HOST', $_SERVER['DB_HOST'] );
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
define('AUTH_KEY',         'p$64b^-t|1o,$TEN^q=R:e|=:Wp{<FBzE(IMfeb8V(Vt%/]Dn+4MK[946={/}4[}');
define('SECURE_AUTH_KEY',  'Nl,gKQ>zC;Hg?{Dxp}~C5CYi}{lbMEBFjZ9(G&D7K[|6AB)fNHf@<Ut=i@&s{@wx');
define('LOGGED_IN_KEY',    'bxBhfttme15]9#,T)^su~k^$s,k-=De)aTR-C`NVJ<?&iFx?l-LJNR?|v+NVfWl)');
define('NONCE_KEY',        '[04%TsN#=^}&)~SM?Bfj3}|{gn8gr/Y~jv4Gz3;Bu?Qfz#`EU,bFI>#wW(X7G+>o');
define('AUTH_SALT',        '@I-7S/9%Cq!./HP-<w +ImMq+B@wT&xIdP`3)IOOet(wXJ=X?~9E}RL1Vw{2 AD6');
define('SECURE_AUTH_SALT', 'V;}3`9HuN~}`fX%@j_*;F&J6.^d-+lGM8J:Lkepsw:8KT +w(N.K)rWumOW6hI@J');
define('LOGGED_IN_SALT',   '&.7}.-#Hx.zJ@(1{|@~`nmBy;lSCxfM!44)at[:yO3V1sB65n6fF;C0;p4p^Vw<T');
define('NONCE_SALT',       'y-*~0-CLJLJOrs]0p,6.xW7t)C>Bftdi|GNjysPJMGo22a#Pp6&ZwaG:~uL;M7n;');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

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
