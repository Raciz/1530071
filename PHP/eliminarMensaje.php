<?php
    include 'conexion.php';
    
    session_start();
        
    //traemos el id del mensaje
    $id = $_POST['mensaje'];
    
    //lanzamos el delete para borrar el mensaje
    $sql = "DELETE FROM mensaje WHERE id_mensaje = $id";
    mysqli_query($conn,$sql) or die("error al eliminar");

    //redirigimos a la seccion de perfil
    $_SESSION['msn'] = "delete";
    header("location:../perfil.php");
?>