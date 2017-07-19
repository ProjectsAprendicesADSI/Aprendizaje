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
                    <a href="javascript:void(0);"><i class="fa fa-users"></i><span>Asignaturas</span><i class="arrow fa fa-angle-right pull-right"></i></a>
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
                        <li><a href="#">Persona</a>
                        </li>
                        <li class="active">Acudiente</li>

                    </ul>
                    <!--breadcrumbs end -->
                    <h1 class="h1">Acudiente</h1>
                </div>
                <div class="panel-body">



                    <div class="panel-body">
                        <div class="tab-wrapper tab-primary">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home1" data-toggle="tab">Registrar</a>
                                </li>
                                <li><a href="#profile1" data-toggle="tab">listar</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home1">
                                    <form class="form-horizontal" role="form">
                                        <!--__________________________________ Tipo de documento ------------------>

                                        <div class="form-group">
                                            <label for="inputEmail2" class="col-sm-2 control-label">Tipo de documento</label>
                                            <div class="col-sm-6">
                                                <select class="form-control">
                                                    <option value="null" selected>seleccione...</option>
                                                    <option value="cedula">Cedula</option>
                                                    <option value="tipo">tarjeta de identidad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--__________________________________ Numero de documeto------------------>

                                        <div class="form-group">
                                            <label for="inputEmail2" class="col-sm-2 control-label">Numero de documeto</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="input1" id="input1" required="" placeholder="Numero de documeto">
                                            </div>
                                        </div>
                                        <!--__________________________________ NOmbre ------------------>

                                        <div class="form-group">
                                            <label for="inputEmail2" class="col-sm-2 control-label">Nombre</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="input1" id="input1" required="" placeholder="Nombre">
                                            </div>
                                        </div>
                                        <!--__________________________________ Apellido ------------------>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Apellido</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="input1" id="input1" required="" placeholder="Apellido">
                                            </div>
                                        </div>
                                        <!--__________________________________  ------------------>
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Foto</label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control"  placeholder="buscar..." >

                                            </div>
                                            </div>


                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">enviar</button>
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
                                                            <div class="actions pull-right">
                                                                <i class="fa fa-chevron-down"></i>
                                                                <i class="fa fa-times"></i>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Position</th>
                                                                    <th>Office</th>
                                                                    <th>Age</th>
                                                                    <th>Start date</th>
                                                                    <th>Salary</th>
                                                                </tr>
                                                                </thead>

                                                                <tbody>
                                                                <tr>
                                                                    <td>Tiger Nixon</td>
                                                                    <td>System Architect</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>61</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>$320,800</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Garrett Winters</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>63</td>
                                                                    <td>2011/07/25</td>
                                                                    <td>$170,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Airi Satou</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>33</td>
                                                                    <td>2008/11/28</td>
                                                                    <td>$162,700</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brielle Williamson</td>
                                                                    <td>Integration Specialist</td>
                                                                    <td>New York</td>
                                                                    <td>61</td>
                                                                    <td>2012/12/02</td>
                                                                    <td>$372,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Herrod Chandler</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>San Francisco</td>
                                                                    <td>59</td>
                                                                    <td>2012/08/06</td>
                                                                    <td>$137,500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Rhona Davidson</td>
                                                                    <td>Integration Specialist</td>
                                                                    <td>Tokyo</td>
                                                                    <td>55</td>
                                                                    <td>2010/10/14</td>
                                                                    <td>$327,900</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Colleen Hurst</td>
                                                                    <td>Javascript Developer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>39</td>
                                                                    <td>2009/09/15</td>
                                                                    <td>$205,500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sonya Frost</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>23</td>
                                                                    <td>2008/12/13</td>
                                                                    <td>$103,600</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jena Gaines</td>
                                                                    <td>Office Manager</td>
                                                                    <td>London</td>
                                                                    <td>30</td>
                                                                    <td>2008/12/19</td>
                                                                    <td>$90,560</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Quinn Flynn</td>
                                                                    <td>Support Lead</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2013/03/03</td>
                                                                    <td>$342,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Charde Marshall</td>
                                                                    <td>Regional Director</td>
                                                                    <td>San Francisco</td>
                                                                    <td>36</td>
                                                                    <td>2008/10/16</td>
                                                                    <td>$470,600</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Haley Kennedy</td>
                                                                    <td>Senior Marketing Designer</td>
                                                                    <td>London</td>
                                                                    <td>43</td>
                                                                    <td>2012/12/18</td>
                                                                    <td>$313,500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tatyana Fitzpatrick</td>
                                                                    <td>Regional Director</td>
                                                                    <td>London</td>
                                                                    <td>19</td>
                                                                    <td>2010/03/17</td>
                                                                    <td>$385,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Michael Silva</td>
                                                                    <td>Marketing Designer</td>
                                                                    <td>London</td>
                                                                    <td>66</td>
                                                                    <td>2012/11/27</td>
                                                                    <td>$198,500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Paul Byrd</td>
                                                                    <td>Chief Financial Officer (CFO)</td>
                                                                    <td>New York</td>
                                                                    <td>64</td>
                                                                    <td>2010/06/09</td>
                                                                    <td>$725,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gloria Little</td>
                                                                    <td>Systems Administrator</td>
                                                                    <td>New York</td>
                                                                    <td>59</td>
                                                                    <td>2009/04/10</td>
                                                                    <td>$237,500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>41</td>
                                                                    <td>2012/10/13</td>
                                                                    <td>$132,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dai Rios</td>
                                                                    <td>Personnel Lead</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>35</td>
                                                                    <td>2012/09/26</td>
                                                                    <td>$217,500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jenette Caldwell</td>
                                                                    <td>Development Lead</td>
                                                                    <td>New York</td>
                                                                    <td>30</td>
                                                                    <td>2011/09/03</td>
                                                                    <td>$345,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Yuri Berry</td>
                                                                    <td>Chief Marketing Officer (CMO)</td>
                                                                    <td>New York</td>
                                                                    <td>40</td>
                                                                    <td>2009/06/25</td>
                                                                    <td>$675,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Caesar Vance</td>
                                                                    <td>Pre-Sales Support</td>
                                                                    <td>New York</td>
                                                                    <td>21</td>
                                                                    <td>2011/12/12</td>
                                                                    <td>$106,450</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Doris Wilder</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>Sidney</td>
                                                                    <td>23</td>
                                                                    <td>2010/09/20</td>
                                                                    <td>$85,600</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Angelica Ramos</td>
                                                                    <td>Chief Executive Officer (CEO)</td>
                                                                    <td>London</td>
                                                                    <td>47</td>
                                                                    <td>2009/10/09</td>
                                                                    <td>$1,200,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gavin Joyce</td>
                                                                    <td>Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>42</td>
                                                                    <td>2010/12/22</td>
                                                                    <td>$92,575</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jennifer Chang</td>
                                                                    <td>Regional Director</td>
                                                                    <td>Singapore</td>
                                                                    <td>28</td>
                                                                    <td>2010/11/14</td>
                                                                    <td>$357,650</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brenden Wagner</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>28</td>
                                                                    <td>2011/06/07</td>
                                                                    <td>$206,850</td>
                                                                </tr>

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