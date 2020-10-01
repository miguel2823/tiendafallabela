<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resources/img/t.ico">

    <title>Tutox</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/resources/css/estilo.css" rel="stylesheet">

    <script>
    // Evitar que el menú desplegable se cierre al hacer clic dentro del formulario
    $(document).on("click", ".action-buttons .dropdown-menu", function(e){
    e.stopPropagation();
    });
    </script>

  </head>
  <body style="background-color: #D3D3D3;">

    <nav class="navbar navbar-expand-md navbar-dark " style="background-color:#696969;">
      <img src="<?php echo base_url();?>/resources/img/t.ico" alt="">
      <a class="navbar-brand" href="#">Tutox</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="QuienesSomos.php">¿Quienes somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Foros</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <!-- AQUI CREO LOS LOGINS -->
        <!-- 1) INGRESA CON RED SOCIAL -->
        <div class="navbar-nav ml-auto action-buttons">
      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4">Ingresar</a>
                <div class="dropdown-menu action-form">
          <form action="/examples/actions/confirmation.php" method="post">
            <p class="hint-text">Ingresa con tu cuenta</p>
            <div class="form-group social-btn clearfix">
              <a href="#" class="btn btn-secondary facebook-btn float-left"><i class="fa fa-facebook"></i> Facebook</a>
              <a href="#" class="btn btn-secondary google-btn float-right"><i class="fa fa-google"></i> Google</a>
            </div>
            <div class="or-seperator"><b>o</b></div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Usuario" required="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Clave" required="required">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Login">
            <div class="text-center mt-2">
              <a href="#">Olvidaste tu contraseña?</a>
              <a href="#">Registrarte nueva cuenta!</a>
            </div>
          </form>
                </div>
      </div>
      </div>
    </div>
    </nav>

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" datSa-interval="10000">
            <img src="<?php echo base_url();?>/resources/img/word.jpg" class="d-block w-100" alt="..." style="width: 100%">
            <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1 class="cword">Word</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Inscribirse</a></p>
            </div>
          </div>
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="<?php echo base_url();?>/resources/img/excel.jpg" class="d-block w-100" alt="..." style="width: 100%">
            <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1 class="cexcel">Excel</h1>
              <p><a class="btn btn-lg btn-success" href="#" role="button">Inscribirse</a></p>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>/resources/img/powerpoint.jpg" class="d-block w-100" alt="..." style="width: 100%">
            <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1 class="cpower">PowerPoint</h1>
              <p><a class="btn btn-lg btn-warning" href="#" role="button">Inscribirse</a></p>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>/resources/img/facebook.jpg" class="d-block w-100" alt="..." style="width: 100%">
            <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1 class="cword">Facebook para negocios</h1>
              <p><a class="btn btn-lg btn-warning" href="#" role="button">Inscribirse</a></p>
            </div>
          </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" style="padding: 30px">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-0-" src="<?php echo base_url();?>/resources/img/alfabetizacion.jpg" alt="Generic placeholder image" width="100%">
          <h2 class="ntit">Alfabetización Digital</h2>
          <p class="text-justify">La alfabetización digital es la capacidad de una persona para realizar diferentes tareas en un ambiente digital. Esta definición genérica engloba muchos matices ya que incluiría la habilidad para localizar, investigar y analizar información usando la tecnología, así como ser capaces de elaborar contenidos y diseñar propuestas a través de medios digitales.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2 class="ntit">Importancia</h2>
          <p class="text-justify">Es crucial, tener ya establecido que la alfabetización no solo se abarca el hecho de tener el conocimiento de leer y/o escribir, ya que también significa el desarrollo de las capacidades personas en las área tecnológicas y cognitivas, fundamentales para una mejor adaptabilidad y desenvolvimiento ante la sociedad, formando así un mejor ciudadano por ende una mejor cuidad o nación.</p>
          <img class="rounded-0-" src="<?php echo base_url();?>/resources/img/importancia.jpg" alt="Generic placeholder image" width="100%">
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2 class="ntit">Anuncio</h2>
          <img class="rounded-0-" src="<?php echo base_url();?>/resources/img/anuncio.jpg" alt="Generic placeholder image" width="100%">
          <p class="text-justify">Según, estudios que realizo la UNESCO hace mención que el 15% de la población global es analfabeta. Entonces, ya no estés en ese grupo del 15%, entra a nuestros cursos gratis que te ayudaran a tener conocimientos de la época, al igual, que puedes conseguir trabajo con la educación básica que se te brinda esta aplicación web y así poder aportar a la sociedad. ¡No lo pienses más y atrévete a ver nuestros videos!
          </p>
        </div><!-- /.col-lg-4 -->

      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
      <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2 class="ntit">INFORMACIÓN</h2>  
          <ul>
            <li>Correo: atencion@tutox.com</li>
            <li>Telefono: 5555-444</li>
            <h5 class="ntit">Ubicación</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.273770234568!2d-77.06986358542473!3d-11.95553759152814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce287e95901b%3A0xdfb23633430bbc92!2sUniversidad%20C%C3%A9sar%20Vallejo%20Lima%20Norte!5e0!3m2!1ses!2spe!4v1600748545317!5m2!1ses!2spe" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="card panel1" style="width: 100%;height: 100%;">
            <div class="card-body">
              <?php $validation = \Config\Services::validation(); ?>
              <?= form_open('Portada/doSave', array('id' => 'frmreg','name' => 'frmreg')) ?>
              <h2 class="text-center aaa">INSCRIPCIÓN</h2>
          <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nombre">Nombre :</label>
                  <input type="text" class="form-control" id="nombre"
                   name="nombre" title="Solo alfanumericos" placeholder="Ingresar Nombre" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="apellidos">Apellidos :</label>
                  <input type="text" class="form-control" id="apellidos"
                   name="apellidos" title="Solo alfanumericos" placeholder="Ingresar Apellidos" required>
                </div>
              </div>
              <div class="form-group">
                <label for="correo">Correo :</label>
                <input type="email" class="form-control" id="correo"
              name="correo" title="Formato correo" placeholder="Ingresar Correo" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fecha">Dirección :</label>
                  <input type="text" class="form-control" id="dir"
                 name="dir" title="Solo alfanumericos" placeholder="Ingresar Direccion" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="tel">Teléfono :</label>
                  <input type="text" class="form-control" id="tel"
                  name="tel" title="Solo digitos" placeholder="Ingresar Telefono">
                </div>
              </div>
              
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fecha">Fecha Nacimiento :</label>
                  <input type="date" class="form-control" id="fecha"
                 name="fecha" title="Formato Fecha" placeholder="Ingresar Fecha Nacimiento" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="dni">DNI :</label>
                  <input type="text" class="form-control" id="dni"
                  name="dni" title="Solo digitos" placeholder="Ingresar DNI">
                </div>
              </div>
                <div class="form-group">
                  <label for="sexo">Sexo :</label>
                  <select name="sexo" id="sexo" class="custom-select">
                  <option selected>Seleccionar</option>
                  <option value="0">Femenino</option>
                  <option value="1">Masculino</option>
                </div>
                </select>
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-dark form-control">REGISTRAR</button>
              </div>
            </form>
            </div>
          </div>
          
        </div>
      </div>

      <!-- FOOTER -->
      <footer>
        <p class="float-right tex"><a href="#">Back to top</a></p>
        <p class="text-center">&copy; 2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>