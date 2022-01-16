<?php

class imagenesModel {
    
    public $user_id;
    public $db_connection;
    
    public function __construct($user_id, $_db) {
        $this->user_id = $user_id;
        $this->db_connection = $_db;
    }

    public function getCurrentUserImagenes(){
        $db = $this->db_connection;
        $sql_query = "SELECT img_id, title, file_name FROM imagenes.imagenes WHERE user_id =$this->user_id;";
        $result_query = $db->query($sql_query);
        $imagenes = $result_query->fetch_all(MYSQLI_ASSOC); 
        return $imagenes;
    }
    
    public function getImageFileById($img_id) {
        $db = $this->db_connection;
        $sql_query = "SELECT file_name FROM imagenes.imagenes WHERE user_id =$this->user_id AND img_id =$img_id;";
        $result_query = $db->query($sql_query);
        $image = $result_query->fetch_row();
        return $image[0];
    }
    
    public function deleteImagenById($img_id){
        $db = $this->db_connection;
        $sql_query = "DELETE FROM imagenes WHERE img_id = $img_id;";
        $result_query = $db->query($sql_query);
        return $result_query;
    }
    
}