<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://getbootstrap.com/dist/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " id="color">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="imagenes/logo1.png" alt="" width="50" height="50" class="d-inline-block align-top">
                Empresaurios
            </a>
            <form class="d-flex col-5">
                <input class="form-control me-4" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success btn-buscar" type="submit">Buscar</button>
            </form>
            <a class="navbar-brand" href="#carrito">
                <i class="fas fa-cart-arrow-down"></i>
                Añadir al carrito
            </a>
            <a class="navbar-brand" href="#Sesion">
                <i class="fas fa-house-user"></i>
                Inicia sesión

            </a>
            <a class="navbar-brand" href="#Registrar">
                <i class="fas fa-gamepad"></i>
                Registro
            </a>

        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark" id="menu">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown mocos">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Juegos más populares</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xbox.php">X-box <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="playstation.php">Play-Station</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acercade.php">Acerca de </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactanos.php">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admi.php">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
   <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
    <!--<form action="subearchivo.php" method="post" enctype="multipart/form-data">
        <b>Campo de tipo texto:</b>
        <br>
        <input type="text" name="cadenatexto" size="20" maxlength="100">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        <br>
        <br>
        <b>Enviar un nuevo archivo: </b>
        <br>
        <input name="userfile" type="file">
        <br>
        <input type="submit" value="Enviar">
    </form>-->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2.5">
                    <ul> <b>Sobre empresaurios</b>
                        <li><a href="#">Inicio</a>
                        </li>
                        <li><a href="#">Sobre Nosotros</a>
                        </li>
                        <li><a href="#">Servicios</a>
                        </li>
                        <li><a href="#">Contactos</a>
                        </li>
                    </ul>
                </div>
                <div class="col-1.5">
                    <ul id="menusec"> <b>Comprar</b>
                        <li><a href="#">Cómo comprar</a>
                        </li>
                        <li><a href="#">Lista de juegos</a>
                        </li>
                        <li><a href="#">Colección</a>
                        </li>
                        <li><a href="#">Tienda</a>
                        </li>

                    </ul>
                </div>
                <div class="col-1">
                    <ul id="menusec" style="list-style: none;"> <b>Ayuda</b>
                        <li><a href="">FAQ</a>
                        </li>
                        <li><a href="#">Como activar el juego</a>
                        </li>
                        <li><a href="#">Crear un ticket</a>
                        </li>

                    </ul>
                </div>
                <div class="col-1.5">
                    <ul id="menusec" style="list-style: none;"> <b>Comunidad</b>
                        <li><a href="">Blog</a>
                        </li>
                        <li><a href="#">Sorteos</a>
                        </li>

                    </ul>
                </div>
                <div class="col-1.5">
                    <ul id="menusec" style="list-style: none;"> <b>Profesional</b>
                        <li><a href="">Vende con nosotros</a>
                        </li>

                    </ul>
                </div>
                <div class="col-2.2">
                    <ul id="menusec" style="list-style: none;"> <b>Siguenos</b><br>
                        <a class="btn btn-primary" href="#" role="button"><i class="fab fa-facebook-square"></i></a>
                        <a class="btn btn-primary" href="#" role="button"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary" href="#" role="button"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-primary" href="#" role="button"><i class="fab fa-discord"></i></a>
                    </ul>
                </div>
                <div class="col">
                    <ul id="menusec" style="list-style: none;"> <b>Visita nuestra tienda fisica</b><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d594.1811802864536!2d-102.02084549267545!3d22.20892395722401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8681fe5273b600e1%3A0xb424e16f96c492b8!2sSan%20Gil%2C%20Ags.!5e1!3m2!1ses!2smx!4v1607887692903!5m2!1ses!2smx" width="250" height="220" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>Copyright © 2020 EMpresaurios. Todos los derechos reservados. Esta página es un trabajo universitario, no somos un sitio de venta de video-juegos reales.</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>


</html>
