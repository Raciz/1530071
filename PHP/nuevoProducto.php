<?php
    
    include 'conexion.php';
    
    //traemos los datos del formulario
    $name = $_POST['nombre'];
    $cost = $_POST['precio'];
    $cant = $_POST['cantidad'];
    $prov = $_POST['provedor'];
    $desc = $_POST['descripcion'];
    $cat = $_POST['categoria'];
        
    //creamos el id del producto
    $id = strtoupper($prov.substr($name,0,2));

    //insertamos los datos del producto en la BD
    $sql = "INSERT INTO producto(id_producto,nombre,precio,cantidad,id_provedor,descripcion,id_categoria) VALUES ('$id','$name','$cost','$cant','$prov','$desc','$cat')";
    mysqli_query($conn,$sql) or die ("error en inserta articulo");
    
    header("location:../Lista_Productos.php");
?>