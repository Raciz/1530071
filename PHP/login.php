<?php
    
    include 'conexion.php';

    //traemos los datos del formulario
    $user = $_POST['username'];
    $password = $_POST['password'];

    //verificamos si los parametros enviados coinciden con u registro en la base de datos
    $sql = "SELECT COUNT(*) Nrows FROM cuenta WHERE usuario = '$user' and password = '$password'"; 
    $stmt = mysqli_query($conn,$sql) or die ("Algo Salio Mal"); 
    $row = mysqli_fetch_array($stmt);

    session_start();
    
    //en caso de que si lo redirijimos a dashboard
    if($row['Nrows'] > 0)
    {
        $_SESSION['username'] = $user;
        header("location:../dashboard.php");
    }
    //sino lo regresamos a la pantalla de login
    else
    {
        $_SESSION['error'] = "login";
        header("location:../index.php");
    }
?>