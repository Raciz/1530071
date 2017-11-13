<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Contacto - SuKarne</title>
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

        <!-- jvectormap -->
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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
                            <div class="col-lg-14">
                                <div class="card-box m-t-30">
                                    <h4 class="header-title m-t-0 m-b-20">Contacto</h4>

                                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                                        <li class="active">
                                            <a href="#profile-b2" data-toggle="tab" aria-expanded="true">
                                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                                <span class="hidden-xs">Administradores</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#messages-b2" data-toggle="tab" aria-expanded="false">
                                                <span class="visible-xs"><i class="mdi mdi-cellphone"></i></span>
                                                <span class="hidden-xs">Numeros de Contacto</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile-b2">

                                            <div class="row">

                                                <?php

                                                include 'PHP/conexion.php';

                                                $sql = "SELECT * FROM cuenta c INNER JOIN persona p ON p.id_persona = c.id_persona
                                                           INNER JOIN administrador a ON a.id_admin = p.id_persona";
                                                $stmt = mysqli_query($conn,$sql) or die ("Error En La Consulta");
                                                while($row = mysqli_fetch_array($stmt))
                                                {
                                                    echo"<div class='col-md-4'>
                                        <div class='text-center card-box'>
                                            <div class='clearfix'></div>
                                                <div class='member-card'>
                                                <div class='thumb-xl member-thumb m-b-10 center-block'>
                                                    <img src='assets/images/users/avatar-3.jpg' class='img-circle img-thumbnail'   alt='profile-image'>
                                                    <i class='mdi mdi-information-outline member-star text-success' title='verified user'></i>
                                                </div>
                                                <div class=''>
                                                    <h4 class='m-b-5'>".$row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno']."</h4>
                                                    <p class='text-muted'><span>".$row['correo']."</span></p>
                                                </div>

                                                <p class='text-muted font-13'>
                                                    Hola, Yo Soy ".$row['nombre']." ".$row['apellido_paterno'].", En Caso de Cualquier Inconveniente No Dude En Contactarme
                                                </p>

                                                <form action='Mensaje.php' method='post'>
                                                    <input type='hidden' name='admin' value=".$row['id_persona'].">
                                                    <button type='submit' class='btn btn-default btn-sm m-t-10'>Mensaje</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>";
                                                }
                                                ?>

                                            </div>
                                            <!-- end row -->

                                        </div>


                                        <div class="tab-pane" id="messages-b2">
                                            <h3>Telefono:</h3>
                                            <p>834-537-89-45</p>
                                            <p>834-789-56-33</p>
                                            <p>834-672-30-89</p>

                                            <h3>Correos</h3>
                                            <p>SuKarne@SuKarne.com</p>
                                            <p>Atencion_Cliente@SuKarne.com</p>
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

            <!-- google maps api -->
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            <!-- Gmaps file -->
            <script src="assets/plugins/gmaps/gmaps.min.js"></script>

            <!-- Google map Init -->
            <script src="assets/pages/jquery.gmaps.js"></script>

            <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
            <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
            <script src="assets/plugins/jvectormap/gdp-data.js"></script>
            <script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
            <script src="assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
            <script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
            <script src="assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
            <script src="assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
            <script src="assets/plugins/jvectormap/jquery-jvectormap-de-mill.js"></script>
            <script src="assets/plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
            <script src="assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js"></script>
            <script src="assets/pages/jquery.jvectormap.init.js"></script>


            <!-- App Js -->
            <script src="assets/js/jquery.app.js"></script>
            </body>
        </html>