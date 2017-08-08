<?php session_start();
if(isset($_SESSION['inicio'])){


    ?>
    <?php require_once('../../clases/classobservador.php') ?>
    <?php require_once('../../clases/classtrabajocrear.php') ?>
    <?php require_once('../../clases/classlogin.php') ?>

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

            $idestudiente=$valor->getIdestudiente();
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
                                <a href="perfil.php"><i class="fa fa-user"></i> perfil</a>
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
                            <li><a href="#">Persona</a>
                            </li>
                            <li class="active">Asignaturas</li>

                        </ul>
                        <!--breadcrumbs end -->

                    </div>
                </div>
                <div>
                    <?php $arrprofesor = classobservador::getAlla($idestudiente);

                    foreach ($arrprofesor as $profesor){

                    ?>
                    <form id="datos" class="form-horizontal" role="form" method="post" action='inicio.php' novalidate>
                </div>

                <div>
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <?php echo "observacion"; ?></h3>

                            </div>
                            <div class="panel-body">
                                <?php echo $profesor->getObservacion(); ?>
                                <br>
                                <br>
                                <p style="text-align: right"><?php echo $profesor->getFecha() ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <?php } ?>


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