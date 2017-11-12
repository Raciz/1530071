<?php
    
    include 'conexion.php';
    session_start();

    $name = $_POST['nombre'];
    $desc = $_POST['descripcion'];

    $id = substr($name,0,4);
        
    $sql = "INSERT INTO categoria(id_categoria,nombre,descripcion) VALUES ('$id','$name','$desc')";
    mysqli_query($conn,$sql) or die ("error al insertar");

    $_SESSION['msn'] = "bien";
    header("location:../Lista_Categorias.php");
?>