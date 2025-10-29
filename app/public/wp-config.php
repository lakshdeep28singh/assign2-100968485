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
define( 'AUTH_KEY',          '+5s]` l O4,L/vzT82La^sqeO1_f~lhI0CJdfhq8st*miK&$Vpv!@Hp4G5Xg CnM' );
define( 'SECURE_AUTH_KEY',   'sC}EwvYc4#.gy9#/{i5&B2I*1d5cg.HTIq]]fisAt0iBGDRYqSyb{duxQk}0t$t|' );
define( 'LOGGED_IN_KEY',     'It0:TG%~?/w@XQz^0B/+C$<wxgEn!{cXxThfUq:8r];&@ABD2,ES(z4fG76u8D`t' );
define( 'NONCE_KEY',         'LMy%n|}%f ?^:<vJF,/f5 RD6NiiR/zbRB{#Y`NZ*&=;7#ZsX4g{>*FqC:Non&ZH' );
define( 'AUTH_SALT',         '4AoIintXv,10u]OX6L~/J*{QgQ|tD]K$APk^ve!Gl4^Jt<jbvgu,8`9}zl@vLEf~' );
define( 'SECURE_AUTH_SALT',  '73LBjtE]kwzaW~F>?gwX)i!iHxQKt~S5jfxZC]&uz(+^I}Krm**~[I94tB%Aj{r%' );
define( 'LOGGED_IN_SALT',    '/[UG|SFrJS`v+ ne2^GWW3INK-V&!e[JVQf+i><GAo~TAB44Zw9lN].}S?)cW;*;' );
define( 'NONCE_SALT',        '2g7[7Hq7:/$8B3MV~LWkMvd-0:wfP&,~;/MMIi-$=uq/aP_GRO6}{g}t<+x%|b)i' );
define( 'WP_CACHE_KEY_SALT', '-1C#v0+t>N^ZPJ@6fDlg{LL@!l5D38]>g$yvyY/F)m<@fiK_Y5TZ*4Q526#[uxjf' );


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
