<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Historial De Eventos - SuKarne</title>
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
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="header-title">Historial De Eventos</h4>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="timeline timeline-left">
                                        <article class="timeline-item alt">
                                            <div class="text-left">
                                                <div class="time-show first">
                                                    <a href="#" class="btn btn-custom">Hoy</a>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                        <h4 class="">Hace 1 Horas</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 p.m.</small></p>
                                                        <p>Envio del Pedido #ABV2683</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item ">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <span class="timeline-icon bg-success"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                        <h4 class="text-success">Hace 7 Horas</h4>
                                                        <p class="timeline-date text-muted"><small>02:00 p.m.</small></p>
                                                        <p>Reabastecimiento de Stock De Carne</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                        <h4 class="text-primary">Hace 9 Horas</h4>
                                                        <p class="timeline-date text-muted"><small>12:01 p.m.</small></p>
                                                        <p>Inicio De Sistema de Refigeracion</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <span class="timeline-icon bg-danger"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                        <h4 class="text-danger">Hace 11 Horas</h4>
                                                        <p class="timeline-date text-muted"><small>11:25 p.m</small></p>
                                                        <p>Realizacion de Pedido #ACD485039</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

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