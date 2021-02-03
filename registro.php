
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="shortcut icon" type="image/png" href="imagenes/logo1.png">
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


   <script>
       function validar(){
var contra= document.getElementById("contra").value;
var conf= document.getElementById("conf").value;

if(contra==conf){
document.getElementById("conf").style.border="6px solid rgb(7, 241, 7)";
document.getElementById("conf").style.borderCollapse= "collapse";
document.getElementById("aviso").innerHTML="La contraseña verificada es correcta";
document.getElementById("aviso").style.color= "rgb(7, 241, 7)";

}else{
document.getElementById("conf").style.border="6px solid rgb(247, 48, 48)";
document.getElementById("conf").style.borderCollapse= "collapse";
document.getElementById("aviso").innerHTML="La contraseña es incorrecta, intentalo de nuevo";
document.getElementById("aviso").style.color="rgb(247, 48, 48)";
}
  
}
   </script>


  <div id="registro">
      <h2>Registro</h2>
      <h5 style="color: lightcoral;">!Unete a la Familia de Empresaurios y comienza a juegar en serio!</h5>
    <form class="row g-3"  method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
      <div class="col-md-6">
         <label for="inputEmail4" class="form-label">Nombre completo</label>
         <input type="text" class="form-control"  name="nombre" required>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nombre de usuario</label>
        <input type="text" class="form-control"  name="username" required>
      </div>
      <div class="col-12" style=" text-align: center;">
        <label for="inputPassword4" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contra" name="passwd" required>
      </div>
      <div class="col-12">
         <label for="inputPassword4" class="form-label" style=" text-align: center;">Confirma contraseña</label>
         <input type="password" class="form-control" id="conf" style="" name="confirma" onchange="validar()" required>
     </div>
     <div class="col-12">
         <div>
         <p id="aviso"></p>
         </div>
        
     </div>

     <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" required>
    </div>
    <div class="col-12">
       <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>
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


</html>



<?php

if(!empty($_POST["nombre"]) && !empty($_POST["email"]) && !empty($_POST["username"]) && !empty($_POST["passwd"])) {
$servidor='localhost';
$cuenta='root';
$password='';
$bd='productosempresaurios';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

 if ($conexion->connect_errno){
    die('Error en la conexion');
}else{
    $nombre=$_POST["nombre"];
    $username=$_POST["username"];
    $contra=$_POST["passwd"];
    $confirmacion=$_POST["confirma"];
    $correo=$_POST["email"];
    $bloqueo=0;
    if($confirmacion != $contra){
        echo '<script>   swal("Error!", "No puedes enviar el registro sin confirmar bien la contraseña ", "error");</script>;';
    }else{
        $sql='select * from usuarios';
        $resultado=$conexion->query($sql);
        while($fila=$resultado->fetch_assoc()){
            $id=$fila['id'];
        }
        $id=$id+1;
        $contra=sha1($confirmacion);
        $sql = "INSERT INTO usuarios (id, nombre, cuenta, contraseña, correo, bloqueo) VALUES('$id','$nombre','$username','$contra','$correo','$bloqueo')";
                $conexion->query($sql);  
                if ($conexion->affected_rows >= 1){ 
                    echo '<script> alert("a eres parte de la familia de EmpresauriosGame") </script>';
                    echo '<meta http-equiv="refresh" content="0;url=index.php">';
                }
        


    }

  
}
}

?>