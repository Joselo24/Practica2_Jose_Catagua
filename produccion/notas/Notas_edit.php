<?php
  session_start();

  $id = $_GET['id'];

 // echo $id;
 include_once('Notas.php');
 include_once('NotasCollector.php');
 $NotasCollectorObj = new NotasCollector();
 $ObjNotas = $NotasCollectorObj->showNotasId($id);
 //print_r($ObjTransportista);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Educacion">
    <meta name="author" content="E-learning">
    <title>B-Smart</title>
    
    <!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/bs1.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  Call Us </p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home.html">Home</a></li>
                        <li><a href="about-us - copia.html">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diario Virtual <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="construccion.html">Diario</a></li>                                
                                <li><a href="horario.html">Horario de Clases</a></li>
                                <li><a href="construccion.html">Horario de Examenes</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Asignaturas <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="materias.html">Materia</a></li>                                
                                <li><a href="construccion.html">Cuestionarios</a></li>
                                <li><a href="construccion.html">Otros...</a></li>
                            </ul>
                        </li>    
                           <!-- target="info"-->
                        <li><a href="construccion.html" >Calificaciones</a></li>                        
                        <li><a href="construccion.html">Planificaciones</a></li> 
                        <li><a href="contactenos.html">Contactenos</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->


<!--/************************* IFRAME centro *************************************************************
    <section id="main-slider" class="no-margin">
      <div class="item">       
        <iframe name="info"  height="730"  src="inicio.html"  ></iframe>         
      </div>
   </section>
************************ Fortmulario **************************************************************-->
<section id="contact-page">
        <div class="container">
            <div class="center">
                <br>
                <br>        
                
                <h2>Calificaciones</h2>
                <p class="lead">B-Smart</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>

                <form action= "Notas_update.php" method="post" action="form-horizontal"> 
                    <div class="col-sm-8 col-sm-offset-4"  >
                            
                            <input type="number" name="id_nota" required="required" style="visibility:hidden" readonly value = "<?php echo $ObjNotas->getid_nota(); ?>" >
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                    <div class="col-sm-5 col-sm-offset-1">
                       
                        <div class="form-group">
                            <label>Fecha *</label>
                            <input type="date" name="anio" class="form-control" required="required" value = "<?php echo $ObjNotas->getanio(); ?>">
                        </div>
                        <div class="form-group">
                            <label>1er Parcial *</label>
                            <input type="number" name="nota1" class="form-control" required="required" value = "<?php echo $ObjNotas->getnota1(); ?>">
                        </div>
                        <div class="form-group" >
                            <label>2do Parcial *</label>
                            <input type="number" name="nota2" class="form-control" required="required"value = "<?php echo $ObjNotas->getnota2(); ?>">
                        </div>
                        <div class="form-group">
                            <label>3er Parcial *</label>
                            <input type="numbre" name="nota3" class="form-control" value = "<?php echo $ObjNotas->getnota3(); ?>">
                        </div> 
                                               
                    </div>
                    <div class="col-sm-5">
                        
                        <div class="form-group">
                            <label>Examen *</label>
                            <input type="number" name="nota4" class="form-control" required="required" value = "<?php echo $ObjNotas->getnota4(); ?>">
                        </div>
                        <div class="form-group">
                            <label>Promedio *</label>
                            <input type="number" name="promedio" class="form-control" required="required" value = "<?php echo $ObjNotas->getpromedio(); ?>">
                        </div>
                        <div class="form-group">
                            <label>Recuperación *</label>  
                            <input type="number" name="recuperacion" class="form-control" required="required" value = "<?php echo $ObjNotas->getrecuperacion(); ?>">
                            
                        </div>                        
                        
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-4 col-xs-8">
                            <input type="submit" class="btn btn-primary" value="Actualizar">
                            <input type="reset" class="btn btn-primary" value="Limpiar">
                            <input type="button" value="Regresar" OnClick="history.back()" class="btn btn-primary">     
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

<!--/************************* IFRAME centro **************************************************************-->


<!--/************************* Foot **************************************************************-->
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3><a href="#">Actividades académicas</a></h3>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                       <h3><a href="#">Calendario académico</a></h3>
                     
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3><a href="#">Nuevos cursos</a></h3>
                    
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3><a href="#">Anuncios de profesores</a></h3>
                
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
   
    

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/wow.min.js"></script>
</body>
</html>