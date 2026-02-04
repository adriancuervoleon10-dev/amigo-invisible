<?php
require_once __DIR__ . '/Config.php';
$config = Config::singleton();

$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// 🔄 LOCAL vs RAILWAY AUTOMÁTICO
if (getenv('RAILWAY_ENVIRONMENT') || $_SERVER['HTTP_HOST'] !== 'localhost') {
    // RAILWAY (nube)
    $config->set('dbhost', 'trolley.proxy.rlwy.net');
    $config->set('dbname', 'amigo_invisible');
    $config->set('dbuser', 'root');
    $config->set('dbpass', 'bZlhcgxycIPAMWyGwswxartyuXgegCQr');
} else {
    // XAMPP LOCAL
    $config->set('dbhost', 'localhost');
    $config->set('dbname', 'amigo_invisible');
    $config->set('dbpass', '');
}
$config->set('dbuser', 'root');
?>
