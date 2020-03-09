<?php

class CitaDAO {
    
    private $id;
    private $fecha;
    private $hora;
    private $citaDAO;
    private $conexion;
    
    function CitaDAO($id = "", $fecha = "", $hora = ""){
        $this -> id = $id;
        $this -> fecha = $fecha;
        $this -> hora = $hora;
    }
}

?>