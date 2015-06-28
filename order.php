<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mint Wash</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fonts from Font Awsome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
         <!-- Magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/animate.css">
        <!-- Color options -->
        <link rel="stylesheet" href="css/colors/green.css">
        <!-- <link rel="stylesheet" href="css/colors/blue.css">-->
        <!-- <link rel="stylesheet" href="css/colors/yellow.css">-->
        <!-- <link rel="stylesheet" href="css/colors/purple.css">-->
        <!-- <link rel="stylesheet" href="css/colors/orange.css">-->
        <!-- <link rel="stylesheet" href="css/colors/red.css">-->
        
        <!-- Feature detection -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/plugins/html5shiv.js"></script>
          <script src="js/plugins/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <!-- Nav starts -->
     <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          <a href="index.html"><h4>Mint Wash<h4></a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.nav-collapse -->
      </div>
    </div><!-- Nav ends -->
    <!-- about begins -->
    <section id="page-about" class="page-about">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">Realiza tu Orden</h2>
                    <div class="spacer"></div>
                    <p class="section-subtitle">Tu di cuando y donde, y nosotros lo hacemos realidad</p>
                </header>
          
      </div>

    </section><!-- about ends -->
    <section id="page-services2" class="highlight">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">Orden</h2>
                    <p class="section-subtitle">Información General</p>
                </header>
          <div class="row">
              <form  class="form-horizontal" id="contact-form">
        <div class="control-group">
            <label class="control-label" for="name">Nombre</label>
            <div class="controls">
                <input type="text" name="name" id="name" placeholder="Tu nombre" class="form-control input-lg ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input type="text" name="email" id="email" placeholder="Tu email" class="form-control input-lg">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Telefono</label>
            <div class="controls">
                <input type="text" name="tel" id="tel" placeholder="Tu telefono" class="form-control input-lg">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Dirección</label>
            <div class="controls">
                <input type="text" name="direccion" id="direccion" placeholder="Calle y número (Ext,Int)" class="form-control input-lg">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Colonia</label>
            <div class="controls">
                <select id="colonia" name="colonia" class="form-control input-lg">
                        <option value="0">Roma</option>
                        <option value="1">Del valle norte</option>
                        <option value="2">Escandon</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Servicio</label>
            <div class="controls">
                <select id="servicio" name="servicio" class="form-control input-lg">
                        <option value="0">Lavado</option>
                        <option value="1">Planchado</option>
                        <option value="2">Servicio Completo</option>
                </select>
                </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Fecha</label>
            <div class="controls">
                <select id="servicio" name="servicio" class="form-control input-lg">
                        <option value="0">Lunes 20 de Abril</option>
                        <option value="1">Martes 21 de Abril</option>
                        <option value="2">Miercoles 22 de Abril</option>
                </select>
                </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Horario</label>
            <div class="controls">
                <select id="servicio" name="servicio" class="form-control input-lg">
                        <option value="0">10:30</option>
                        <option value="1">11:00</option>
                        <option value="2">11:30</option>
                        <option value="2">12:30</option>
                </select>
                </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="message">Especificaciones</label>
            <div class="controls">
                <textarea name="message" id="message" rows="8" class="form-control input-lg"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-default btn-lg btn-block">Realizar orden</button>
        </div>
    </form><!-- End contact-form -->
              
          </div>
      </div><br><br>
      <center><a style="color:#fff;" href="avisoPrivacidad.html">Aviso de privacidad</a></center>
    </section><!-- about ends -->
    <!-- highlight section begins -->
           <!-- parallax quote begins -->
       <!-- services begins -->
  

   


        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.queryloader2.min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.vegas.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script type="text/javascript"src="https://maps.googleapis.com/maps/api/js?key=&sensor=false"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/wow.js"></script>
    </body>
</html>
