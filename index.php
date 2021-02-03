<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Empresaurios</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="imagenes/logo1.png">
    <link rel="stylesheet" href="estilos/estilos.css">

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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="imagenes/callofduty.jpg" width="600px" height="500px" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imagenes/cyberpunk.jpg" width="600px" height="500px" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imagenes/minecraft.jpg" width="600px" height="500px" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div>
        <br>
        <h2 id="categoria">Juegos en Ofertas</h2>
        <div class="container">
          <div class="row">
           <?php
                    $vector=array();
                    while($fila=$resultado->fetch_assoc()){
                    $vector[]=$fila['id'];
                    }
                    $n1=rand(0,count($vector)-1);
                    $n2=0;
              
                    do{
                    $n2=rand(0,count($vector)-1);
                    }while($n1==$n2);
                    
                    $resultado=$conexion->query($sql);
              
                    while($fila=$resultado->fetch_assoc()){
                        if($vector[$n1]==$fila['id']||$vector[$n2]==$fila['id']){
                             $imagen=$fila['imagen'];
                        $producto=$fila['producto'];
                        $precio=$fila['precio'];
                        $descripcion=$fila['descripcion'];
                        $id=$fila['id'];
                        $existencias = $fila['Existencias'];
                        // $myJSON = json_encode($myJSON);
                        $prodStr = "'". $producto."'";
                        $imgStr = "'". $imagen."'";
                            $preciodesc=$precio-100;
                            ?>
                            <script>
                    array.push("<?php echo $productosempresaurios?>");
                </script>
                <div class="col-3">
                    <div class="card " style="width: 15rem; height:600px;">
                        <img src="imagenes/<?php echo $imagen ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto ?></h5>
                            <p class="card-text"><?php echo $descripcion ?></p>
                            <?php
                            if($existencias>0)
                            echo '<a href="#" class="btn btn-primary" onclick="crearObJuego('. $prodStr.','.$imgStr.','.$preciodesc.','.$id.','.$existencias.')">$'.'<strike>'.$precio.'</strike>  $'.$preciodesc.
                            '</a>';
                            else
                            echo '<a class="btn btn-danger" styles="color:red;">Sin existencias</a>';
                            ?>
                        </div>
                    </div>
                </div>
                            <?php
                            
                        }
                       
                    }
                    
                ?>
                <?php
                    $vector=array();
                    while($fila2=$resultado2->fetch_assoc()){
                    $vector[]=$fila2['id'];
                    }
                    $n1=rand(0,count($vector)-1);
                    $n2=0;
              
                    do{
                    $n2=rand(0,count($vector)-1);
                    }while($n1==$n2);
                    
                    $resultado2=$conexion->query($sql2);
              
                    while($fila2=$resultado2->fetch_assoc()){
                        if($vector[$n1]==$fila2['id']||$vector[$n2]==$fila2['id']){
                             $imagen=$fila2['imagen'];
                        $producto=$fila2['producto'];
                        $precio=$fila2['precio'];
                        $descripcion=$fila2['descripcion'];
                        $id=$fila2['id'];
                        $existencias = $fila2['Existencias'];
                        // $myJSON = json_encode($myJSON);
                        $prodStr = "'". $producto."'";
                        $imgStr = "'". $imagen."'";
                            $preciodesc=$precio-100;
                            ?>
                            <script>
                    array.push("<?php echo $productosempresaurios?>");
                </script>
                <div class="col-3">
                    <div class="card " style="width: 15rem; height:600px;">
                        <img src="imagenes/<?php echo $imagen ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto ?></h5>
                            <p class="card-text"><?php echo $descripcion ?></p>
                            <?php
                            if($existencias>0)
                            echo '<a href="#" class="btn btn-primary" onclick="crearObJuego('. $prodStr.','.$imgStr.','.$preciodesc.','.$id.','.$existencias.')">$'.'<strike>'.$precio.'</strike>  $'.$preciodesc.
                            '</a>';
                            else
                            echo '<a class="btn btn-danger" styles="color:red;">Sin existencias</a>';
                            ?>
                        </div>
                    </div>
                </div>
                            <?php
                            
                        }
                       
                    }
                    
                ?>
                
        </div>
        </div>
    </div>
    <div id="suscripcion">
        <h4>Suscribete!!</h4>
      <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
       <input type="email" name="correo" placeholder="Dinopapu@gmail.com"> <br>
       <button type="submit" class="btn btn-outline-success">Suscribete ahora</button>
      </form>
    
    </div>
    <footer class="mt-4">
        <div class="container-fluid ">
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>

<?php
if(!empty($_POST["correo"])){
    
    $correo=$_POST["correo"];
    $mail = new PHPMailer(true);

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'empresauriosgames@gmail.com';                     // SMTP username
    $mail->Password   = 'Jesus1234567890';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for PHPMailer::ENCRYPTION_SMTPS above

    //Recipients
    $mail->setFrom('empresauriosgames@gmail.com', 'Administrador Empresaurios');
    $mail->addAddress($correo, "usario");     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Cupon de descuento!!';
    $mail->Body    = 'Gracias por suscribirte para recompenzate regalamos un descuento del 15% en la tienda utlizando el cupon: tojorol3aka5';


    $mail->send();
    
    echo '<script> swal("Gracias por tu suscripcion", "Para recompensarte te enviamosun regalo en el correo que colocaste c:", "success"); </script>';
} catch (Exception $e) {
    echo '<script> alert("Hubo un pedocles") </script>';
    echo "Hubo un error wapo: {$mail->ErrorInfo}";
}

}

?>