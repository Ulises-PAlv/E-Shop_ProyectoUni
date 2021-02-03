<?php

  session_start();

  if( $_SESSION["cuenta"]!="AdminEmpresaurio" && $_SESSION["password"]!="c38aeb85264b3e8382da5fc307f5d00b2bee146c"){

      session_destroy();

      echo '<meta http-equiv="refresh" content="0;url=index.php">';

  }



$servidor='localhost';
$cuenta='root';
$password='';
$bd='productosempresaurios';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql='select * from playstation';
$resultado=$conexion->query($sql);
$sql2='select * from xbox';
$resultado2=$conexion->query($sql2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://getbootstrap.com/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="imagenes/logo1.png">
    <script>
        function funcionEliminar(str) {
           
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("Eliminar").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "gethint.php?q=" + str, true);
            
            xhttp.send();
            alert("Se ha eliminado el juego!!");
        }
        function funcionEliminarPlay(str) {
           
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("Eliminar").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "gethinit2.php?q=" + str, true);
            xhttp.send();
            alert("Se ha eliminado el juego!!");
        }
    </script>
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
            <a class="navbar-brand" href="./carrito.component.php">
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
                    <a class="nav-link" href="#">Juegos más populares</a>
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
    <h1 style="color:white; padding: 10px;">Bienvenido a la página de administrador</h1>
    <div class="container">
   <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Productos de Play Station en existencia
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
            <?php
        $numPro=0;
    ?>
    <script>
        var array = [];
    </script>
    <div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <?php
                    while($fila=$resultado->fetch_assoc()){
                    $imagen=$fila['imagen'];
                    $producto=$fila['producto'];
                    $precio=$fila['precio'];
                    $descripcion=$fila['descripcion'];
                    $id=$fila['id'];
                ?>
                <script>
                    array.push("<?php echo $productosempresaurios?>");
                </script>
                <div class="col-2">
                    <div class="card " style="width: 10rem; height:420px;">
                        <img src="imagenes/<?php echo $imagen ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto ?></h5>
                            <p class="card-text"></p>
                            <a href="editarPlayStation.php" class="btn btn-primary">Editar</a><br>
                            <br><a href="admi.php" onclick="funcionEliminarPlay(<?php echo $id; ?>)" class="btn btn-primary">Eliminar</a>
                        </div>
                    </div>
                </div>
                <?php
                    $numPro=$numPro+1;
                        if($numPro%6==0){
                            echo '</div><br><br><div class="row">';
                        }
                    }
                ?>
                <div class="col-2">
                    <div class="card " style="width: 10rem; height:400px;">
                        <img src="imagenes/cargar.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nuevo juego</h5>
                            <p class="card-text"></p>
                            <a href="agregarPlay.php" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card " style="width: 10rem; height:400px;">
                        <img src="imagenes/grafica.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gráfica de Precios</h5>
                            <p class="card-text"></p>
                            <a href="gr%C3%A1ficas.php" class="btn btn-primary">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Productos de Xbox en existencia
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
     <?php
        $numPro=0;
    ?>
    <script>
        var array = [];
    </script>
    <div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <?php
                    while($fila2=$resultado2->fetch_assoc()){
                    $imagen=$fila2['imagen'];
                    $producto=$fila2['producto'];
                    $precio=$fila2['precio'];
                    $descripcion=$fila2['descripcion'];
                    $id=$fila2['id'];
                ?>
                <script>
                    array.push("<?php echo $productosempresaurios?>");
                </script>
                <div class="col-2">
                    <div class="card " style="width: 10rem; height:430px;">
                        <img src="imagenes/<?php echo $imagen ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto ?></h5>
                            <p class="card-text"></p>
                            <a href="editarXbox.php" class="btn btn-primary">Editar</a><br>
                            <br><a href="admi.php" onclick="funcionEliminar(<?php echo $id; ?>)" class="btn btn-primary">Eliminar</a>
                        </div>
                    </div>
                </div>
                <?php
                    $numPro=$numPro+1;
                        if($numPro%6==0){
                            echo '</div><br><br><div class="row">';
                        }
                    }
                ?>
                <div class="col-2">
                    <div class="card " style="width: 10rem; height:400px;">
                        <img src="imagenes/cargar.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nuevo juego</h5>
                            <p class="card-text"></p>
                            <a href="agregarXbox.php" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card " style="width: 10rem; height:400px;">
                        <img src="imagenes/grafica.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gráfica de Precios</h5>
                            <p class="card-text"></p>
                            <a href="gr%C3%A1ficas2.php" class="btn btn-primary">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
  </div>
</div><br><br>
   <h4 id="Eliminar"></h4>
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

