<?php
    
    include 'conexion.php';
    
    //traemos los datos del formulario
    $name = $_POST['nombre'];
    $dir = $_POST['direccion'];
    $tel = $_POST['telefono'];
    $desc = $_POST['descripcion'];
    
    //creamos el id del provedor y lo insertamos en la base de datos
    $id = strtoupper(substr($name,0,2).substr($name,strrpos($name, " ")+1,2));
    $sql = "INSERT INTO provedor(id_provedor,nombre,direccion,telefono,descripcion) VALUES ('$id','$name','$dir','$tel','$desc')";
    mysqli_query($conn,$sql) or die ("error al insertar en provedor");
    
    header("location:../Lista_Provedores.php");
?>