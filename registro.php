<?php
session_start();
if($_SESSION){
  header('location: ../index.php');
}
//Inicializar variables que reciben datos del formulario
$nom="";
$ape="";
$user="";
$email="";
$contrasena="";
$ccontrasena="";

//incializo variables de control de llenado de formulario
$vnom=false;
$vape=false;
$vuser=false;
$vemail=false;
$vcontrasena=false;
$vccontrasena=false;
$cuser=false;


//valiamos los datos recibidos del formulario
if(isset($_POST["submit"])){
  if(empty($_POST["nom"])){
  	$vnom=true;
  }else{
      $nom=$_POST["nom"];
  }
  if(empty($_POST["ape"])){
    $vape=true;
  }else{
      $ape=$_POST["ape"];
  }
  if(empty($_POST["user"]) || strlen($_POST["user"]) >= 15){
    $vuser=true;
}else {
    $user=$_POST["user"];
}
if(empty($_POST["email"]) ||
!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    $vemail=true;
}else{
    $email=$_POST["email"];
}
  if(empty($_POST["pass"])){
    $vcontrasena=true;
}else if(empty($_POST["cpass"]) || $_POST["pass"] != $_POST["cpass"] ){
    $vcontrasena=true;
}else {
  $contrasena=$_POST["pass"];
}

if(file_exists("funciones/usuario.json")){
  $usuariosjson=file_get_contents("funciones/usuario.json");
  $usuarios=json_decode($usuariosjson, true);
  if($usuarios){
    foreach ($usuarios as $us){
      if($us["usuario"]==$_POST["user"]){
        $cuser=true;
        break;
      }
    }
  }
}
var_dump($vnom);
var_dump($vape);
var_dump($vuser);
var_dump($vemail);
var_dump($vcontrasena);
var_dump($cuser);

if(!$vnom && !$vape && !$vuser && !$vemail && !$vcontrasena && !$cuser){
  $passmd = md5($contrasena);
  $usuario=[
    "nombre" => $nom,
    "apellido" => $ape,
    "usuario" => $user,
    "email" => $email,
    "contrasenia" => $passmd
  ];
  //decimos que la varible usuario es igual a la variable del json
  $usuarios[]=$usuario;
  $usuariosjso=json_encode($usuarios,JSON_PRETTY_PRINT);
  file_put_contents("funciones/usuario.json",$usuariosjso);
  header ("location: funciones/bienvenidos.php?msj=Registro Exitoso");
  exit;
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilo.css">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-propio">
  <a class="navbar-brand" href="#"><img src="logo.png" alt="" width="70px" height="70px"> Mercado in-house </a>
    <div class="">

    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
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
    <form action="registro.php" method="post">
    <fieldset>
      <legend>Carga de archivos</legend>

      <label for="nom">Nombre:</label>
      <input type="text" name="nom"><br>

      <label for="ape">Apellido</label>
      <input type="text" name="ape"><br>

      <label for="user">Nombre de Usuario:</label>
      <input type="text" name="user"><br>

      <label for="email">Correo-E</label>
      <input type="text" name="email"><br>

      <label for="pass">Contraseña:</label>
      <input type="password" name="pass"><br>

      <label for="cpass">Confirmar contraseña:</label>
      <input type="password" name="cpass"><br>
 <input type="submit" name="submit" value="Enviar">
  </form>

  <script src="js/jquery.min.js" charset="utf-8"></script>
  <script src="js/popper.min.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
