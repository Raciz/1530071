<?php
    
    include 'conexion.php';
    
    $user = $_POST['usuario'];
    $password = $_POST['pass1'];
    $correo = $_POST['email'];
    $nombre = $_POST['nombre'];
    $Paterno = $_POST['AP'];
    $Materno = $_POST['AM'];
    $fecha_nac = $_POST['fecha'];
    
    //insertar en persona
    //$sql = "INSERT INTO persona (nombre,apellido_paterno,apellido_paterno,fecha_nac) VALUES ('$nombre','$AP','$AM','$fecha_nac')";
    //mysqli_query($conn,$sql) or die ("Error Al Insertar En Persona");

    //obtener el id persona
    //$sql = "SELECT MAX(id_persona) id FROM persona";
    //$stmt = mysqli_query($conn,$sql) or die ("Error ID");
    //$row = mysqli_fetch_array($stmt);

    //insertar en cuenta
    $sql = "INSERT INTO cuenta(usuario,password,correo,id_persona) VALUES ('$user','$password','$correo','$row['id']')";
    mysqli_query($conn,$sql) or die ("Error ID");

//    header("location:../dashboard.php");
    echo "bien";
?>
    