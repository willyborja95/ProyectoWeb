<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo2.png">
    <title>Easy Notes</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <!-- NAVBAR
  ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#laApp"><strong>Easy Notes</strong></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse pull-right">
              <ul class="nav navbar-nav">
                <li><a href="#laApp">La App</a></li>
                <li><a href="#caracteristicas">Características</a></li>
                <li><a href="#registro">Registro</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Carousel
    ================================================== -->
    <div id="laApp" class="carousel slide active" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/home1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><strong>Contenido Organizado</strong></h1>
              <p>Easy Notes te ayuda a organizar las ideas centrales de uno o varios temas temas; para que puedas estudiar de una manera fácil y rápida.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/home5.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><strong>Siempre Contigo</strong></h1>
              <p>Tus apuntes siempre a tu alcance.<br> Estés donde estés, vayas donde vayas!</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div><!-- /.carousel -->
      <!--Seccion de Características-->
      <div id="caracteristicas" class="active">
        <div class="row featurette">
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <h2 class="featurette-heading">Manten tus apuntes clasificados, <span class="text-muted">en registros separados.</span></h2>
            <p class="lead">Easy note te permite organizar todos tus apuntes por medio de carpetas. Crea tantas carpetas como materias tengas.</p>
          </div>
          <div class="col-md-3">
            <img class="featurette-image img-responsive img-circle imagen-caract" src="images/caracteristica1.jpg" alt="Generic placeholder image">
          </div>
          <div class="col-md-1"></div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-1"></div>
          <div class="col-md-7 col-md-push-3">
            <h2 class="featurette-heading">Organiza tus anotaciones!<span class="text-muted"> <br>Utiliza títulos, subtítulos y enlaces</span></h2>
            <p class="lead">Con Easy Notes es fácil estructurar el contenido de tus apuntes. Incorpora títulos, subtítulos, imágenes y archivos adjuntos a tus escritos!.</p>
          </div>
          <div class="col-md-3 col-md-pull-7">
            <img class="featurette-image img-responsive center-block img-circle imagen-caract" src="images/caracteristica2.png" alt="Generic placeholder image">
          </div>
          <div class="col-md-1"></div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <h2 class="featurette-heading">Utiliza tu tiempo eficientemente!</h2>
            <p class="lead">Cuando quieras revisar tus apuntes, Easy Notes te brindará una guía por tus anotaciones, agrupando el contenido por temas y subtemas. Ahora sí, el estudio es mucho más fácil. </p>
          </div>
          <div class="col-md-3">
            <img class="featurette-image img-responsive center-block img-circle imagen-caract" src="images/caracteristica3.jpg" alt="Generic placeholder image">
          </div>
          <div class="col-md-1"></div>
        </div>
        <!-- /END THE FEATURETTES -->
        </div><!-- /.container -->
        <!-- FOOTER -->
        <div id ="registro" class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <form action="operaciones/insertarUsuario.php" method="POST" class="form-signin">
              <h2 class="form-signin-heading">Regístrate ¡Super fácil y rápido!</h2><br>
              <input type="text" id="nombres" name="nombres" class="form-control mayus"  placeholder="Nombres" required autofocus><br>
              <input type="text" id="apellidos"name="apellidos" class="form-control mayus" placeholder="Apellidos" required autofocus><br>
              <input type="text" id="userName" name="userName" class="form-control minus" placeholder="Usuario" required><br>
              <input type="email" id="email" name="email" class="form-control" placeholder="Email" required><br>
              <input type="password" id="password1" name="password1" class="form-control" placeholder="Password" required><br>
              <input type="password" id="password1" name="password2" class="form-control" placeholder="Verifcar Password" required><br>
              <button class="btn btn-lg btn-primary btn-block">Crear Cuenta</button>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <form action="operaciones/autenticacion.php" method="POST" class="form-signin">
              <h2 class="form-signin-heading">Identifícate aquí!</h2><br>
              <input type="text" name="userName" class="form-control" placeholder="Nombre de usuario" required><br>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"><strong>Recordar credenciales</strong>
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
            </form>
          </div>
          <div class="col-md-1"></div>
        </div>
        <footer>
          <div class="row">
            <div class="col-md-6">
              <h4>Easy Notes | Todos los derechos reservados</h3>
              <h5>Loja, Ecuador</h4>
              <h6>@willyborja95</h5>
            </div>
            <div class="col-md-6">
              <h3><em>"Contigo, construímos aprendizajes significativos"</em></h3>
              <h4>- Easy Notes</h4>
            </div>
          </div>
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
      </body>
    </html>