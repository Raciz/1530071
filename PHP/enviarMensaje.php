<?php
    include 'conexion.php';

    //traemos los datos del formulario
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $msn = $_POST['mensaje'];
    $admin = $_POST['admini'];

    session_start();
        
    //verificamos que los parametros tengan algun valor
    if(empty($_POST['nombre']) || empty($_POST['correo']))
    {
        //detenemos la ejecucion y redirigimos a mensaje
        $_SESSION['msn'] = "mal";
        header("location:../Mensaje.php");
        exit;
    }
    else
    {
        //en caso de que si tenga un valor realizamos el insert y redirigimos a mensaje
        $sql = "INSERT INTO mensaje(nombre,email,mensaje,admin) VALUES ('$name','$email','$msn','$admin')";
        mysqli_query($conn,$sql);

        $_SESSION['msn'] = "bien";
        header("location:../Mensaje.php");
    }
?>