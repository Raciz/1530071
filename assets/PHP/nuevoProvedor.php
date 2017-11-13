<?php
    
    include 'conexion.php';
    
    $name = $_POST['nombre'];
    $dir = $_POST['direccion'];
    $tel = $_POST['telefono'];
    $desc = $_POST['descripcion'];
    
    $id = strtoupper(substr($name,0,2).substr($name,strrpos($name, " ")+1,2));
    $sql = "INSERT INTO provedor(id_provedor,nombre,direccion,telefono,descripcion) VALUES ('$id','$name','$dir','$tel','$desc')";
    mysqli_query($conn,$sql) or die ("error al insertar en provedor");
    
    header("location:../Lista_Provedores.php");
?>