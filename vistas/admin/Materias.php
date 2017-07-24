<?php require('../../clases/classmaterias.php')?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SpaceLab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Feature detection -->
    <script src="../../assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container">
    <header id="header">
        <!--logo start-->
        <div class="brand">
            <a href="../inicio.html" class="logo" title="Inicio" data-toggle="tooltip"  ><span>GIGA</span></a>
        </div>
        <!--logo end-->
        <div class="toggle-navigation toggle-left">
            <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Menu de navegacion">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="user-nav">
            <ul>
                <li class="dropdown messages">
                    <span class="badge badge-danager animated bounceIn" id="new-messages">2</span>
                    <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                    </button>
                    <ul class="dropdown-menu alert animated fadeInDown">
                        <li>
                            <h1>tienes <strong>2</strong> mensajes nuevos</h1>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile-photo">
                                    <img src="../../assets/img/avatar.gif" alt="" class="img-circle">
                                </div>
                                <div class="message-info">
                                    <span class="sender">jose Robles</span>
                                    <span class="time">10 mins</span>
                                    <div class="message-content">hola profe como estas imaginate que ...</div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="profile-photo">
                                    <img src="../../assets/img/avatar1.gif" alt="" class="img-circle">
                                </div>
                                <div class="message-info">
                                    <span class="sender">Jeffrey Ashby</span>
                                    <span class="time">2 hour</span>
                                    <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                                </div>
                            </a>
                        </li>

                        <li><a href="#">Check all messages <i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>

                </li>
                <li class="profile-photo">
                    <img src="../../assets/img/avatar4.gif" alt="" class="img-circle">
                </li>
                <li class="dropdown settings">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Mike Adams <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu animated fadeInDown">
                        <li>
                            <a href="#  "><i class="fa fa-user"></i> perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar"></i> calendario</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope"></i> mensajes <span class="badge badge-danager" id="user-inbox">2</span></a>
                        </li>
                        <li>
                            <a href="pages-login.html"><i class="fa fa-power-off"></i> cerrar sesion</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </header>



    <!------------------------ inicio menu derecho-------------------->
    <aside class="sidebar">
        <div id="leftside-navigation" class="nano">
            <ul class="nano-content">

                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa fa-user"></i><span>usuarios</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>

                        <li><a href="crearalumno.php">Alumno</a>
                        </li>
                        <li><a href="crearprofesor.php">Profesor</a>
                        </li>
                        <li><a href="crearacudiente.php">Acudiente</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa fa-users"></i><span>Cursos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>

                        <li><a href="Cursos.php" >Cursos</a>
                        </li>

                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa fa-bookmark"></i><span>Asignaturas</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>

                        <li><a href="Materias.php">Asignaturas</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <!------------------------ fin menu derecho-------------------->


    <!--main content start-->
    <section class="main-content-wrapper">
        <section id="main-content">
            <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="#">Materias</a>
                        </li>
                        <li class="active">materias</li>

                    </ul>
                    <!--breadcrumbs end -->
                    <h1 class="h1">Materias</h1>
                </div>


                    <div class="panel-body">
                        <div class="tab-wrapper tab-primary">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home1" data-toggle="tab" >Registrar</a>
                                </li>
                                <li><a href="#profile1" data-toggle="tab">listar</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home1">
                                    <form class="form-horizontal" role="form" method="post" action='../../controladores/controllermaterias.php? action=crear' novalidate>
                                        <?php if(!empty($_GET['respuesta'])){ ?>
                                            <?php if ($_GET['respuesta'] == "correcto"){ ?>
                                                <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>La materia </strong> se registro con exito.</div>
                                            <?php }else {?>
                                                <div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>La materia </strong> no se pudo registrar por favor intente de nuevo.</div>
                                            <?php } ?>
                                        <?php } ?>
                                        <!--__________________________________ nombre ------------------>

                                        <div class="form-group">
                                            <label for="inputEmail2" class="col-sm-2 control-label">Nombre</label>
                                            <div class="col-sm-6">
                                                <input type="text"  class="form-control" name="Nombre" id="Nombre" required="" placeholder="Nombre" >
                                            </div>
                                        </div>

                                        <!--__________________________________ Estado ------------------>

                                        <div class="form-group">
                                            <label for="inputEmail2" class="col-sm-2 control-label">estado</label>
                                            <div class="col-sm-6">
                                                <select  class="form-control" name="Estado" id="Estado" required="">
                                                <option value="null" selected>Seleccione...</option>
                                                <option value="activo">Activo</option>
                                                <option value="inactivo">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">enviar</button>
                                                <button type="reset" class="btn btn-info">cancelar</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>

                                <div class="tab-pane" id="profile1">

                                    <div class="row">
                                        <div class="col-md-15">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Acudientes</h3>

                                                </div>
                                                <div class="panel-body">
                                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Estado</th>
                                                            <th>Acciones</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php
                                                        $arrmaterias = classmaterias::getAll();
                                                        foreach ($arrmaterias as $materia){
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $materia->getNombre(); ?></td>
                                                                <td><?php echo $materia->getEstado()?></td>
                                                            </tr>
                                                        <?php } ?>

                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--__________________________________ inicio del formulario ------------------>


                </div>
            </div>

        </section>
    </section>
    <!--main content end-->
    <!--sidebar right start-->

    <!--sidebar right end-->
</section>

<!--Global JS-->
<script src="../../assets/js/jquery-1.10.2.min.js"></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../../assets/plugins/waypoints/waypoints.min.js"></script>
<script src="../../assets/js/application.js"></script>
<script src="../../assets/plugins/dataTables/js/jquery.dataTables.js"></script>
<script src="../../assets/plugins/dataTables/js/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('#example').dataTable();
    });
</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46627904-1', 'authenticgoods.co');
    ga('send', 'pageview');

</script>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 10/07/2017
 * Time: 10:33
 */