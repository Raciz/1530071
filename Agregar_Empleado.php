<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Agregar Empleado - SuKarne</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />


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

                    <div class="col-lg-15">
                        <div class="p-20 m-b-20">

                            <h4 class="header-title m-t-0">Agregar Empleado</h4>

                            <form action="PHP/nuevoEmpleado.php" method="post" class="form-validation">
                                <div class="form-group">
                                    <label for="userName">Usuario<span class="text-danger">*</span></label>
                                    <input type="text" name="usuario" parsley-trigger="change" required
                                           placeholder="Ingresar Usuario" class="form-control" id="usuario">
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Correo<span class="text-danger">*</span></label>
                                    <input type="email" name="email" parsley-trigger="change" required
                                           placeholder="Ingresar Correo" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pass1">Contraseña<span class="text-danger">*</span></label>
                                    <input id="pass1" type="password" name="pass1" placeholder="Ingresar Contraseña" required
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Repetir Contraseña<span class="text-danger">*</span></label>
                                    <input data-parsley-equalto="#pass1" type="password" required
                                           placeholder="Repetir Contraseña" class="form-control" id="passWord2">
                                </div>

                                <div class="form-group">
                                    <label for="Name">Nombre<span class="text-danger">*</span></label>
                                    <input type="text" name="nombre" parsley-trigger="change" required
                                           placeholder="Ingrese Nombre" class="form-control" id="nombre">
                                </div>

                                <div class="form-group">
                                    <label for="Name">Apellido Paterno<span class="text-danger">*</span></label>
                                    <input type="text" name="AP" parsley-trigger="change" required
                                           placeholder="Ingrese Apellido Materno" class="form-control" id="AP">
                                </div>

                                <div class="form-group">
                                    <label for="Name">Apellido Materno<span class="text-danger"></span></label>
                                    <input type="text" name="AM" parsley-trigger="change" placeholder="Ingrese Apellido Materno" class="form-control" id="AM">
                                </div>

                                <div class="form-group">
                                    <label>Fecha De Nacimiento</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" name="fecha" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div><!-- input-group -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Hora De Entrada</label>
                                    <div class="input-group clockpicker" data-placement="top" data-align="top">
                                        <input type="text" class="form-control" required placeholder="Ingrese Hora De Entrada" name="entrada">
                                        <span class="input-group-addon"> <span class="mdi mdi-clock"></span> </span>
                                    </div>
                                    <label>Hora De Salida</label>
                                    <div class="input-group clockpicker" data-placement="top" data-align="top">
                                        <input type="text" class="form-control" required placeholder="Ingrese Hora De Salida" name="salida">
                                        <span class="input-group-addon"> <span class="mdi mdi-clock"></span> </span>
                                    </div>
                                </div>
                                <div class="form-group text-center m-b-0">
                                    <button class="btn btn-success btn-bordered btn-lg" type="submit">
                                        Aceptar
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-bordered btn-lg">
                                        Limpiar
                                    </button>
                                </div>
                            </form>


                        </div>
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

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <!-- form advanced init js -->
        <script src="assets/pages/jquery.form-advanced.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.form-validation').parsley();
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>

    </body>
</html>