<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Images\idea-genial.png">
    <title>..--|Aula virtual|--..</title>
    <link href="CSS/bootstrap.css" rel="stylesheet">
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="CSS/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS\font-awesome.css">
    <link rel="stylesheet" href="CSS/reg_style.css" />
  </head>
  <body style="background-color: #fdd8e0">
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<h1 class="text-center">Sube tu proyecto</h1>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="titulo">Titulo</label>
  <div class="col-md-5">
  <input id="titulo" name="titulo" type="text" placeholder="Escriba aquí el titulo" class="form-control input-md" required="">
  <span class="help-block">Campo obligatorio</span>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcion">Descripcion</label>
  <div class="col-md-4">
    <textarea class="form-control" id="descripcion" name="descripcion">Contenido</textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectup">Destino</label>
  <div class="col-md-5">
    <select id="selectup" name="selectup" class="form-control">
      <option value="">Option one</option>
      <option value="">Option two</option>
    </select>
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="subida">Complementos</label>
  <div class="col-md-4">
    <input id="subida" name="subida" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Subir</button>
  </div>
</div>

</fieldset>
</form>
<footer class="footer">
    <div class="container text-center">
      <p>&copy; 2016 Todos los derechos reservados.</p>
      <a href="inicio.php"><span class="glyphicon glyphicon-log-in fa-2x" aria-hidden="true"></span></a>
      <a href="https://www.facebook.com/groups/193592334396351/"><span><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></span></a>
      <a href="https://github.com/Polaken"><span><i class="fa fa-github fa-3x" aria-hidden="true"></i></span></a>
      <a href="https://twitter.com/Aula_virtual_ok"><span><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></span></a>
      <a href="https://plus.google.com/communities/104682285015405256311"><span><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></span></a>
      <a href="contacto.php"><span><i class="fa fa-ticket fa-3x" aria-hidden="true"></i></span></a>
    </div>
</footer>

<script src="JS\jquery-3.1.1.js" charset="utf-8"></script>
<script src="JS\bootstrap.js" charset="utf-8"></script>
<script src="JS\ie10-viewport-bug-workaround.js" charset="utf-8"></script>
<script src="JS\npm.js" charset="utf-8"></script>
  </body>
</html>
