<?php
    session_start();

  if( $_SESSION["cuenta"]!="AdminEmpresaurio" && $_SESSION["password"]!="c38aeb85264b3e8382da5fc307f5d00b2bee146c"){

      session_destroy();

      echo '<script type="text/javascript">

      window.location="http://localhost/Curso%20de%20php/ProyectoEmpresaurios/index.php";

      </script>';

  }

     
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='productosempresaurios';
     
    //completar
    $_SESSION["id"]="";
    $_SESSION["prod"]="";
    $_SESSION["img"]="";
    $_SESSION["pre"]="";
    $_SESSION["desc"]="";
    $_SESSION["exis"]="";

    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }
    




    if(isset($_POST['submit'])){
        
        $modificar=$_POST['modificar'];
        $_SESSION["modificar2"]=$modificar;
        $sql2="select * from xbox where id='$modificar'";
        $resultado=$conexion -> query($sql2);
        while($fila=$resultado -> fetch_assoc()){
            $_SESSION["id"]=$fila["id"];
            $_SESSION["prod"]=$fila["producto"];
            $_SESSION["img"]=$fila["imagen"];
            $_SESSION["pre"]=$fila["precio"];
            $_SESSION["desc"]=$fila["descripcion"];
            $_SESSION["exis"]=$fila["Existencias"];
        }
    }
    if(isset($_POST['mod'])){
        $uno=$_POST["id2"];
        $dos=$_POST["producto2"];
        $tres=$_POST["imagen2"];
        $cuatro=$_POST["precio2"];
        $cinco=$_POST["descripcion2"];
        $seis=$_POST["Existencias2"];
        $modificarl=$_SESSION["modificar2"];
        
        $ne="update xbox set id='$uno',producto='$dos',imagen='$tres',precio='$cuatro',descripcion='$cinco',Existencias='$seis' WHERE id='$modificarl'";
        
        $fin = $conexion -> query($ne);
        
    }
?>

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
    <h2 style="color:white; padding:10px;">Llena todos los campos para modificar un juego</h2>
 <div class="contenedor1">
        <div class="contenedor2">
            <div class="izquierdaAlta">

            <?php        
         //continuamos con la consulta de datos a la tabla usuarios
         //vemos datos en un tabla de html
         $sql = 'select * from xbox';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia
         
         if ($resultado -> num_rows){ //si la consulta genera registros
         ?>
 
                
          <div class="izqAlta container">      
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>  
            
           <legend>Modificar Cuentas</legend>
                <br>
                
                <select   class="custom-select" id="select-bonito" name='modificar' >
                
                <?php
                $salida='<div class="container"><table class="table table-dark table-hover">';
                while( $fila = $resultado -> fetch_assoc() ){ //recorremos los registros obtenidos de la tabla
                    echo '<option value="'.$fila["id"].'">'.$fila["producto"].'</option>';
                    //proceso de concatenacion de datos
                    $salida.= '<tr>';
                    $salida.= '<td>'. $fila['id'] . '</td>';
                    $salida.= '<td>'. $fila['producto'] . '</td>';
                    $salida.= '<td><img src="imagenes/'. $fila['imagen'] . '" alt="" width="50px;" height="60px;"></td>';
                    $salida.= '<td>'. $fila['precio'] . '</td>';
                    $salida.= '<td>'. $fila['Existencias'] . '</td>';
                    $salida.= '<td>'. $fila['descripcion'] . '</td>';
                    $salida.= '</tr>';
                    }//fin while   
                    $salida.= '</table><div>';
                ?>
                </select>
                <br><br>
                <button
                 type="submit" value="submit" name="submit" class="btn btn-primary" href="#modificar">Modificar</button>
                <br><br>
            </form>
            </div> 
         <?php
        
         }
         else{
             echo "no hay datos";
         }
        
?>
        </div>
            <div class="izquierdaBaja">
                 <?php echo $salida ?>
            </div>
        </div>
        <div class="container" id="modificar">
        
         <form class="estiloformulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
            <ul class="wrapper">
                <li class="form-row form-label">
                <label for="id">ID</label>
                <input type="number" name="id2" id="id" value="<?php echo $_SESSION["id"]; ?>">
                </li>
                <li class="form-row">
                <label for="nombre">Producto</label>
                <input type="text" id="nombre" name="producto2" value="<?php echo $_SESSION["prod"]; ?>">
                </li>
                <li class="form-row">
                <label for="cuenta">Imagen</label>
                <input type="text" id="cuenta" name="imagen2" value="<?php echo $_SESSION["img"]; ?>">
                </li>
                <li class="form-row">
                <label for="contra">Precio</label>
                <input type="number" id="contra" name="precio2" value="<?php echo $_SESSION["pre"]; ?>">
                </li>
                <li class="form-row">
                <label for="contra">existencias</label>
                <input type="number" id="contra" name="Existencias2" value="<?php echo $_SESSION["exis"]; ?>">
                </li>
                <li class="form-row">
                <label for="contra">Descripcion</label>
                <textarea type="text" id="contra" name="descripcion2" value="" rows="5" cols="97" maxlength="200"><?php echo $_SESSION["desc"]; ?></textarea>
                
                </li>
                <li class="form-row">
                <button type="submit" name="mod" class="btn btn-primary">Modificar</button>
                </li>
            </ul>
            </form>       
        </div>
    </div>
    
   
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

