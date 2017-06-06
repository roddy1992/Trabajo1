<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Adiministrador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Bootstrap 3 template for corporate business" />
        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
        <link href="css/cubeportfolio.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />

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
                                    <li><i>Bienvenid@    </i><?php echo $_SESSION['nombreusuario']; ?></li>
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
                            <a class="navbar-brand" href="inicioAdministrador.php"><img src="img/logo.png" alt="" width="199" height="52" /></a>
                        </div>
                        <div class="navbar-collapse collapse ">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a href="inicioAdministrador.php">Inicio</a>						
                                </li>
                                <li class="dropdown">
                                    <a href="crearfabricanteAdministrador.php" >Crear Fabricantes</a>                         
                                </li>
                                <li><a href="crearvendedorAdministrador.php">Crear Vendedor</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Reporteria <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="reportediarioAdministrador.php">Ventas Diarias</a></li>
                                        <li><a href="reportesemanalAdministrador.php">Ventas Semanales</a></li>
                                        <li><a href="reportefabricaAdministrador.php">Especifico Fabrica</a></li>
                                        <li><a href="reportevendedorAdministrador.php">Especifico Vendedor</a></li>
                                        <li><a href="reportesociosAdministrador.php">Nuevos socios</a></li>
                                    </ul>
                                </li>
                                <li><a href="pagosAdministrador.php">Pagos</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Usuarios <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="NuevoUsuarioVendedor.php">Usuarios para Vendedores</a></li>
                                        <li><a href="NuevoUsuarioFabrica.php">Usuarios para Fabricas</a></li>
                                    </ul>
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

                    <form class="well form-horizontal"  id="contact_form_Fab">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Ingreso de Nueva Fabrica                           
                            </legend>


                            <!-- Text input-->

                            <div class="form-group">
                                <h3><label class="col-md-4 control-label" >CODIGO</label> </h3>  
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                         <?php
                                        $link = mysqli_connect("localhost", "root", "");
                                        mysqli_select_db($link, "trabajo1");
                                        $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
                                        $result = mysqli_query($link, "SELECT MAX(codigoFab) as codigoFab FROM `fabricante` ");
                                        mysqli_data_seek($result, 0);
                                        $extraido = mysqli_fetch_array($result);
                                        $codigo = $extraido['codigoFab'];
                                        $nuevocodigo = explode("F", $codigo);   /// separa ;a cadeda con un caracter
                                        $aumento=($nuevocodigo[1]+1);
                                        $codigoNuevafabrica="F".$aumento;
                                        echo '<input  name="codigoFab" id="codigoFab" placeholder="Representante" class="form-control"  type="text" value="'. $codigoNuevafabrica .'" readonly>';                                      
                                        //echo 'el codigo es'.$codigo."<br>";
                                        //echo 'el codigo separado es'.($nuevocodigo[1]+1)."<br>";
                                        //echo 'el nuevo codigo es'.$codigoNuevovendedor."<br>";
                                        mysqli_free_result($result);
                                        mysqli_close($link);
                                        ?>
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nombre del Representante</label>  
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="nombreRepre" id="nombreRepre" placeholder="Representante" class="form-control"  type="text" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label" >Cedula/Ruc</label> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicons glyphicon-eye-open"></i></span>
                                        <input name="dni"  id="dni" placeholder="Numero de Identificacion" class="form-control"  type="text" maxlength="10" onchange="validarcedulaFab()" required>
                                        <div class="alert alert-danger" role="alert" id="celudafabmal" style="display:none">Valor Errado <i class="glyphicon glyphicon-remove-circle"></i>El numero de cedula no existe</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nombre de la Fabrica</label>  
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="nombreFab" id="nombreFab" placeholder="Nombre de la Fabrica" class="form-control"  type="text" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Direccion</label>  
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="direccionFab" id="direccionFab" placeholder="Direcion de la Fabrica " class="form-control"  type="text" required>
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Telefono Celular</label>  
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="cedularFab" id="cedularFab" placeholder="0999999999" class="form-control" type="text"  onchange="telefonovalido(this);" maxlength="10">
                                        <div class="alert alert-danger" role="alert" id="celularfabmal" style="display:none">Valor Errado <i class="glyphicon glyphicon-remove-circle"></i>El numero de celular no existe</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Telefono Convencional</label>  
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                        <input name="convencionalFab" id="convencionalFab" placeholder="(02)2222222" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Whatsapp</label>  
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                        <input name="whatsappFab" id="whatsappFab" placeholder="0999999999" class="form-control" type="text" onchange="whatsappvalido(this);" maxlength="10">
                                        <div class="alert alert-danger" role="alert" id="whatfabmal" style="display:none">Valor Errado <i class="glyphicon glyphicon-remove-circle"></i>El numero de celular no existe</div>
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Correo </label>  
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input name="correoFab"  id="correoFab" placeholder=" correo mas utilizado " class="form-control"  type="email">
                                    </div>
                                </div>
                            </div>

                            <!-- Success message -->
                            <div class="alert alert-success" role="alert" id="success_message_Fab" style="display:none">Ingresado <i class="glyphicon glyphicon-thumbs-up"></i> Informacion  Guardada  Exitosamente.</div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button  class="btn btn-success enviarFab">Guardar <span class="glyphicon glyphicon-saved"></span></button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </section>
            <!--Inicio formulario-->
        </div><!-- /.container -->

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
<script src="JSMios/Ingresos_a_la_Base_administrador.js"></script>
<script src="JSMios/validador.js"></script>
</body>
</html>