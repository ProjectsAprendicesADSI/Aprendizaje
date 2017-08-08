<?php session_start();
if(isset($_SESSION['inicio'])){


    ?>
    <?php require_once('../../clases/classprofesor.php') ?>
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
    $profe=classprofesor::buscarforusuario($usu);
    if (count($profe)>0 && ($usu =="admin")){

    foreach ($profe as $valor){
        $idprofesor=$valor->getidprofesor();
        $Tipodocumento=$valor->getTipodocumento();
        $Documento=$valor->getDocumento();
        $Nombre=$valor->getNombre();
        $Apellido=$valor->getApellido();
        $Foto=$valor->getFoto();
        $Telefono=$valor->getTelefono();
        $Telefono2=$valor->getTelefono2();;
        $Usuario;
        $Pass=$valor->getPass();
    }}
    else{
        header('Location: ../4042.html');
    }

    ?>
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="inicioadmi.php" class="logo" title="Inicio" data-toggle="tooltip"  ><span>GIGA</span></a>
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
                    </li>
                    <li class="profile-photo">
                        <img src="<?php echo $Foto ?>" style="max-height: 50px ; max-width: 50px" alt="" class="img-circle">
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
                        <a href="javascript:void(0);"><i class="fa fa-bookmark"></i><span>Asignaturas</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="Materias.php">Asignaturas</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-users"></i><span>Cursos</span><i class="arrow fa fa-angle-right pull-right"></i></a>


                        <ul>
                            <li><a href="aulas.php">Aulas</a
                            </li>
                            <li><a href="Cursos.php">Cursos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-user"></i><span>usuarios</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="crearalumno.php">Alumno</a></li>
                            <li><a href="crearprofesor.php">Profesor</a></li>
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
                            <li class="active">Perfil</li>

                        </ul>
                        <!--breadcrumbs end -->
                        <h1 class="h1">Perfil</h1>
                    </div>


                    <div class="panel-body">
                        <div class="tab-wrapper tab-primary">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home1" data-toggle="tab" >Perfil Administrador</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home1">
                                    <form id="datos" class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action='../../controladores/controllerprofesores.php?action=editar2&id=<?php echo $idprofesor ?>' novalidate>
                                        <?php if(!empty($_GET['respuesta'])){ ?>
                                            <?php if ($_GET['respuesta'] == "correcto"){ ?>
                                                <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>El docente </strong> se registro con exito.</div>
                                            <?php }else {?>
                                                <div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>El docente </strong> no se pudo registrar por favor intente cambiar el usuario y verifique los datos.</div>
                                            <?php } ?>
                                        <?php } ?>


                                        <!--__________________________________ Tipo de documento ------------------>

                                        <div class="form-group" >
                                            <label for="inputEmail2" class="col-sm-2 control-label">Tipo de documeto</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="Tipodocumento" id="Tipodocumento" readonly="readonly" value="<?php echo $Tipodocumento; ?>">

                                            </div>
                                        </div>

                                        <!--__________________________________ Numero de documeto------------------>

                                        <div class="form-group">
                                            <label for="inputEmail2" class="col-sm-2 control-label">Numero de documeto</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="Documento" id="Documento" readonly="readonly" value="<?php echo $Documento; ?>">
                                            </div>
                                        </div>
                                        <!--__________________________________ NOmbre ------------------>

                                        <div class="form-group">
                                            <label for="inputEmail2" class="col-sm-2 control-label">Nombre</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="Nombre" id="Nombre" readonly="readonly" value="<?php echo $Nombre; ?>">
                                                <input type="hidden" name="Apellido" id="Apellido" value="<?php $Apellido?>">

                                            </div>
                                        </div>



                                        <!--__________________________________ telefono ------------------>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Telefono</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="Telefono" id="Telefono" required="true  " value="<?php echo $Telefono; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Telefono2</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="Telefono2" id="Telefono2" required="" <?php echo $Telefono2; ?>>
                                            </div>
                                        </div>

                                        <!-------------------------------foto---------------------------------------->

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">foto</label>
                                            <div class="col-sm-6">
                                                <input type="file" accept="image/jpeg, image/png " class="form-control" name="Foto" id="Foto" required="" >
                                            </div>
                                        </div>
                                        <!--__________________________________ usuario ------------------>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Usuario</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="Usuario" id="Usuario" readonly="readonly" value="<?php echo $usu; ?>">

                                            </div>
                                        </div>

                                        <!--__________________________________ pass ------------------>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
                                            <div class="col-sm-6">

                                                <input type="password" class="form-control" name="pass1" id="pass1" required="" value="<?php echo $Pass; ?>" >
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary" >enviar</button>

                                            </div>
                                        </div>


                                    </form>

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

    <script src="../../assets/plugins/icheck/js/icheck.min.js"></script>
    <script src="../../assets/plugins/validation/jquery.validate.min.js"></script>
    <script src="../../assets/plugins/validation/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#form').validate({
                rules: {
                    input1: {
                        required: true
                    },
                    input2: {
                        minlength: 5,
                        required: true
                    },
                    input3: {
                        maxlength: 5,
                        required: true
                    },
                    input4: {
                        required: true,
                        minlength: 4,
                        maxlength: 8
                    },
                    input5: {
                        required: true,
                        min: 5
                    },
                    input6: {
                        required: true,
                        range: [5, 50]
                    },
                    pass1: {
                        minlength: 5
                    },
                    pass2: {
                        required: true,
                        minlength: 5,
                        equalTo: "#pass1"
                    },
                    input9: {
                        required: true,
                        email: true
                    },
                    input10: {
                        required: true,
                        url: true
                    },
                    input11: {
                        required: true,
                        digits: true
                    },
                    input12: {
                        required: true,
                        phoneUS: true
                    },
                    input13: {
                        required: true,
                        minlength: 5
                    }
                },
                highlight: function(element) {
                    $(element).closest('.form-group').removeClass('success').addClass('error');
                },
                success: function(element) {
                    element.text('OK!').addClass('valid')
                        .closest('.form-group').removeClass('error').addClass('success');
                }
            });


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
<?php  }
else{
    header('Location: ../404.html');

} ?>