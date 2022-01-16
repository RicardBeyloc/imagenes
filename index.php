<?php

require_once 'starter.php';

require_once MODELS_PATH . 'imagenesModel.php';

$_imagenesModel = new imagenesModel(1, $_db);
$imagenes = $_imagenesModel->getCurrentUserImagenes();

include ROOT . 'views' . DS . 'layout' . DS . 'default' . DS . 'head.php';
include ROOT . 'views' . DS . 'layout' . DS . 'default' . DS . 'header.php';

?>

    <body> 
        
<?php include VIEWS_PATH . 'index' . DS .'imagesList.phtml'; ?>
<?php include VIEWS_PATH . 'layout' . DS . 'default' . DS . 'footerSection.php'; ?>
<?php include VIEWS_PATH . 'layout' . DS . 'default' . DS . 'footerScripts.php'; ?>

    </body>
</html>