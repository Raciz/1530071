<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Enviar Mensaje - SuKarne</title>
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

                                if(isset($_POST['admin']))
                                {
                                    $_SESSION['admino'] = $_POST['admin'];
                                }
                                else if (empty($_SESSION['admino']))
                                {
                                    header("location:Contacto.php");
                                }

                                ?>
                            </div>
                        </div><!--Scrollbar wrapper-->
                        </aside>
                    <!--left navigation end-->

                    <!-- START PAGE CONTENT -->
                    <div id="page-right-content">

                        <?php
                        if($_SESSION['msn'] == "mal")
                        {
                            echo"<div class='alert alert-icon alert-warning alert-dismissible fade in' role='alert'>
                                                <button type='button' class='close' data-dismiss='alert'
                                                        aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                </button>
                                                <i class='mdi mdi-alert'></i>
                                                <strong>Error</strong> Ingrese Todo Los Campos Requeriros
                                            </div>";
                            $_SESSION['msn'] = "";
                        }
                        else if($_SESSION['msn'] == "bien")
                        {
                            echo "<div class='alert alert-icon alert-success alert-dismissible fade in' role='alert'>
                                                <button type='button' class='close' data-dismiss='alert'
                                                        aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                </button>
                                                <i class='mdi mdi-check-all'></i>
                                                <strong>Bien Hecho!</strong> El Mensaje Se Ha Enviado Con Exito
                                            </div>";
                            $_SESSION['msn'] = "";
                        } 
                        ?>
                        <div class="col-lg-20">
                            <div class="p-20 m-b-20">
                                <h4 class="header-title m-t-0">Mensaje</h4>
                                <div class="p-20 m-b-20">
                                    <form role="form" class="form-validation" autocomplete="off" action="PHP/enviarMensaje.php" method="post">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 form-control-label">Nombre<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-sm-4 form-control-label">Correo<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input id="hori-pass1" type="email" placeholder="Ingrese Correo" name="correo" 
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="p-20 m-b-20">
                                                    <h4 class="m-b-30 m-t-0 header-title">Mensaje<span class="text-danger">*</span></h4>
                                                    <textarea required name="mensaje" class="summernote" placeholder="Ingrese Mensaje">

                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <?php    
                                        echo "<input type='hidden' name='admini' value=".$_SESSION['admino'].">";
                                        ?>

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