<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('WP_HOME', 'http://localhost/CARLOSPA');
define('WP_SITEURL', 'http://localhost/CARLOSPA');
define('DB_NAME', 'CARLOSPARRENOBBDD');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'O44/~K}I*!AsXe@^f,RqKz{qC|D|,L%=UmLqV=BQ1l^=L !_Li1~4X|mM6_YmD&E');
define('SECURE_AUTH_KEY', '}~t#A#.dYS@PnKu!?X1s4=^5sDv]%vCrcqNs=ZV!V;,~}(~/FZf+#x2W#jcO6O+$');
define('LOGGED_IN_KEY', 'DlRc($87LM~,HdFn=LhJ8vOD}z>SJ3T^tM)]xo/=1<1Vc|i=.9;kCKg]>M@#i~)?');
define('NONCE_KEY', 'hmr[#v2<7@.<9bL)V9MU`k vp!<*eMkM+dGbkcSTPIe=?gw;O93;zH^vpORKKwnz');
define('AUTH_SALT', '|2+7;NY_eWPriaQP,*%hCDn;rR+Mw^uZhjlB`uDO,Y(mutAjKLhQs`lno(b0>r]#');
define('SECURE_AUTH_SALT', 't1{kx{I.z;-x(Me7n$c2y+2e+?RL^l55qGUTzNZyTEY>x{d@Ra``#%L0?O`Q,SOH');
define('LOGGED_IN_SALT', '^JxlCgz2D[jQtFSbxvctIiFRFA.l!B;xc~&Ew*q-!qa=8rX9Lzq+]llqhstgqM[R');
define('NONCE_SALT', '&@/=3}|:W.Me@WN&P;k<Gk>,faLbqWxoCKGYV@ksFM*pYo[+yK$}?H9)s 9HoO,}');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if(is_admin()) {
add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
define( 'FS_CHMOD_DIR', 0751 );
}

