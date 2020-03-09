<?php
require 'persistencia/EspecialidadDAO.php';
require_once 'persistencia/Conexion.php';

class Especialidad{
    
    private $id;
    private $nombre;
    private $especialidadDAO;
    private $conexion;
    
    function getId(){
        return $this -> id;
    }
    
    function getNombre(){
        return $this -> nombre;
    }
    
    function Especialidad($id="", $nombre=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> conexion = new Conexion();
        $this -> especialidadDAO = new EspecialidadDAO($id, $nombre);
    }
}
