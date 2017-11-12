<?php
    
    include 'conexion.php';
    
    $name = $_POST['nombre'];
    $cost = $_POST['precio'];
    $cant = $_POST['cantidad'];
    $prov = $_POST['provedor'];
    $desc = $_POST['descripcion'];
    $cat = $_POST['categoria'];
        
    $id = strtoupper($prov.substr($name,0,2));
    $sql = "INSERT INTO producto(id_producto,nombre,precio,cantidad,id_provedor,descripcion,id_categoria) VALUES ('$id','$name','$cost','$cant','$prov','$desc','$cat')";
    mysqli_query($conn,$sql) or die ("error en inserta articulo");
    
    header("location:../Lista_Productos.php");
?>