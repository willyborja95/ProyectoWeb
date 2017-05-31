<?php
session_start();
if((isset($_SESSION["codigoUsuario"])) AND (isset($_SESSION["nombres"])) AND (isset($_SESSION["apellidos"]))){
  $codigoUsuario=$_SESSION["codigoUsuario"];
}else{
header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/logo2.png">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    
    <title>Easy Notes</title>
  </head>
  <!-- Bootstrap core CSS -->
  <body>
    <header>
        <h3 id="lblBienvenida">Bienvenido, <?php echo $_SESSION["nombres"]." ".$_SESSION["apellidos"]?></h3>
        <section id="grpCuenta">
          <img id="imgUser" src="../images/user.png">
          <h3 id="cmbCuenta">Cerrar Sesión</h3>
        </section>
    </header>
    <section class="row text-center" id="visualizarDirectorio">
      <a><img src="../images/down.png" ></a>
    </section>
    <section id="directorio">
      <?php
        include("../internas/directorio.php");
      ?>
    </section>
    <script type="text/javascript">
    $(document).ready(function(){
    
    $('#visualizarDirectorio').click(function() {
    $("#directorio").toggle();
    })
    
    });
    </script>
<section class="row editor">
<div class="col-md-7">
  <?php
    include("areaTexto.php");
  ?>
</div>
<div class="col-md-5" id="areaMultimedia">
  <div class="row text-center">
    <div method="POST" class="col-md-4 multimedia verde">
      <p>Agrega una foto</p>
      <img src="../images/photo.png">
      <input type="file" value="Submit">
    </div>
    <div class="col-md-4 multimedia blanco">
      <p>Agrega una foto</p>
      <img src="../images/photo.png">
    </div>
    <div class="col-md-4 multimedia verde">
      <p>Agrega una foto</p>
      <img src="../images/photo.png">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 anaranjado">
      <p>Agrega un nuevo video</p>
      <img src="../images/video.png">
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-4 multimedia verde">
      <p>Agrega un documento</p>
      <img src="../images/documento.png">
    </div>
    <div class="col-md-4 multimedia blanco">
      <p>Agrega un documento</p>
      <img src="../images/documento.png">
    </div>
    <div class="col-md-4 multimedia verde">
      <p>Agrega un documento</p>
      <img src="../images/documento.png">
    </div>
  </div>
</div>
</section>

<script>
  $(document).ready(function() {
    var textoRecuperado = '<?php echo $textoRecuperado; ?>';
    $('#summernote').summernote('code', textoRecuperado);
  });
  $('#summernote').summernote({
    height: 370,                 // set editor height
    minHeight: 370,             // set minimum height of editor
    maxHeight: 370,             // set maximum height of editor
    focus: false               // set focus to editable area after initializing summernote
  });

  function actualizarTexto(){
    var codigoCapituloSeleccionado = '<?php echo $codigoCapituloSeleccionado; ?>';
    var textoModificado = $('#summernote').summernote('code');
    location.href="../operaciones/actualizarTexto.php?textoModificado="+textoModificado+"&codigoCapitulo="+codigoCapitulo;
  };

  $( "#cmbCuenta" ).click(function() {
    
  });


</script>
</body>
</html>