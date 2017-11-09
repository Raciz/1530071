<?PHP
    session_start();//inciar sesion
    $log = false;

    //isset validar si una variable tiene contenido
    if(isset($_SESSION['username']))
    {
        $log = true;
    }
?>