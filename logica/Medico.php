<?php
require 'persistencia/MedicoDAO.php';
require_once 'persistencia/Conexion.php';

class Medico extends Persona {
    
    private $tarjetaP;
    private $medicoDAO;
    private $conexion;
    
    function getTarjetaP(){
        return $this -> tarjetaP;
    }
    
    function Medico($id="", $nombre="", $apellido="", $correo="", $clave="", $tarjetaP=""){
        $this -> Persona($id, $nombre, $apellido, $correo, $clave);
        $this -> tarjetaP = $tarjetaP;
        $this -> conexion = new Conexion();
        $this -> medicoDAO = new MedicoDAO($id, $nombre, $apellido, $correo, $clave, $tarjetaP);
    }
}
    