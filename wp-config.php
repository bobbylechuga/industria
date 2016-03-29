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
define('DB_NAME', 'industria');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'usuarioMain');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'industria');

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
define('AUTH_KEY', '<xvbkf<hO8L3oAdk[JK:=2aB>llnf+i-iZJaUa:+3_ =-_=Bcr<#QsBup;L=yU]!');
define('SECURE_AUTH_KEY', '7o+1Xag75gCZm24Mz%O2E{X_+8u-3WmO`8 5!.m/%eDhYhwz }gSAY},Lw.+~_PT');
define('LOGGED_IN_KEY', 'C5:WY;2rg9XD6pkOc Ob*e/z+Y[$7]K^X}nNt#jB6tHsg{fd|4I^4TYr_gF3JP5|');
define('NONCE_KEY', 'q-4h]U^%m-oNaHHY0k}dIk=x;2/l|GqxQ$,x3h*~WHx* +vF:+KR2B+GklFM=Xgr');
define('AUTH_SALT', ' !y$+iSgJd^WY+R{=C`oBFQ Zf8i(I2O82~PK-f2$a]a`J+E=K=W{5KOxX4:K$[c');
define('SECURE_AUTH_SALT', '*D@$xn7;4{>a#T <Cd0_D!*15@ w}q*Ci}qJhAOj(K2)G*%H$0PZInsbxd+ TNS%');
define('LOGGED_IN_SALT', 'wd~6g4wY+oe~dgQsIzvm^zCL<Ml$e@s{WxTd!;`Al+LaL@Y>+x$d;Ut?pMlJX1-!');
define('NONCE_SALT', '&8y_$~o>FNFh0jEhY( ^^k-FCJL4{pI[<@,sHR6g$Y.h7|Sg*Q!$%(|L&O1s1Jr!');

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

