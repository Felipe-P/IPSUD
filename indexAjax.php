
<?php
require 'logica/Persona.php';
require 'logica/Administrador.php';
require 'logica/Paciente.php';
require 'logica/Medico.php';
require 'logica/Especialidad.php';
require 'logica/Consultorio.php';
require 'logica/Cita.php';

$pid = base64_decode($_GET["pid"]);
include $pid;
?>