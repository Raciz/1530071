<?php
    include 'conexion.php';

    session_start();
    $old = $_POST['passActual'];
    $new = $_POST['newPass'];
    $renew = $_POST['rePass'];

    $user = $_SESSION['username'];
    
    $sql = "SELECT password FROM cuenta WHERE usuario = '$user'";
    $stmt = mysqli_query($conn,$sql); 
    $row = mysqli_fetch_array($stmt);    
        
    

    if(($new == $renew) && ($old == $row['password']))
    {
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