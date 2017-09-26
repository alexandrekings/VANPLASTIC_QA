<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$interes = $_POST['interes'];
		$empresa = $_POST['empresa'];
		$human = intval($_POST['human']);
		$from = 'La siguiente persona hizo contacto con Vanplastic desde el sitio web. Favor de ponerse en contacto  a la brevedad:'; 
		$to = 'guadalupe.ortiz@vantis.mx'; 
		$subject = 'Contacto desde Vanplastic.mx ';
		
		$body ="Cliente: $name\n Empresa: $empresa\n Contacto: $tel\n E-Mail: $email\n Producto/Servicio que me interesa:\n $interes";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Introduzca su nombre y apellido';
		}

		// Check if name has been entered
		if (!$_POST['tel']) {
			$errTel = 'Introduzca un teléfono';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Introduzca un email valido';
		}
		
		//Check if message has been entered
		// if (!$_POST['interes']) {
		// 	$errInteres = 'Elija un producto/servicio.';
		// }
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Anti-spam incorrecto';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errTel && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Gracias. Nos pondremos en contacto a la brevedad.</div>';
	} else {
		$result='<div class="alert alert-danger">Error al enviar mensaje, intente más tarde.</div>';
	}
}
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
       
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
     
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
                        <li class="active"><a href="pedidos.html">Pedido</a></li>
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
  <main class="main grayback">
        
    <div class="container main2 vh">
       <section class="row matopbo">
            <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
              <img class=img-fluid src="img/pedidos@1x.png" alt="Responsive image">
              <h1 class="llameya">¡CONTÁCTANOS! (55) 1660 3946</h1>
                <section class="clearfix"></section>
            </section>
           
            <section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
               <h1 class="txtpedidos">PEDIDOS</h1>
                 <!--form method="post" action="" -->
                <form role="form" method="post" action="prueba.php">
                <div class="form-group">
                  <label class="form-control-label" for="formGroupNombreInput">Nombre</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Escribe tu nombre" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                  <?php echo "<p class='text-danger'>$errName</p>";?>
                </div>
                 <div class="form-group">
                  <label class="form-control-label" for="formGroupNombreInput">Empresa</label>
                  <input type="text" class="form-control" name="empresa" id="empresa" placeholder="¿Para qué empresa trabajas?" >
                </div>    
                <div class="form-group">
                  <label class="form-control-label" for="formGroupTelefonoInput2">Teléfono</label>
                  <input type="text" class="form-control" name="tel" id="tel" placeholder="¿A qué número te podemos llamar?" value="<?php echo htmlspecialchars($_POST['tel']); ?>">
                   <?php echo "<p class='text-danger'>$errTel</p>";?>
                </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Correo Electrónico</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Contacto de correo" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                      <?php echo "<p class='text-danger'>$errEmail</p>";?>
                    </div>
                    <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formpad">
                    <div class="form-group">  
                            <label for="exampleFormControlSelect1">Producto/Servicio de interés</label>
                            <select class="form-control"  name="interes"  id="interes">
                            	<option>ELIGA PRODUCTO/SERVICIO</option>
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
                            <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formbaja">

                           <div class="form-group">
						<label for="human" class="col-sm-4 control-label">2 + 3 = ?</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="human" name="human" placeholder="Respuesta">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>

					</div>
				</section>
                   
                          <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formbaja">
                            <button id="submit" name="submit" type="submit" class="btn btn-primary center-block" >ENVIAR</button>  
                          </section>
                          <section class="clearfix"></section>
                          <div class="col-sm-12">
							<?php echo $result; ?>	
						</div>
                </form><br>
                  <p id="contenido"></p>
                </section>
            </div>   

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
       
       
 
    </body>
</html>