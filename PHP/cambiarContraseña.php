<?php

    include 'conexion.php';

    session_start();

    //recibimos los parametros del formulario
    $old = $_POST['passActual'];
    $new = $_POST['newPass'];
    $renew = $_POST['rePass'];

    //traemos el nombre del usuario
    $user = $_SESSION['username'];
    
    //consulta para traer la contraseña actual del usuario
    $sql = "SELECT password FROM cuenta WHERE usuario = '$user'";
    $stmt = mysqli_query($conn,$sql); 
    $row = mysqli_fetch_array($stmt);    
        
    
    //verificamos que la contraseña actual sea igual a la registrada en la BD
    // y que la nueva se haya ingresado corectamente en los 2 campos
    if(($new == $renew) && ($old == $row['password']))
    {
        //si es exitosa se lanza el update y deslogeamos la sesion
        $sql = "UPDATE cuenta SET password = '$new' WHERE usuario = '$user'";
        mysqli_query($conn,$sql) or die ("error al actualizar la password");
        header("location:logout.php");
    }
    else 
    {
        $_SESSION['msn'] = "update";
        header("location:../perfil.php");
    }
?>