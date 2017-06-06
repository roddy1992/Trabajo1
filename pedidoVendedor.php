<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Vendedor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Bootstrap 3 template for corporate business" />
        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
        <link href="css/cubeportfolio.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.min.css">
        <!-- libreria exporta excel -->  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <!-- Theme skin -->
        <link id="t-colors" href="skins/default.css" rel="stylesheet" />

        <!-- boxed bg -->
        <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

        <!-- =======================================================
            Theme Name: Sailor
            Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
            Author: BootstrapMade
            Author URL: https://bootstrapmade.com
        ======================================================= -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
    </head>
    <body>



        <div id="wrapper">
            <!-- start header -->
            <header>
                <div class="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="topleft-info">
                                    <li><i>Bienvenid@    </i><?php echo $_SESSION['nombreusuario']; ?> </li>                                    
                                    <li><br><a href=logout.php>Cerrar Sesion</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div id="sb-search" class="sb-search">
                                    <form>
                                        <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search" title="Click to start searching"></span>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>	

                <div class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="inicioVendedor.php"><img src="img/logo.png" alt="" width="199" height="52" /></a>
                        </div>
                        <div class="navbar-collapse collapse ">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a href="inicioVendedor.php">Inicio</a>						
                                </li>                                                      
                                <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Reporteria <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">    
                                        <li><a href="reportesemanalVendedor.php">Ganancia Semanales</a></li>                                       
                                    </ul>
                                </li>
                                <li><a href="pedidoVendedor.php">Pedido</a></li>
                                <li class="dropdown">
                                    <a href="pagoVendedor.php" >Solicitud de Pago</a>                         
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
            <section id="featured" class="bg">
                <!-- start slider -->

                <!-- start slider -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Slider -->
                            <div id="main-slider" class="main-slider flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="img/slides/flexslider/1.jpg" alt="" />
                                        <div class="flex-caption">
                                            <h3>Deepak Chopra</h3> 
                                            <p>La manera más fácil de tener lo que quieres, es ayudar a otros a tener lo que quieren</p> 
                                            <a href="#" class="btn btn-theme">Learn More</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/slides/flexslider/2.jpg" alt="" />
                                        <div class="flex-caption">
                                            <h3>Herb Kelleher</h3> 
                                            <p>“Tenemos un plan estratégico. Se llama hacer las cosas bien”</p> 
                                            <a href="#" class="btn btn-theme">Learn More</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/slides/flexslider/3.jpg" alt="" />
                                        <div class="flex-caption">
                                            <h3>Jack Welch</h3> 
                                            <p>Si tus acciones inspiran a otros a soñar más, aprender más, hacer más y a ser mejores; eres un líder</p> 
                                            <a href="#" class="btn btn-theme">Learn More</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/slides/flexslider/4.jpg" alt="" />
                                        <div class="flex-caption">
                                            <h3>Proverbio chino</h3> 
                                            <p>Podemos escoger lo que vamos a sembrar, pero estamos obligados a cosechar aquello que plantamos; trabaja inteligentemente</p> 
                                            <a href="#" class="btn btn-theme">Learn More</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/slides/flexslider/5.jpg" alt="" />
                                        <div class="flex-caption">
                                            <h3>Henry Ford</h3> 
                                            <p>“El fracaso es solo la oportunidad de comenzar de nuevo de forma más inteligente”</p> 
                                            <a href="#" class="btn btn-theme">Learn More</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/slides/flexslider/6.jpg" alt="" />
                                        <div class="flex-caption">
                                            <h3>Proverbio chino</h3> 
                                            <p>Trabajar en equipo divide el trabajo y multiplica los resultados; permitiéndonos disfrutar de las cosas buenas de la vida</p> 
                                            <a href="#" class="btn btn-theme">Learn More</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end slider -->
                        </div>
                    </div>
                </div>	
            </section>

            <!--Inicio formulario-->
            <section>
                <div class="container">
                    <form class="well form-horizontal"  id="contact_form">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Su Perfil de Vendedor                          
                            </legend>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label" >Su Codigo de Vendedor</label> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                        <input  name="codigoVendedor" id="codigoVendedor" placeholder="Representante" class="form-control"  type="text" value="<?php echo $_SESSION['codigo']; ?>" readonly placeholder=".col-xs-3">
                                    </div>
                                </div>
                            </div>
                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label" >Categoria del Vendedor</label> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="categoriadelVendedor" id="categoriadelVendedor" placeholder="" class="form-control"  type="text" readonly placeholder=".col-xs-3">
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </section>
            <!--fin formulario-->

            <section id="content">
                <div class="container">
                    <div class="row">
                        <!--Inicio Tabla-->
                        <section>
                            <div class="container ">
                                <div id="consultastock">
                                    <center><h2>Pedido de Producto</h2></center>
                                    <table class="table-hover">
                                        <tr>

                                            <td class="col-lg-9">Fabricas con Stock de Productos<select class="form-control show-menu-arrow fabricasconstock" id="fabricasconstock" name="fabricasconstock"  data-style="btn-info"></td> 
                                        </tr>
                                    </table>
                                    <input type="button" class="btn btn-block" id="btnExport" value=" Exportar a Excel " />
                                    <table class="table table-striped table-bordered col-lg-6">                       
                                        <thead>
                                            <tr>
                                                <th class="col-lg-3">Codigo de Fabrica</th>                                                         
                                                <th class="col-lg-3">Stock de Producto</th> 
                                                <th class="col-lg-3">Realizar Pedido</th> 
                                            </tr>
                                        </thead>
                                        <tbody id="tablapedidoVendedor">

                                        </tbody>
                                    </table>
                                </div>                                  
                                <script>
                                    $("#btnExport").click(function (e) {
                                        window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#consultastock').html()));
                                        e.preventDefault();
                                    });
                                </script>
                            </div>
                        </section>

                        <center>
                            <!-- Modal -->
                            <div class="modal fade" id="Modalpedido" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Realizar Pedido</h4>
                                        </div>
                                        <div class="modal-body" style="background:rgb(227, 227, 227)">
                                            <table class=" table-responsive">   
                                                <tr>
                                                    <td>
                                                        <!-- Text input-->

                                                        <div class="form-group">
                                                            <label class="control-label" >Su Codigo de Vendedor</label> 
                                                            <div class="inputGroupContainer">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                                                    <input  name="codigoVendedor" id="codigoVendedor" placeholder="Representante" class="form-control"  type="text" value="<?php echo $_SESSION['codigo']; ?>" readonly placeholder=".col-xs-3">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>                                                        
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class=" control-label" >Codigo de Fabrica</label> 
                                                            <div class=" inputGroupContainer">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                                                    <input name="codFabmodalPedidoVendedor" id="codFabmodalPedidoVendedor" class="form-control"  type="text" readonly>                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>    
                                                <tr>
                                                    <td>
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class=" control-label" >Cantidad de Producto</label> 
                                                            <div class=" inputGroupContainer">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
                                                                    <input name="cantidadpedidoVendedor" id="cantidadpedidoVendedor" placeholder="Cantidad de Pedido" maxlength="9" class="form-control"  type="text">                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>    
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success guardarpedidoVendedor">Guardar <span class="glyphicon glyphicon-saved"></span></button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- fin Modal -->
                        </center>

                        <div id="sub-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="copyright">
                                            <p>&copy; Sailor Theme - All Right Reserved</p>
                                            <div class="credits">
                                                <!-- 
                                                    All the links in the footer should remain intact. 
                                                    You can delete the links only if you purchased the pro version.
                                                    Licensing information: https://bootstrapmade.com/license/
                                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                                                -->
                                                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="social-network">
                                            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </footer>
                    </div>
                    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

                    <!-- Placed at the end of the document so the pages load faster -->
                    <script src="js/jquery.min.js"></script>
                    <script src="js/modernizr.custom.js"></script>
                    <script src="js/jquery.easing.1.3.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
                    <script src="plugins/flexslider/flexslider.config.js"></script>
                    <script src="js/jquery.appear.js"></script>
                    <script src="js/stellar.js"></script>
                    <script src="js/classie.js"></script>
                    <script src="js/uisearch.js"></script>
                    <script src="js/jquery.cubeportfolio.min.js"></script>
                    <script src="js/google-code-prettify/prettify.js"></script>
                    <script src="js/animate.js"></script>
                    <script src="js/custom.js"></script>
                    <script src="JSMios/Ingreso_a_la_Base_Vendedor.js"></script>
                    <!-- jquery ui -->
                    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
                    <script type="text/javascript">
                                    $("#fechainicioreportesemanalVendedor").datepicker();
                                    $("#fechafinreportesemanalVendedor").datepicker();
                    </script>

                    </body>
                    </html>