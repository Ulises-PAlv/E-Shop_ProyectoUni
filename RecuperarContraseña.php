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
    <title>Recuperar contraseña</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="imagenes/logo1.png">
    <link rel="stylesheet" href="estilos/estilos.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
        
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-house-user"></i>
                Inicio

            </a>

        </div>
    </nav>




<div id="login">
  <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" >
      <div class="mb-3">
        <label style="color:whithe;"for="formGroupExampleInput" class="form-label" >Usuario a recuperar</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Piña97"  name="usuario"  required>
    </div>
    <div class="mb-3">
    <div class="form-group">
						<input type="submit" value="Enviar" class="btn float-right login_btn">
		</div>
        <label for="formGroupExampleInput2" class="form-label" style="color:red; font-size:20px;">Te enviaremos la nueva contraseña a el correo que registraste en la cuenta</label>
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
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php

if(!empty($_POST["usuario"])){
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='productosempresaurios';
    
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);
   
    $usuario= $_POST["usuario"];
    $id="";
    $contraseña="";
    $correo="";
    $nombre="";
    $bloqueo;
 
    if ($conexion->connect_errno){
    
    }else{
        $band=0;
        $sql='select * from usuarios';
        $resultado=$conexion->query($sql);
        while($fila=$resultado->fetch_assoc()){
           if($fila['cuenta']==$usuario){
              $band=1;
              $id=$fila['id'];
              $verificar=$fila['contraseña'];
              $nombre=$fila['nombre'];
              $correo=$fila['correo'];
              $bloqueo=$fila['bloqueo'];
              break;
            }
        }
        if($band==1){
            if($bloqueo>=3){
                $digitos = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9","0");
                 $nuevaPasswd="";  
                 $aleatorio;
                 for($i=0; $i<12; $i++){
                     $aleatorio= rand(0,35);
                     $nuevaPasswd.= $digitos[$aleatorio];
                 }   
               
               
                 
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
    $mail->addAddress($correo, $nombre);     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recuperacion de la contrasena';
    $mail->Body    = 'El usuario '. $usuario .' perdio su contraseña, la nueva contraseña es: '.$nuevaPasswd;


    $mail->send();
    
    echo '<script> swal("Contraseña nueva generada!!", "Se envio a tu correo la nueva contraseña generada, solo inica sesion con el mismo usuario y con esa contraseña", "success"); </script>';
} catch (Exception $e) {
    echo '<script> alert("Hubo un pedocles") </script>';
    echo "Hubo un error wapo: {$mail->ErrorInfo}";
}

$bloqueo=0;
$modificar=$id;
$nuevaPasswd=sha1($nuevaPasswd);
$sql2="update usuarios set id='$id',nombre='$nombre',cuenta='$usuario',contraseña='$nuevaPasswd',correo='$correo',bloqueo='$bloqueo' WHERE id='$modificar'";
$fin = $conexion -> query($sql2);


            }else{
                echo '<script> swal("Aun Tienes intentos", "La cuenta que ingresaste aun no esta bloqueada, aun tienes intentos disponibles", "error"); </script>';
            }
        }else{
            echo '<script> swal("Usuario Incorrecto!", "El usuario que pusiste no existe ", "error"); </script>';
        }
    }

}



?>