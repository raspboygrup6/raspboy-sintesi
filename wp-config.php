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
define('DB_NAME', 'raspboy_wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'raspboy');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'admin');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'http://zpanel.copernic.cat');

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
define('AUTH_KEY', '=x_Yy]M={1G$fT25xg/l!jqj)K)Zf_0ISD-2VNtZIVI.c<0T*c0#W(Km%OGa~@`W');
define('SECURE_AUTH_KEY', '4/9Q`:JQ~;855tZB]?OGyEdYl98hRz]bN[k7y;Fr#Xeb:~f$=bb,qtn2kViir;g6');
define('LOGGED_IN_KEY', '#B:=VuY|c%wL(!ZchbVE)+KJEZM{obA4%U4h@oLF|Vf#54]}k%a&|2;O^{q7$Bzt');
define('NONCE_KEY', 'Az2O@#W#DWj`hK?[jXS}zvZ-jHW|R*#Y63WX;j-|nNI2@RVV<_53oGwf6OGq*. F');
define('AUTH_SALT', '-wVWF*Ue6#KM*5d>eu~k3=R=,mU]d:FM9}QaxJ)l2v>PU)&8}vNO=.,QAs%ZygZ)');
define('SECURE_AUTH_SALT', 'q!9+sy.`-e+f1wk4+mcthw53`xn;-RD(?.DT(%yrRs;czU6:-^:H:E9b0:;HOtlj');
define('LOGGED_IN_SALT', 'Ki;!8#Kk<A7;stzJ@(Rmd@)wr(iFt1ceG=M3U68{f&UevBitXSrwnS$OUUSHcekC');
define('NONCE_SALT', 'a,yR +%bdKOg~gE3EuCIYkP?/Rw|yzE;`]qiAo)e{8R&S]K&LRb6G_hI,7+j|d^n');

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

