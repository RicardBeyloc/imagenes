<?php

define('MODELS_PATH', ROOT . 'models' . DS);
define('VIEWS_PATH', ROOT . 'views' . DS);
define('CONTROLLERS_PATH', ROOT . 'controllers' . DS);

require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Database.php';
$_db = new Database();


