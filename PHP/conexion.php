<?php

    $user = "root";
    $password = "MLPEGRR5";
    $server = "localhost";
    $DataBase = "SuKarne";
        
	$conn = mysqli_connect($server,$user,$password) or die ("Error Al Conectar Al Servidor De Base De Datos");
    
    $db = mysqli_select_db($conn,$DataBase) or die ("Error Al Conectar A La Base De Datos"); 

?>