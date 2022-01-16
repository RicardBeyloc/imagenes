<?php

require_once '../starter.php';

require APP_PATH . 'launcher.php';
require_once MODELS_PATH . 'imagenesModel.php';

$_imagenesModel = new imagenesModel(1, $_db);

$id = $_GET['img_id'];

$fileName = $_imagenesModel->getImageFileById($id);
$imagePath = ROOT . 'public/img/1/' . $fileName;
$msg = "";

if ($_imagenesModel->deleteImagenById($id)) {     
    if (file_exists($imagePath)){
        if (unlink($imagePath)) {   
            $msg = "Se ha podido eliminar el registro y el archivo.";
        } else {
            $msg = "No se ha podido eliminar el archivo.";    
        }   
    } else {
        $msg = "Se ha podido eliminar el registro pero el archivo no existe.";
    }
} else {
        $msg = "No se ha podido eliminar el registro.";    
}  

header('Location: http://localhost/imagenes');