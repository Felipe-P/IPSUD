<?php
require 'persistencia/ConsultorioDAO.php';
require_once 'persistencia/Conexion.php';

class Consultorio{
    
    private $id;
    private $nombre;
    private $consultorioDAO;
    private $conexion;
    
    function getId(){
        return $this -> id;
    }
    
    function getNombre(){
        return $this -> nombre;
    }
    
    function Consultorio($id="", $nombre=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> conexion = new Conexion();
        $this -> consultorioDAO = new ConsultorioDAO($id, $nombre);
    }
}