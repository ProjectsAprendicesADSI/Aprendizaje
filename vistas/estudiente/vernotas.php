
<?php session_start();
if(isset($_SESSION['inicio'])){


    ?>
    <?php require_once('../../clases/classalumno.php') ?>
    <?php require_once('../../clases/classlogin.php') ?>
    <?php require_once('../../clases/classmaterias.php') ?>
    <?php require_once('../../clases/classprofesor.php') ?>
    <?php require_once('../../clases/classtrabajo.php') ?>
    <?php require_once('../../clases/classtrabajocrear.php') ?>

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
    <?php

    $array =  $_SESSION["inicio"];
    $usu=$array['usu'];
    $profe=classalumno::buscarforusuario($usu);
    if (count($profe)>0 && ($usu !="admin")){

        foreach ($profe as $valor){
            $id=$valor->getIdestudiente();
            $Tipodocumento= $valor->getTipodocumento();
            $Documento= $valor->getDocumento();
            $Nombre= $valor->getNombre();
            $Apellido= $valor->getApellido();
            $Foto= $valor->getFoto();
            $Telefono= $valor->getTelefono();
            $Usuario= $valor->getUsuario();
            $Pass= $valor->getPass();
            $Edad=$valor->getEdad();
            $Curso=$valor->getCurso();
        }}
    else{
        header('Location: ../4042.html');
    }

    ?>
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="inicio.php" class="logo" title="Inicio" data-toggle="tooltip"  ><span>GIGA</span></a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Menu de navegacion">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="user-nav">
                <ul>

                    <li class="profile-photo">
                        <img src="<?php echo $Foto ?>" alt="" class="img-circle" style="max-height: 50px ; max-width: 50px">
                    </li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php echo $Nombre ?> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li>
                                <a href="#  "><i class="fa fa-user"></i> perfil</a>
                            </li>


                            <li>
                                <a href="../../controladores/controllerlogin.php?accion=fin"><i class="fa fa-power-off"></i> cerrar sesion</a>
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
                        <a href="javascript:void(0);"><i class="fa fa-archive"></i><span>Trabajos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>

                            <li><a href=vernotas.php>Ver Notas</a>
                            </li>
                            <li><a href=subir.php>Subir</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-pencil-square-o"></i><span>observaciones</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>

                            <li><a href=verobservaciones.php>Ver Observaciones</a>
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
                            <li><a href="#">Administrador</a>
                            </li>
                            <li class="active">profesor</li>

                        </ul>
                        <!--breadcrumbs end -->
                        <h1 class="h1">Profesor</h1>
                    </div>


                    <div class="panel-body">
                        <div class="tab-wrapper tab-primary">
                            <ul class="nav nav-tabs">
                                <li  class="active" ><a href="#profile1" data-toggle="tab">listar</a>
                                </li>
                            </ul>


                            <div class="tab-pane" id="profile1">

                                <div class="row">
                                    <div class="col-md-15">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Calificar</h3>

                                            </div>
                                            <div class="panel-body">

                                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th>materia</th>
                                                        <th>trabajo</th>
                                                        <th>nota</th>
                                                        <th>profesor</th>


                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                    $arraytrabajo = classtrabajo::buscarestudent($id);
                                                    foreach ($arraytrabajo as $trabajo){

                                                        $arraystudent= classalumno::buscarForId($trabajo->getAlumno());
                                                        foreach ($arraystudent as $student){
                                                            $NAME=$student->getNombre();
                                                        }
                                                        $arraytrab=classtrabajocrear::buscarForId($trabajo->getTrabajo());
                                                        foreach ($arraytrab as $valor){
                                                            $nomtrabajo=$arraytrab->getNombre();
                                                            $arrayprofe=classprofesor::buscarforid($arraytrab->getProfesor());


                                                            $asignatura=classmaterias::buscarforid($arraytrab->getAsigaturasIdAsigaturas());
                                                            $namemateria=$asignatura->getNombre();


                                                        }
                                                        ?>
                                                        <tr>

                                                            <td><?php echo $namemateria ;?></td>


                                                            <td><?php echo $nomtrabajo; ?></td>


                                                            <td><?php echo $trabajo->getNota();?></td>


                                                            <td><?php echo $arrayprofe->getNombre() ;?></td>



                                                        </tr>
                                                    <?php  } ?>

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
<?php  }
else{
    header('Location: ../404.html');

} ?>