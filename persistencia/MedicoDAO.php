<?php

class MedicoDAO {
    
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $tarjetaP;
    
    function MedicoDAO($id = "", $nombre = "", $apellido = "", $correo = "", $clave = "", $tarjetaP = ""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> tarjetaP = $tarjetaP;
    }
}
?>