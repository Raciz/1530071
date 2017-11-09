<?php
    include 'conexion.php';

    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $msn = $_POST['mensaje'];
    $admin = $_POST['admini'];

    session_start();
        
    if(empty($_POST['nombre']) || empty($_POST['correo']))
    {
        $_SESSION['msn'] = "mal";
        header("location:../Mensaje.php");
        exit;
    }
    else
    {
        $sql = "INSERT INTO mensaje(nombre,email,mensaje,admin) VALUES ('$name','$email','$msn','$admin')";
        mysqli_query($conn,$sql);

        $_SESSION['msn'] = "bien";
        header("location:../Mensaje.php");
    }
?>