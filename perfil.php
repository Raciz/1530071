<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Perfil - SuKarne</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>
        <?php
        include 'PHP/islogin.php';
        if(!$log)
        {
            header("location:index.php");
        }
        ?>
        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="dashboard.php" class="logo">
                            <img src="assets/images/SUKARNE.png" alt="logo" class="logo-lg" />
                            <img src="assets/images/SUKARNE.png" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                        <input type="text" placeholder="Buscar" class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">1</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                            <div class="slimscroll">
                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                            <em class="fa fa-diamond bg-primary"></em>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">Se Ha Registrado Una Nueva Compra</h5>
                                                            <p class="m-0">
                                                                <small>Clic Para Visualizarla</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <!--<li>-->
                                        <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                        <!--<small class="font-600">See all notifications</small>-->
                                        <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="perfil.php"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="PHP/logout.php"><i class="ti-power-off m-r-10"></i>Cerrar Sesion</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">

                                    <img src='assets/images/users/avatar-1.jpg' alt='' class='thumb-md img-circle'>

                                </div>
                                <div class="user-info">
                                    <?php
                                    include 'PHP/conexion.php';

                                    $user = $_SESSION['username'];

                                    $_sql = "SELECT * FROM cuenta c INNER JOIN persona p ON p.id_persona = c.id_persona WHERE c.usuario = '$user'";
                                    $_stmt = mysqli_query($conn,$_sql) or die ("error datos persona Menu");
                                    $_row = mysqli_fetch_array($_stmt);

                                    ?>

                                    <a href='#'><?php echo $_row['nombre'];?></a>

                                    <?php    
                                    $id = $_row['id_persona'];
                                    $_sql = "SELECT COUNT(*) Nrow FROM administrador WHERE id_admin = '$id'";
                                    $_stmt = mysqli_query($conn,$_sql) or die ("error tipo empleado Menu");
                                    $_row = mysqli_fetch_array($_stmt);

                                    if($_row['Nrow'] > 0)
                                    {
                                        echo "<p class='text-muted m-0'>Administrator</p>";
                                    }
                                    else
                                    {
                                        echo "<p class='text-muted m-0'>Empleado</p>";
                                    }   

                                    ?>
                                </div>
                                <!--- End User Detail box -->

                                <!-- Left Menu Start -->
                                <?php
                                include 'PHP/menu.php';
                                ?>
                            </div>
                        </div><!--Scrollbar wrapper-->
                        </aside>
                    <!--left navigation end-->

                    <!-- START PAGE CONTENT -->
                    <div id="page-right-content">

                        <div class="container">
                            <button style=";" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#panel-modal"><strong>Ayuda</strong></button>

                            <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content p-0 b-0">
                                        <div class="panel panel-color panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 class="panel-title">Ayuda - Perfil</h3>
                                            </div>
                                            <div class="panel-body">
                                                <h2><p>Secciones</p></h2>
                                                <h4><p><b>Informacion Personal:</b></p></h4>
                                                <p>Aqui se nos muestra nuestra informacion personal registrada en el sistema, hay que asegurarse que esta seha correcta</p>
                                                <h4><p><b>Mensajes:</b></p></h4>
                                                <p>en esta seccion podemos ver los mensajes enviado para no sotros referente a algun problema que tengamos, avisos, etc</p>
                                                <h4><p><b>Cambiar Contraseña:</b></p></h4>
                                                <p>Aqui se un formulario con los datos requeriros para realizar el cambio de contraseña. Estos son 2:
                                                <ul>
                                                    <li>La Contraseña Actual</li>
                                                    <li>La Nueva Contraseña</li>
                                                </ul>
                                                <br>
                                                En contraseña actual debes ingresar la contraseña con la que estas logeado en estos momentos, despues en el siguiente caja de texto ingresamos con la contraseña con la cual ahora queremos logearnos y  la volvemos escribir en la tercera caja de texto y damos clic en aceptar
                                                </p>


                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="assets/images/users/avatar-3.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <?php
                                        $sql = "SELECT * FROM cuenta c INNER JOIN persona p ON p.id_persona = c.id_persona
                                                                            WHERE c.usuario = '$user'";

                                        $stmt = mysqli_query($conn,$sql) or die ("error en la consulta");
                                        $row = mysqli_fetch_array($stmt);
                                        $id = $row['id_persona'];
                                        ?>
                                        <div class="">
                                            <h4 class="m-b-5">
                                                <?php 
                                                echo $row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno']; 
                                                ?>
                                            </h4>
                                        </div>
                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <?php
                        if($_SESSION['msn'] == "update")
                        {
                            echo"<div class='alert alert-icon alert-warning alert-dismissible fade in' role='alert'>
                                                <button type='button' class='close' data-dismiss='alert'
                                                        aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                </button>
                                                <i class='mdi mdi-alert'></i>
                                                <strong>Error Al Acrualizar Contraseña</strong> Ingrese Correctamente El Valor De Todos Los Campos
                                            </div>";
                            $_SESSION['msn'] = "";
                        }
                        else if($_SESSION['msn'] == "delete")
                        {
                            echo "<div class='alert alert-icon alert-success alert-dismissible fade in' role='alert'>
                                                <button type='button' class='close' data-dismiss='alert'
                                                        aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                </button>
                                                <i class='mdi mdi-check-all'></i>
                                                <strong>Borrado Exitoso</strong> El Mensaje Se Ha Borrado Con Exito
                                            </div>";
                            $_SESSION['msn'] = "";
                        }
                        ?>
                        <div class="m-t-30">
                            <ul class="nav nav-tabs navtab-bg nav-justified">
                                <li class="active">
                                    <a href="#datos" data-toggle="tab" aria-expanded="true">
                                        Datos Personales
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#msn" data-toggle="tab" aria-expanded="false">
                                        <?php
                                        $sql2 = "SELECT COUNT(*) num FROM mensaje WHERE admin = '$id'";
                                        $stmt2 = mysqli_query($conn,$sql2) or die ("error mensajes");
                                        $row2 = mysqli_fetch_array($stmt2);

                                        echo "Mensajes<span class='badge badge-primary'>  ".$row2['num']."</span>";
                                        ?>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#changepass" data-toggle="tab" aria-expanded="false">
                                        Cambiar Contraseña
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="datos">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Personal Information</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <?php
                                                    $sql4 = "SELECT * FROM persona p INNER JOIN cuenta as c ON c.id_persona = p.id_persona WHERE c.usuario = '$user'";
                                                    $stmt4 = mysqli_query($conn,$sql4) or die ("error datos personales");
                                                    $row4 = mysqli_fetch_array($stmt4);
                                                    ?>
                                                    <div class="m-b-20">
                                                        <strong>Nombre:</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $row4['nombre']." ".$row4['apellido_paterno']." ".$row4['apellido_materno']; ?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Correo</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $row4['correo']; ?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Fecha De Nacimiento</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $row4['fecha_nac']; ?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Horario De Trabajo</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $row4['hora_entrada']." - ".$row4['hora_salida']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="panel bg-twitter social-feed-box">
                                                <div class="panel-body">
                                                    <div class="">
                                                        <span class="text-uppercase pull-right"><b>Ultimos Tweets</b></span>
                                                        <i class="fa fa-twitter fa-2x"></i>
                                                    </div>
                                                    <div id="twitter-slider" class="carousel slide social-feed-slider" data-ride="carousel">
                                                        <!-- Indicators -->
                                                        <ol class="carousel-indicators m-b-0">
                                                            <li data-target="#twitter-slider" data-slide-to="0" class=""></li>
                                                            <li data-target="#twitter-slider" data-slide-to="1" class="active"></li>
                                                            <li data-target="#twitter-slider" data-slide-to="2" class=""></li>
                                                        </ol>
                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="item active left">
                                                                <div class="m-t-20">
                                                                    <h3 class="text-white m-b-5">SuKarne planea expandirse hacia Estados Unidos</h3>
                                                                    <span class="font-13"><small>10 De Noviembre Del 2017</small></span>
                                                                </div>
                                                            </div>

                                                            <div class="item next left">
                                                                <div class="m-t-20">
                                                                    <h3 class="text-white m-b-5">SuKarne Se Convirtio en la empresa mas famosa de Mexico</h3>
                                                                    <span class="font-13"><small>9 De Noviembre Del 2017</small></span>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="m-t-20">
                                                                    <h3 class="text-white m-b-5">Se inaugura una nueva sucursal de sucarne en Oaxaca</h3>
                                                                    <span class="font-13"><small>6 De Noviembre Del 2017</small></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="panel bg-facebook social-feed-box">
                                                <div class="panel-body">
                                                    <div class="">
                                                        <span class="text-uppercase pull-right"><b>Ultimas Noticias</b></span>
                                                        <i class="fa fa-facebook fa-2x"></i>
                                                    </div>

                                                    <div id="facebook-slider" class="carousel slide social-feed-slider" data-ride="carousel">
                                                        <!-- Indicators -->
                                                        <ol class="carousel-indicators m-b-0">
                                                            <li data-target="#facebook-slider" data-slide-to="0" class="active"></li>
                                                            <li data-target="#facebook-slider" data-slide-to="1" class=""></li>
                                                            <li data-target="#facebook-slider" data-slide-to="2" class=""></li>
                                                        </ol>
                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="item active">
                                                                <div class="m-t-20">
                                                                    <h3 class="text-white m-b-5">SuKarne planea expandirse hacia Estados Unidos</h3>
                                                                    <span class="font-13"><small>10 De Noviembre Del 2017</small></span>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="m-t-20">
                                                                    <h3 class="text-white m-b-5">SuKarne Se Convirtio en la empresa mas famosa de Mexico</h3>
                                                                    <span class="font-13"><small>6 De Noviembre Del 2017</small></span>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="m-t-20">
                                                                    <h3 class="text-white m-b-5">Se inaugura una nueva sucursal de sucarne en Oaxaca</h3>
                                                                    <span class="font-13"><small>6 De Noviembre Del 2017</small></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="msn">
                                    <?php
                                    $sql3 = "SELECT * FROM mensaje WHERE admin = '$id'";
                                    $stmt3 = mysqli_query($conn,$sql3) or die ("error mensajes");


                                    while($row3 = mysqli_fetch_array($stmt3))
                                    {
                                        echo "<div class='col-lg-4'>
                                                <div class='panel panel-color panel-success'>
                                                    <div class='panel-heading'>
                                                        <h3 class='panel-title'>".$row3['nombre']."</h3>
                                                    </div>
                                                    <div class='panel-body'>
                                                        <p>Email: ".$row3['email']."</p>
                                                        <p>".$row3['mensaje']."</p>
                                                        <br>

                                                    <form action='PHP/eliminarMensaje.php' method='post'>
                                                        <center>
                                                            <input type='hidden' name='mensaje' value=".$row3['id_mensaje'].">
                                                            <button title='' data-original-title='Eliminar Mensaje' type='submit' data-placement='top' data-toggle='tooltip' class='btn btn-icon btn-danger'> 
                                                                <i class='fa fa-remove'></i> 
                                                            </button>
                                                        <center>
                                                    </form>

                                                    </div>
                                                </div>
                                            </div>";
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id="changepass">
                                    <div class="p-20 m-b-20">

                                        <h4 class="header-title m-t-0">Cambiar Contraseña</h4>
                                        <div class="p-20 m-b-20">

                                            <form role="form" class="form-validation" autocomplete="off" action="PHP/cambiarContraseña.php" method="post">

                                                <div class="form-group row">
                                                    <label for="input" class="col-sm-4 form-control-label">Contraseña Actual<span class="text-danger">*</span></label>
                                                    <div class="col-sm-7">
                                                        <input type="password" class="form-control" name="passActual" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="pass1" class="col-sm-4 form-control-label">Nueva Contraseña<span class="text-danger">*</span></label>
                                                    <div class="col-sm-7">
                                                        <input id="pass1" type="password" name="newPass" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="passWord2" class="col-sm-4 form-control-label">Repetir Contraseña<span class="text-danger">*</span></label>
                                                    <div class="col-sm-7">
                                                        <input data-parsley-equalto="#pass1" type="password" required class="form-control" name="rePass">
                                                    </div>
                                                </div>

                                                <div class="form-group text-center m-b-0">
                                                    <button class="btn btn-success btn-bordered btn-lg" type="submit">
                                                        Aceptar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div>
                            <strong>Francisco Isaac Perales Morales</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                    </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>