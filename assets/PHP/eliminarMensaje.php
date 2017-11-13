<?php
    include 'conexion.php';
    
    session_start();
        
    $id = $_POST['mensaje'];

    $sql = "DELETE FROM mensaje WHERE id_mensaje = $id";
    mysqli_query($conn,$sql) or die("error al eliminar");

    $_SESSION['msn'] = "delete";
    header("location:../perfil.php");
?>