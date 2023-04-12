<?php
// Load Config
require_once 'config/config.php';

// Load Core Libraries
//require_once 'lib/Core.php';
//require_once 'lib/Controller.php';
//require_once 'lib/Db.php';

// Autoload Core Libraries
spl_autoload_register(function($className) {
    require_once 'lib/' . $className . '.php';
});