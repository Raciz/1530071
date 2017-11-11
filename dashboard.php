<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DashBoard - SuKarne</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

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
                        <a href="index.html" class="logo">
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
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
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
                                                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                            <p class="m-0">
                                                                <small>There are new settings available</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                            <em class="fa fa-cog bg-warning"></em>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">New settings</h5>
                                                            <p class="m-0">
                                                                <small>There are new settings available</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                            <em class="fa fa-bell-o bg-custom"></em>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">Updates</h5>
                                                            <p class="m-0">
                                                                <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                            <em class="fa fa-user-plus bg-danger"></em>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">New user registered</h5>
                                                            <p class="m-0">
                                                                <small>You have 10 unread messages</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                            <em class="fa fa-diamond bg-primary"></em>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                            <p class="m-0">
                                                                <small>There are new settings available</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                            <em class="fa fa-cog bg-warning"></em>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">New settings</h5>
                                                            <p class="m-0">
                                                                <small>There are new settings available</small>
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
                                    <?php
                                    echo "<img src='assets/images/users/avatar-1.jpg' alt='' class='thumb-md img-circle'>";
                                    ?>
                                </div>
                                <div class="user-info">
                                    <a href="#">Stanley Jones</a>
                                    <p class="text-muted m-0">Administrator</p>
                                </div>
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
                                <h4 class="header-title m-t-0">Dashboard</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-box">
                                    <h6 class="text-muted m-t-0 text-uppercase">Promedios De Ventas Diarias</h6>
                                    <h2 class="m-b-20"><span>300</span></h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-6">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-default pull-right">Ver</a>
                                    <h6 class="text-muted m-t-0 text-uppercase">Pedidos Pendientes</h6>
                                    <h2 class="m-b-20">10</h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                            <span class="sr-only"10% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                                    <h4 class="m-t-0 text-dark">Promedio De Ganancias Mensuales</h4>
                                    <h2 class="text-primary text-center m-b-30 m-t-30">$<span data-plugin="counterup">34,000</span></h2>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                                    <h4 class="m-t-0 text-dark">Perdidas Del Mes Pasado</h4>
                                    <h2 class="text-pink text-center m-b-30 m-t-30"><span data-plugin="counterup">5,300</span></h2>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0">Estadisticas</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Ventas Anuales</h5>

                                    <div id="morris-bar-stacked" style="height: 300px;"></div>

                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">% De Satisfacion De Clientela</h5>


                                    <div id="morris-area-example" style="height: 300px;"></div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">

                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Ganancias Y Gastos</h5>


                                    <div id="morris-line-example" style="height: 300px;"></div>

                                </div> <!-- p-20 m-b-20 -->

                            </div> <!-- end row -->

                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Calidad De Servicios</h5>
                                    <div id="morris-bar-example" style="height: 320px;"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">

                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Ventas Online Vs Ventas Ofline</h5>


                                    <div id="morris-area-with-dotted" style="height: 320px;"></div>

                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Productos Por Provedor</h5>


                                    <div id="morris-donut-example" style="height: 320px;"></div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->
                    </div>
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

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/jquery.morris.init.js"></script>

        <!-- Flot chart -->
        <script src="assets/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.orderBars.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="assets/pages/jquery.flot.init.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $('[data-plugin="knob"]').each(function(idx, obj) {
                $(this).knob();
            });
        </script>

    </body>
</html>