<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Acerca de</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="imagenes/logo1.png">
    <link rel="stylesheet" href="estilos/estilos.css">
    <style>
        .acd{
            background-image: url(imagenes/uaa.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding: 100px;
            transition:all .5s;
            !important
        }
        .acd:hover{
            border-radius:10%;
            -webkit-border-radius:10%;
            box-shadow: 0px 0px 15px 15px black;
            -webkit-box-shadow: 0px 0px 15px 15px black;
            
        }
        .txt{
            color: white;
            text-shadow: 0.1em 0.1em #333
        }
        .inf{
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
        }
        .ima{
            transition: all .5s;
        }
        .ima:hover{
            -webkit-box-shadow: 0px 0px 3px 3px darkgrey;
        }
        .inf1{
            text-align: center;
            padding: 30px;
        }
    </style>
</head>

<body>
       <?php
	session_start();
	?>
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
            <a class="navbar-brand" href="carrito/carrito.component.php">
<i class="fas fa-cart-arrow-down"></i>
Carrito <sup><span class="badge badge-pill badge-success" id="cantidadCar">0</span></sup>
</a>
            <?php
            $str="";
            if(isset($_SESSION["id"])){	
                $str= '<a class="navbar-brand" href="cerrar sesion.php">';
                $str .= '<i class="fas fa-house-user"></i>';
                $str.='Cerrar session';
                $str.='</a>';
            }else{
                $str= '<a class="navbar-brand" href="Login.php">';
                $str.= '<i class="fas fa-house-user"></i>';
                $str.='Inicia sesión';
                $str.='</a>';
            }
            echo $str;
            ?>
          
            <a class="navbar-brand" href="registro.php">
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
                    <a class="nav-link" href="pregfre.php">Pregutas Frecuentes</a>
                </li>
                <?php
                $cad="";
                if(isset($_SESSION["id"])){
                    if( $_SESSION["cuenta"]=="AdminEmpresaurio" && $_SESSION["password"]=="c38aeb85264b3e8382da5fc307f5d00b2bee146c"){
                        $cad='<li class="nav-item">';
                        $cad.='<a class="nav-link" href="admi.php">Admin</a>';
                        $cad.= '</li>';
                    }
                    echo $cad;
                }
                
                ?>
            
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto" <?php if(isset($_SESSION["logueado"])){echo "style='width:200px;'";} ?> >
               
               <li>
              <a class="navbar-brand">
              Di-no a los precios altos
              </a>
              </li>
                    
              </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <main class="container">
        <div>
            <table class="acd">
                
                    <tr>
                        <td rowspan="6">
                        <img src="imagenes/LOGO_UAA.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="inf">
                            <img src="imagenes/carlos.jpg" alt="" width="10%" height="10%" class="ima">
                            <p class="txt">Juan Carlos Álvarez Flores</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="inf">
                            <img src="imagenes/piwy.jpg" alt="" width="10%" height="10%" class="ima">
                            <p class="txt">Ulises Alvirde Bonilla</p>
                        </td>
                    </tr>
                    <tr>
                         <td class="inf">
                            <img src="imagenes/pi%C3%B1a.jpg" alt="" width="10%" height="10%" class="ima">
                            <p class="txt">José Israel Castañeda Piña</p>
                        </td>
                    </tr>
                    <tr>
                         <td class="inf">
                            <img src="imagenes/chava.jpg" alt="" width="10%" height="10%" class="ima">
                            <p class="txt">Jesús Salvador Diosdado Herrera</p>
                        </td>
                    </tr>
                    <tr>
                          <td class="inf">
                            <img src="imagenes/pica.jpg" alt="" width="10%" height="10%" class="ima">
                            <p class="txt">Jorge Abraham Ojeda Picasso</p>
                        </td>
                    </tr>
                    <tr>
                       <td colspan="2" class="inf1">
                           <p class="txt">Somos estudiantes de la Universidad Autonoma de Aguascalientes de la carrera de Ingeniería en sistemas computacionales. Este proyecto de una tienda de videojuegos en linea fue hecho con el fin de satisfacer los conocimientos obtenidos a lo largo del curso de programación de sistemas web impartido por la maestra Georgina Salazar Partida.</p>
                       </td>
                    </tr>     
            </table>
        </div>
    </main>
    <br>
    <br>
    <br>
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
                        <a class="btn btn-primary" href="https://www.facebook.com/EmpresauriosGames/?ref=page_internal" role="button"><i class="fab fa-facebook-square"></i></a>
                        
                        <a class="btn btn-primary" href="https://www.instagram.com/empresaurios_games/" role="button"><i class="fab fa-instagram"></i></a>
                        
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
    <!-- Sweet Alert --><script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Carrito dependencias --> <script src="carrito/scripts/Juego.class.js"></script> 
    <script src="carrito/scripts/LS.class.js"></script> 
    <script src="carrito/scripts/agregarProducto.js" type="text/javascript"></script>
</body>

 <!-- Carrito dependencias --> <script src="./scripts/Juego.class.js"></script> <script src="./scripts/LS.class.js"></script> <script src="./scripts/agregarProducto.js" type="text/javascript"></script>

<!-- Sweet Alert --><script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>