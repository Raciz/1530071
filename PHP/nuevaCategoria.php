<?php
    
    include 'conexion.php';
    session_start();
    
    //traemos los datos del formlario
    $name = $_POST['nombre'];
    $desc = $_POST['descripcion'];
    
    //creamos el id de la categoria
    $id = substr($name,0,4);
        
    //insertamos los datos de la categoria en la BD
    $sql = "INSERT INTO categoria(id_categoria,nombre,descripcion) VALUES ('$id','$name','$desc')";
    mysqli_query($conn,$sql) or die ("error al insertar");

    $_SESSION['msn'] = "bien";
    header("location:../Lista_Categorias.php");
?>