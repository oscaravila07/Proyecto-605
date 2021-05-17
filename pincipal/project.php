<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- meta tipos de caracteres especiales en la web -->
    <meta charset="utf-8">
    <!-- optimizar el sitio para moviles -->
    <meta name="MobileOptimizer" content="width"/>
    <!-- optimizacion para cualquier dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- descripción del sitio web -->
    <meta name="description" content="Sistema online para ayuda y guía de estudiantes y futuros estudiantes, gestión del plantel a través de módulos como son:
    registro de alumnos, reporte de alumnos, Recorrido Virtual de las áreas que conforman al plantel, Desarrollo de Juego Interactivos para el aprendizaje de las distintas carreras que ofrece la institución">
    <!-- palabras claves para el seo -->
    <meta name="keywords" content="Sistema Online, Reportes de Asistencia, Recorrido Virtual, Juegos Interactivos, Guía de estudiantes, Conalep Naucalpan 1, Gestión de planteles, Carreras Técnicas">
   <!-- meta para el autor del sitio  -->
    <meta name="autor" content="Borderline">
    <!-- el de la marca --->
    <meta name="copyright" content="Borderline & Conactive">
    <meta name="robots" content="index/">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/fontello.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script src="js/jquery-3.5.1.min.js"></script>
    <title>Bordeline</title>
  </head>
  <body>
    <!--Inicia contenido de la web-->
    <div class="id-contenido" id="inicio">
      <!--Inicia Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-main sticky-top" id="menu">
        <a class="navbar-brand" href="project.html">
          <img src="img/logo.png" alt="Logotipo Borderline" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inicio" aria-controls="inicio" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link scroll" href="#inicio"><span class="icon-home-2"></span> Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll" href="#somos"><span class="icon-users-2"></span> ¿Quiénes somos?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll" href="#productos"><span class="icon-tags-1"></span> Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll" href="#contacto"><span class="icon-envelope-open"></span> Contacto</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="usuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-user-circle"></span>
              </a>
                <div class="dropdown-menu" aria-labelledby="usuario">
                  <a class="dropdown-item" href="session.php">Iniciar sesión</a>
                  <a class="dropdown-item" href="#">Registrarse</a>
                </div>
              </li>
          </ul>
            </div>
          </nav>
        <!--Termina navbar-->
      <!--Empieza slider-->
          <div id="slider1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slider2.jpg" class="d-block w-100 img-slide" alt="slider 1">
                <div class="container">
                <div class="carousel-caption d-none d-md-block">
                  <h2>¡BIENVENIDOS!</h2>
                    <style>
                      h2{
                        color: #990000;
                        font-size: 230px;
                      }
                    </style>
                    <p>"SIGUE LA LÍNEA DE LA TECNOLOGÍA"</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/fondo2.png" class="d-block w-100 img-slide" alt="slider 2">
              </div>
              <div class="carousel-item">
                <img src="img/slider1.jpg" class="d-block w-100 img-slide" alt="slider 3">
              </div>
            </div>
          </div>
    <!--Termina slider-->
    <!-- boton hacia arriba -->
    <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
      <span class="fa-stack">
        <i class="icon-up-open"></i>
      </span>
    </a>
    <!-- termina boton hacia arriba -->
      <!--Empieza contenido SOMOS-->
          <div class="container py-4" id="somos" data-aos="fade-up">
            <h3 class="text-center py-3 style-text">¿Quiénes somos?</h3>
            <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body card-style">
                      <h4 class="card-title text-center py-2">MISIÓN</h4>
                      <p class="card-text text-justify"><hr>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </div>
                </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body card-style">
                      <h4 class="card-title text-center py-2">VISIÓN</h4>
                        <p class="card-text text-justify"><hr>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                          minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
    <!--Termina contenido SOMOS-->
            <hr>
              <!--Inicia slider apartado de productos-->
                <h3 class="text-center py-3 style-text" id="productos" data-aos="fade-right">Productos</h3>
                <div class="container" data-aos="fade-right">
                  <div class="card mb-3" style="max-width: 100%;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="img/producto2.png" class="card-img-1" alt="producto2">
                        </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h4 class="card-title text-center">Reloj Drsa3008</h4>
                          <p class="card-text"><h5>Precio Unitario MX$ 530</h5></p>
                          <p class="card-text">Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                             aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                             commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                             nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                             mollit anim id est laborum.</p>
                          <button type="submit" class="btn btn-outline-light"><span class="icon-basket"></span> Agregar al carrito</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          <!--Termina slider apartado de productos-->
              <!--Inicia info de app-->
                    <div class="container" data-aos="fade-left">
                        <div class="row py-5">
                          <div class="col text-center info-text">
                              <p>ADQUIERE NUESTROS PRODUCTOS OUT DANGER.</p>
                              <p>DESCARGA NUESTRA APLICACIÓN.</p>
                              <p>Y EMPIEZA A CUIDAR DESDE LA DISTANCIA A LOS QUE MÁS TE IMPORTAN.</p>
                              <hr>
                              <p><b>DESCARGA</b></p>
                              <p><b>¡YA!</b></p>
                              <style>
                                b{
                                  color: #000;
                                  font-size: 40px;
                                }
                              </style>
                          </div>
                        <div class="col">
                              <img src="img/fondo2.png" class="img-app" alt="aplicacion">
                              <p class="info-text">Tu APP para estar al pendiente de la familia</p>
                          </div>
                        </div>
                    </div>
              <!--Termina info de app-->
                <!--Inicia apartado contactanos-->
                <h3 class="text-center py-3 style-text" id="contacto" data-aos="fade-up">Contáctanos</h3>
                <div class="container" data-aos="fade-up">
                    <div class="card bg-dark text-white">
                        <img src="img/slider1.jpg" class="card-img  img-slide" alt="img contacto">
                        <div class="card-img-overlay">
                           <div class="container">
                              <div class="row">
                                <div class="col text-center">
                                    <p class="py-2 contac">Tienes alguna</p>
                                    <p class="py-2 contac">duda o </p>
                                    <p class="py-2 contac">sugerencia,</p>
                                    <p class="py-2 contac">escríbenos.</p>
                                </div>
                                <div class="col">
                                    <form>
                                        <div class="form-row">
                                          <div class="col">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" placeholder="Nombre" required>
                                          </div>
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label>Apellido paterno</label>
                                              <input type="text" class="form-control" placeholder="Apellido Paterno" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label>Apellido materno</label>
                                              <input type="text" class="form-control" placeholder="Apellido Materno" required>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="col form-group">
                                            <label for="inputEmail">Email</label>
                                            <style>
                                              label{
                                                color: #000;
                                              }
                                            </style>
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Mensaje</label>
                                            <textarea class="form-control" id="message" rows="2" placeholder="Mensaje" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                      </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Termina apartado contactanos-->
                    <!--inicia mapa-->
                          <section data-aos="fade-down" class="py-5">
                            <div class="container fondo-container">
                              <div class="row py-4">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                  <div id="map"></div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                  <div class="card shadow p-3 mb-5 bg-white rounded">
                                    <div class="card-body text-center py-3">
                                      <p>Prolongación Miguel Negrete S/N, San Rafael Chamapa, Naucalpan de Juárez, Estado de México.</p>
                                      <p class="text-left"><span class="icon-phone"></span> Telefóno :<a href="tel:55555555"> (55) 5555-5555</a></p>
                                    <div class="iconos">
                                      <ul><!--En esta division se van a colocar los iconos-->
                                          <li><a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a></li><!--Nuevamente usamos la etiqueta span para colocar iconos de redes sociales-->
                                          <li><a href="https://twitter.com/" target="_blank"><span class="icon-twitter"></span></a></li><!--Target se utiliza para generar una nueva pestaña-->
                                          <!--AL apretar el icono va a alojar al link que esta indicado-->
                                          <li><a href="#"><span class="icon-instagram"></span></a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                    <!--Termina mapa-->
        </div><!--Termina contenido de la web-->
          <!-- inicia los script -->
          <script type="text/javascript">
              var map;
              var lugar = {lat:19.4446282 , lng:-99.2718253 };
              function initMap(){
                map = new google.maps.Map(document.getElementById('map'),{
                  center: {lat:19.4446282 , lng:-99.2718253 },
                  zoom:16
                });
                var marker = new google.maps.Marker({
                  position: lugar,
                  map: map,
                  title:'Conalep Naucalpan I'
                });
              }
           </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLTSukAoUZfj2947RAFWOHQkuT_lthmt0&callback=initMap"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
     <!-- terminan los script -->
   </body>
</html>
