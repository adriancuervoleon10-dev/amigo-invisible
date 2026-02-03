<?php
// Script para configurar mi aplicación web
// ← AGREGAR ESTA LÍNEA AL INICIO:
require_once __DIR__ . '/Config.php';  // ← ¡ESTO ES TODO!

// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
$config->set('dbhost', 'localhost');  // Ya lo cambiaste ✅
$config->set('dbname', 'amigo_invisible');
$config->set('dbuser', 'root');
$config->set('dbpass', '');
?>
