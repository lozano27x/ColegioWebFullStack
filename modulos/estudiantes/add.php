<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");  
  
    if(isset($_POST['identificacion'])) $identificacion = $_POST['identificacion']; 
    if(isset($_POST['nombres']))        $nombres = $_POST['nombres']; 
    if(isset($_POST['apellidos']))      $apellidos = $_POST['apellidos']; 
    if(isset($_POST['email']))          $email = $_POST['email']; 
    if(isset($_POST['telefono']))       $telefono = $_POST['telefono']; 
    if(isset($_POST['pais']))           $pais = $_POST['pais'];
    if(isset($_POST['ciudad']))         $ciudad = $_POST['ciudad'];
    if(isset($_POST['grado']))          $grado = $_POST['grado'];

    $conexion = new Database;  
    $result = $conexion->CrearEstudiante($identificacion,$nombres,$apellidos,$email,$telefono,$pais,$ciudad,$grado);

    header("Location: ".ROOT."modulos/estudiantes/estudiantes.php?mensaje=".$result);

?>