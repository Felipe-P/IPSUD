<?php

class EspecialidadDAO{
    
    private $id;
    private $nombre;
    private $consultorioDAO;
    private $conexion;
    
    function EspecialidadDAO($id = "", $nombre = ""){
        $this -> id = $id;
        $this -> nombre = $nombre;
    }
}
?>