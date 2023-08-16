<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");    

    if(isset($_POST['nombre']))      $nombre = $_POST['nombre']; 
    if(isset($_POST['creditos']))    $creditos = $_POST['creditos'];
    if(isset($_POST['fecha']))       $fecha = $_POST['fecha'];
    if(isset($_POST['profesor']))    $profesor = $_POST['profesor'];

    $conexion = new Database;  
    $result = $conexion->CrearMateria($nombre,$creditos.$fecha,$profesor);

    header("Location: ".ROOT."modulos/materias/materias.php?mensaje=".$result);

?>