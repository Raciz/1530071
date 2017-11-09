<?php
    
    include 'conexion.php';

    $user = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT COUNT(*) Nrows FROM cuenta WHERE usuario = '$user' and password = '$password'"; 
    $stmt = mysqli_query($conn,$sql) or die ("Algo Salio Mal"); 
    $row = mysqli_fetch_array($stmt);

    session_start();
    if($row['Nrows'] > 0)
    {
        $_SESSION['username'] = $user;
        header("location:../dashboard.php");
    }
    else
    {
        $_SESSION['error'] = "login";
        header("location:../index.php");
    }
?>