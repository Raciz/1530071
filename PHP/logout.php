<?php

    //destruimos la sesion que tenga en ese instante
    session_start();
    session_destroy();
    header("location:../index.php");
?>