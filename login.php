<?php
session_start();
if($_SESSION){
  header('location: ../index.php');
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia Sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-propio">
  <a class="navbar-brand" href="#"><img src="logo.png" alt="" width="70px" height="70px"> Mercado in-house </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto text-center">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Ingresá <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item reg">
        <a class="nav-link" href="registro.php">Registrate <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.html">Ayuda</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  <div class="container mt-5 formu-login text-center">
    <form action="funciones/validar.php" method="POST">
      <h3 class="mb-3">Iniciar sesion</h3>

      <input type="text" placeholder="&#128272; Usuario o correo" name="login"><br>
      <input type="password" placeholder="&#128272; Clave" name="clave"><br><br>

      <input class="btn btn-success" type="submit" value="Enviar"> <br><br>
      <a href="#">¿Olvidó su contraseña?</a><br><br>
      <a href="registro.php">Registrate</a><br><br>

      <input type="checkbox" id="regis" name="recordarme">
      <label for="regis">Recordarme</label><br>
    </form>
  </div>

    <!--Aca van los scripts de Bootstrap-->
    <!--ESTO VA EN ORDERN-->
      <script src="js/jquery.min.js" charset="utf-8"></script>
      <script src="js/popper.min.js" charset="utf-8"></script>
      <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
