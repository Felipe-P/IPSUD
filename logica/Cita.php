<?php
require 'persistencia/CitaDAO.php';
require_once 'persistencia/Conexion.php';

class Cita{

    private $id;
    private $fecha;
    private $hora;
    private $citaDAO;
    private $conexion;

    function getId(){
        return $this->id;
    }

    function getFecha(){
        return $this->fecha;
    }

    function getHora(){
        return $this->hora;
    }

    function Cita($id = "", $fecha = "", $hora=""){
        $this -> id = $id;
        $this -> fecha = $fecha;
        $this -> hora = $hora;
        $this -> conexion = new Conexion();
        $this -> consultorioDAO = new CitaDAO($id, $fecha, $hora);
    }
}
