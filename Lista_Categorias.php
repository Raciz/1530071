<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Registro De Categorías - SuKarne</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

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
                            <div class="row p-t-20">
                                <div class="col-sm-12">
                                    <div class="m-b-20 table-responsive">
                                        <h3>Lísta De Categorias</h3>
                                        <table id="datatable-fixed-col" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripcion</th>
                                                </tr>
                                            </thead>


                                            <tbody>

                                                <?php
                                                include 'PHP/conexion.php';

                                                $sql = "SELECT * FROM categoria";
                                                $stmt = mysqli_query($conn,$sql) or die ("error en la consulta");

                                                while($row = mysqli_fetch_array($stmt))
                                                {
                                                    echo "<tr>
                                                    <td>".$row['nombre']."</td>
                                                    <td>".$row['descripcion']."</td>
                                                </tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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

            <!-- Datatable js -->
            <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
            <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
            <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
            <script src="assets/plugins/datatables/jszip.min.js"></script>
            <script src="assets/plugins/datatables/pdfmake.min.js"></script>
            <script src="assets/plugins/datatables/vfs_fonts.js"></script>
            <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
            <script src="assets/plugins/datatables/buttons.print.min.js"></script>
            <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
            <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
            <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
            <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
            <script src="assets/plugins/datatables/dataTables.colVis.js"></script>
            <script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

            <!-- init -->
            <script src="assets/pages/jquery.datatables.init.js"></script>

            <!-- App Js -->
            <script src="assets/js/jquery.app.js"></script>

            </body>
        </html>    
