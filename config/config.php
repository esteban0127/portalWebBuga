<?php

/**
 * Dirección URL del proyecto
 */
define('URL', 'http://localhost/portalWebBuga/web/');

/**
 * Dirección física del proyecto en el servidor
 */
define('DIR', 'D:/Pana/xampp/htdocs/portalWebBuga/');

define("DB_HOST", "localhost");
define("DRIVER", "mysql");
define("DB_NAME", "");
define("DB_USUARIO", "root");
define("DB_PASSWORD", "");
define("DB_PORT", 3306);

define("DSN", DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT);

define("MODULO_DEFAULT", "inicio");
define("ACCION_DEFAULT", "indexController");
