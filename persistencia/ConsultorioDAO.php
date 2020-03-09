<?php

class ConsultorioDAO{
    
    private $id;
    private $nombre;
    private $consultorioDAO;
    private $conexion;
    
    function ConsultorioDAO($id = "", $nombre = ""){
        $this -> id = $id;
        $this -> nombre = $nombre;
    }
}
?>