<?php
    
    include 'conexion.php';
    
    //traemos los datos del formulario
    $user = $_POST['usuario'];
    $password = $_POST['pass1'];
    $correo = $_POST['email'];
    $name = $_POST['nombre'];
    $Paterno = $_POST['AP'];
    $Materno = $_POST['AM'];
    $fecha_nac = $_POST['fecha'];
    $HE = $_POST['entrada'];
    $HS = $_POST['salida'];
    $tEmp = $_POST['tipo'];

    //obtener el id persona
    $id = strtoupper(substr($Paterno,0,2).substr($Materno,0,2).substr($name,0,2));
    
    //reestructuramos la fecha para que quede como Y/M/D
    $ano = substr($fecha_nac,strrpos($fecha_nac, "/")+1,4);
    $fecha_nac = substr($fecha_nac,0,5);
    $fecha_nac = $ano."/".$fecha_nac;
    
    //insertamos en persona
    $sql = "INSERT INTO persona (id_persona,nombre,apellido_paterno,apellido_materno,hora_entrada,hora_salida,fecha_nac) VALUES ('$id','$name','$Paterno','$Materno','$HE','$HS','$fecha_nac')";
    mysqli_query($conn,$sql) or die ("Error Al Insertar En Persona"); 

    //insertamos en cuenta
    $sql = "INSERT INTO cuenta(usuario,password,correo,id_persona) VALUES ('$user','$password','$correo','$id')";
    mysqli_query($conn,$sql) or die ("Error cuenta");
    
    //verificamos que tipo de empleado es
    if($tEmp == "ADMIN")
    {
        $sql = "INSERT INTO administrador(id_admin) VALUES ('$id')";
        mysqli_query($conn,$sql) or die ("Error tipo admin");
    }
    else if($tEmp == "EMP")
    {
        $sql = "INSERT INTO empleado(id_empleado) VALUES ('$id')";
        mysqli_query($conn,$sql) or die ("Error tipo empleado");
    }

    header("location:../Lista_empleado.php");
?>
    