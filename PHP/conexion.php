<?php
    
    //parametros para la conexion a la base de datos
    $user = "root";
    $password = "MLPEGRR5";
    $server = "localhost";
    $DataBase = "SuKarne";
        
    //conexion con la base de datos
	$conn = mysqli_connect($server,$user,$password) or die ("Error Al Conectar Al Servidor De Base De Datos");
    $db = mysqli_select_db($conn,$DataBase) or die ("Error Al Conectar A La Base De Datos"); 
?>