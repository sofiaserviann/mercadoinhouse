<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PREGUNTAS FRECUENTES(FAQ)</title>
  </head>
    <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="estilo.css">
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-propio">
  <a class="navbar-brand" href="index.php"><img src="imagenes/logo.png" alt="" width="70px" height="70px"> Mercado in-house </a>
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

      <!--SI NO HAY UNA SESION QUE MUESTRE-->
      <?php if(!isset($_SESSION["inicio"])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Ingresá <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item reg">
          <a class="nav-link" href="registro.php">Registrate <span class="sr-only">(current)</span></a>
        </li>
      <?php } ?>

      <!--SI HAY UNA SESION QUE MUESTRE-->
      <?php if(isset($_SESSION["inicio"])){?>
        <li class="nav-item">
          <a class="nav-link" href="funciones/cerrar-sesion.php">Cerrar sesión <span class="sr-only">(current)</span></a>
        </li>
      <?php } ?>

      <li class="nav-item">
        <a class="nav-link" href="faq.php">Ayuda</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Indumentaria</a>
          <a class="dropdown-item" href="#">Hogar, Muebles y Jardin</a>
          <div class="dropdown-divider"> Jardin</div>
          <a class="dropdown-item" href="#">Electrodomesticos</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

        <div class="container">
      <div id="slider"></div>
    </div>
    <header>



        <section class="faqtit">
          <div class="titulopreguntas">
            <h2 class="titulofaq">¿En qué podemos ayudarte?</h2>
          </div>

          <div class="col-12 faqs-consulta roboto text-center pt-5 pb-5">
              <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header text-justify" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          ¿Eres nuevo en Mercado in-house? ¡REGISTRATE!
                        </button>
                      </h2> No hay ningun problema. Registrate ahora mismo dandole click <a href="Registro/registro.html">AQUÍ</a>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">

                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header text-justify" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          ¿Problemas al iniciar sesión?
                        </button>
                      </h2>Haz click en <a href="#">¿Olvidaste tu contraseña?</a> así podremos ayudarte enviandote la información necesaria y así brindarte una mejor experiencia.
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">

                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header text-justify" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          ¿Problemas con el producto?¿No es lo que pediste?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                      No te preocupes, tenemos un <a href="#">seguimiento de paquetes</a> para garantizarles a nuestros usuarios una compra cómoda y segura.
                      </div>
                    </div>
                  </div>

                  <div class="card">
                      <div class="card-header text-justify" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          ¿Cómo puedo vender mis productos?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                          Es simple. Debes crearte un usuario mediante un formulario y así comenzar a subir tus productos de manera fácil y rápida.
                        </div>
                      </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-justify" id="headingFive">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Devoluciones y reembolsos.
                            </button>
                          </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                          <div class="card-body">
                        No te preocupess, tenemos una <a href="#">politica de seguridad</a> que gestiona los reembolsos para ofrecerles a nuestros clientes una experiencia placentera.
                        </div>
                      </div>

                      <div class="card">
                          <div class="card-header text-justify" id="headingSix">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Añade/Gestiona métodos de pago
                              </button>
                            </h2>
                          </div>
                          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                          Aquí puedes Añadir y Gestionar tus <a href="#">métodos de pago</a> para que tu compra sea lo más comoda posiblice
                            </div>
                          </div>
                        </div>

                        <div class="card">
                            <div class="card-header text-justify" id="headingSeven">
                              <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                  ¿Dónde está mi pedido?
                                </button>
                              </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                              <div class="card-body">
                                BUY NOW tiene para vos un nuevo <a href="#">sistema de seguimiento</a> para ver dónde se encuentra tu pedido en tiempo real.
                              </div>
                            </div>
                          </div>


                            </div>
                </div>
          </div>

          <div class="col-12 more-info roboto text-center pt-2 pb-5">
          </div>

        </section>
        <!--END-SECTION-->

          <script src="js/jquery.min.js" charset="utf-8"></script>
          <script src="js/popper.min.js" charset="utf-8"></script>
          <script src="js/bootstrap.min.js" charset="utf-8"></script>
          </body>
        </html>

  <h2>PARA MAS AYUDA CONTACTANOS EN</h2>
      <li><a href="#">Instagram</a></li>
      <li><a href="#">Facebook</a></li></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="contacto.html">Escribinos ahora mismo</a></li>
      <textarea name="mensaje" rows="8" cols="80">¿Algo salió mal? Contanos</textarea> <button type="submit" name="submit">ENVIAR</button>
    </ul>
    <center><ul><center>
  <li><a href="news">Regístrate</a></li>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="about">Ayuda</a></li>
    <li><a href="about">Politicas de Seguridad</a></li>
    <li><a href="contact">Incia Sesión</a></li>
    <li><a href="about">Vende tus productos</a></li>
    <li><a href="about">Trabajá con nosotros</a></li>

    </div>
  </body>
</html>
