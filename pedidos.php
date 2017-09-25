 <?php
// $nombre = $_POST['pedidoNombre'];
// $mail = $_POST['pedidoCorreo'];
// $empresa = $_POST['pedidoempresa'];
// $tel = $_POST['pedidoTel'];

// $header = 'From: ' . $mail . " \r\n";
// $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
// $header .= "Mime-Version: 1.0 \r\n";
// $header .= "Content-Type: text/plain";

// $mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $empresa . " \r\n";
// $mensaje .= " Su e-mail es: " . $mail . " \r\n";
// $mensaje .= " Su teléfono es: " . $tel . " \r\n";
// $mensaje .= " Le interesa el producto/servicio: " . $_POST['pedidoTipo'] . " \r\n";
// $mensaje .= "Favor de ponerse en contacto. Enviado el " . date('d/m/Y', time());

// $para = 'alejandra.reyes@vantis.mx';
// $asunto = 'Contacto Vanplastic.mx';

// mail($para, $asunto, utf8_decode($mensaje), $header);

//echo '&estatus=ok&';

//session_start();

$nombre = $_POST['pedidoNombre'];
$mail = $_POST['pedidoCorreo'];
$empresa = $_POST['pedidoempresa'];
$tel = $_POST['pedidoTel'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $empresa . " \r\n";
$mensaje .= " Su e-mail es: " . $mail . " \r\n";
$mensaje .= " Su teléfono es: " . $tel . " \r\n";
$mensaje .= " Le interesa el producto/servicio: " . $_POST['pedidoTipo'] . " \r\n";
$mensaje .= "Favor de ponerse en contacto. Enviado el " . date('d/m/Y', time());

$para = 'alejandra.reyes@vantis.mx';
$asunto = 'Contacto Vanplastic.mx';

$success = mail($para, $asunto, utf8_decode($mensaje), $header);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pedido - Vanplastic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Expertos en Inyección de Plástico Polietileno de Alta Densidad">
        <link rel="icon" type="img/favicon.png" href="img/favicon.png"/>
        <!--Colocar el favicon en tu directorio raíz -->
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <style>
          .bg-primary{

          }
        </style>
        <!--<script src="js/vendor/modernizr-2.8.3.min.js"></script>-->
    </head>
    <body>      
      <header>
             <!--INICIA MENU -->
            <nav class="navbar navbar-default navbar-fixed-top menu ">
             <div class="container">
                <div class="navbar-header">
                    <a href="index.html"><img src="img/logotipo.png" alt="logotipo" class="vanplastic"></a>
                    <div class="redesmovil">
                         <a class="face" href="https://www.facebook.com/VanPlastic-244243679410618/"><img src="img/facebook.png" alt="facebook" ></a>
                       <a href="preguntas.html" class="faqs"><i class="glyphicon glyphicon-question-sign"></i></a>
                    </div>
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuvanplastic" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
              </div>
                <div class="collapse navbar-collapse" id="menuvanplastic">
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Líneas<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="industrial.html">Línea Industrial</a></li>
                        <li><a href="hogar.html">Línea Hogar</a></li>
                        <li><a href="maquila.html">Servicio de Maquila</a></li>
                        <li><a href="otrosproductos.html">Otros Productos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="catalogo.html">Catálogo</a></li>

                        </ul></li>
                        <li class="active"><a href="pedidos.php">Pedido</a></li>
                        <li><a href="contacto.html">Contacto</a></li>
                        <li class="facemenu"><a class="face" href="https://www.facebook.com/VanPlastic-244243679410618/"><img src="img/facebook.png" alt="facebook" ></a></li>
                        <li class="facemenu"><a href="preguntas.html" class="faqs"><i class="glyphicon glyphicon-question-sign"></i></a></li>
                  </ul> 
                </div>
              </div>
            </nav> 
            <!-- FIN MENU -->
            </header>
      <!--contenido de tu página-->
  <main class="grayback">
        
    <div class="container main2">
       <section class="row">
            <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
              <img class=img-fluid src="img/pedidos@1x.png" alt="Responsive image">
              <h1 class="llameya">¡CONTÁCTANOS! (55) 1660 3946</h1>
                <section class="clearfix"></section>
            </section>
          
            <section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
               <h1 class="txtpedidos">PEDIDOS</h1>

                <form method="post" action=""  id="contactForm">
                <div class="form-group">
                  <label class="form-control-label" for="formGroupNombreInput">Nombre</label>
                  <input type="text" class="form-control" name="pedidoNombre"  id="pedidoNombre" placeholder="Escribe tu nombre">
                </div>
                 <div class="form-group">
                  <label class="form-control-label" for="formGroupNombreInput">Empresa</label>
                  <input type="text" class="form-control" name="pedidoempresa" id="pedidoempresa" placeholder="¿Para qué empresa trabajas?">
                </div>    
                <div class="form-group">
                  <label class="form-control-label" for="formGroupTelefonoInput2">Teléfono</label>
                  <input type="text" class="form-control" name="pedidoTel" id="pedidoTel" placeholder="¿A qué número te podemos llamar?">
                </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Correo Electrónico</label>
                      <input type="email" class="form-control" name="pedidoCorreo" id="pedidoCorreo" placeholder="Contacto de correo">
                    </div>
                    <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formpad">
                    <div class="form-group">  
                            <label for="exampleFormControlSelect1">Producto/Servicio de interés</label>
                            <select class="form-control"  name="pedidoTipo"  id="exampleFormControlSelect1">
                              <option>CESTA BANANERA</option>
                              <option>CESTA MARÍA CALADA</option>
                              <option>CESTA MARÍA FONDO PLANO</option>
                              <option>CESTA QUETZAL LIGERA</option>
                              <option>CESTA QUETZAL</option>
                              <option>CESTA LECHERA</option>
                              <option>CUBETA #14 FLEXIBLE</option>
                              <option>CUBETA #18 FLEXIBLE</option>
                              <option>CUBETA #12 FLEXIBLE</option>
                              <option>CUBETA #8 DE BARRIL</option>
                              <option>CESTA OSTRICOLA</option>
                              <option>CESTO PARA DESHIDRATAR QUESO 500 KG</option>
                              <option>CESTO PARA DESHIDRATAR QUESO 1.500 KG</option>
                              <option>CESTA FONDO ONDULADO</option>
                              <option>SILLA</option>
                              <option>SERVICIOS: INYECCIÓN DE PLÁSTICOS</option>
                              <option>SERVICIOS: ASESORÍA Y SOLUCIONES PARA NUEVOS PROYECTOS</option>
                              <option>PRODUCTOS VARIOS</option>
                              <option>SERVICIOS VARIOS</option>
                              <option>OTROS</option>
                            </select>
                         
                          </div>
                           </section> 
                    <!--div class="form-group">
                       <section class="col-xs-12 col-sm-12 col-md-5 col-lg-5 formpad"> 
                        <label class="form-control-label" for="formGroupNombreInput">Cantidad</label>
                        <input type="text" class="form-control" id="formGroupNombreInput" placeholder="Cantidad">
                       </section>
                    </div>
                     <section class="col-xs-12 col-sm-12 col-md-1 col-lg-1 formpad"> 
                     </section>
                       <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formpad"> 
                    <div class="form-group">
                     
                        <label for="exampleFormControlSelect1">Material</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>N/A</option>
                          <option>Reproceso</option>
                          <option>Vírgen</option>
                        </select>
                       
                      </div>
                       </section>
                           <section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 formpad">
                      <div class="form-group form-check-inline">
                        
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="inlineReproceso" id="inlineRadio1" value="option1"> Reproceso
                            </label>
                              </div>
                            </section>
                        
                           <section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 formpad">
                          <div class="form-group form-check-inline">
                           
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="inlineVirgen" id="inlineRadio2" value="option2"> Virgen
                            </label>
                           
                         </div>
                          </section-->
                          <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formbaja">
                            <button type="submit" class="btn btn-primary center-block">ENVIAR</button>  
                          </section>
                </form><br>
                    <div id="msgSubmit" class="h3 text-center hide ">enviado!</div>
                 
                </section>
            </div>   

            
<!--div class="containerpublicitario">
    <section class="row">
        <section class="col-xs-12 col-sm-12 col-md-11 col-lg-11"> 
          <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Espacio Publicitario</label>
              <select class="form-control" id="exampleFormEspacioSelect1">
                <option>Auto relieve</option>
                <option>Espacio</option>
                <option>Espacio</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Modo de Envió</label>
              <select class="form-control" id="exampleFormEspacioSelect1">
                <option>En Planta (El cliente envía su propio transporte y recoge el producto).</option>
                <option>En Sitio (Enviámos transporte con nuestro producto *Costo Adicional)</option>
              </select>
            </div>
            <div class="form-group">
            <label for="inputAddress" class="col-form-label">Dirección  <small>*Dependiendo del kilometraje, enviar dirección para cotización de envió.</small></label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Dirección">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity" class="col-form-label">Ciudad</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState" class="col-form-label">Estado</label>
              <select id="inputState" class="form-control">Choose</select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip" class="col-form-label">Código Postal</label>
              <input type="text" class="form-control" id="inputZip">
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">Cargar Logotipo <small> *Formato png ó jpg con las siguientes medidas establecidas 00px X 00px.</small></label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
       
          <button type="submit" class="btn btn-primary">ENVIAR</button>  
        </form> 
      </section>
    </section>
</div-->

     <!--Esta sección en vez de que sea infografía, podría ser mejor aprovechada como banner con 4 slides que expliquen los pasos a seguir
          <div class="container levantamiento">
            <section class="row">
                 <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <img class=img-fluid src="img/levantamientohorizontal@1x.jpg" alt="Responsive image">
                     <section class="clearfix"></section>
                 </section>
       </div>  
    --> 
  </main>
        
   <footer class="footer row">
    <section class="container">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="#">
                    <figure class="logofooter">
                   
                    <img src="img/logovertical@1x.png" alt="Logotipo Vanplastic" class="logoblanco">
                    
                    </figure>
                    </a>
                    <nav class="contacto">(55) 1660 3946 contacto@vanplastic.mx<br> Copyright 2017 Vanplastic Todos los derechos reservados. Política de Privacidad <br> Camino Nacional 74, ACC Eje Norte Sur, Nuevo Parque Industrial,<br> San Juan del Río, Querétaro, México, C.P 76806 </nav>
              
            </article>
            </section>
        </footer>
           
     
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <!--script src="js/plugins.js"></script-->
        <script src="js/main.js"></script>
        
 
        <!-- Google Analytics. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
