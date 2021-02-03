
   <?php
     session_start();
     if(!empty($_POST["remember"])){
        setcookie("cuenta",$_POST["user"]);
        setcookie("password",$_POST["passwd"]);
    }else{
        setcookie("cuenta","");
        setcookie("password","");
    
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inicia sesion</title>
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
            
        
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-house-user"></i>
                Inicio

            </a>

        </div>
    </nav>

<script>
    function checa(){
      
        document.getElementById("arre").innerHTML="Eres un robot";
            document.getElementById("arre").style.color="red";
        
    }
</script>

 
  <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card2">
			<div class="card-header">
				<h3>Inicia Sesion</h3>
				
			</div>
			<div class="card-body">
            <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control"  placeholder="Cuenta" value="<?php if(isset($_COOKIE["cuenta"])){echo $_COOKIE["cuenta"];} ?>" name="user"  required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control"  name="passwd" value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"];} ?>" placeholder="Contraseña" required>
					</div>
					<div class="row align-items-center remember">
                    <?php if(isset($_COOKIE["password"])){
            echo '<input type="checkbox" name="remember" checked> ';
        }else{
            echo '<input type="checkbox" name="remember" > ';
        }  ?> Recuerdame
            </div>
            <div style="text-align:center;">
            ¿Eres un robot?
            </div>
            <div>
               
              <img src="imagen.php"/>
              <input type="text" name="captcha_txt" />
            </div>

            <div>
                <p id="arre"></p>
            </div>
                 

					<div class="form-group">
						<input type="submit" value="Enviar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿No tienes cuenta? <a href="registro.php" class="links2"> Registrate</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="RecuperarContraseña.php" class="links2">Recupera tu contraseña</a>
				</div>
			</div>
		</div>
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
                </div>>
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

if(!empty($_POST["user"]) && !empty($_POST["passwd"])){

    if($_SESSION['captcha_text']==md5(strtolower($_POST['captcha_txt']))){
        $servidor='localhost';
        $cuenta='root';
        $password='';
        $bd='productosempresaurios';
        
        $conexion = new mysqli($servidor,$cuenta,$password,$bd);
        
        $usuario=$_POST["user"];
        $contra=$_POST["passwd"];
        $id="";
        $contraseña=sha1($contra);
        $verificar="";
        $correo="";
        $nombre="";
        $bloqueo;
        if ($conexion->connect_errno){
            die('Error en la conexion');
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
               if($verificar==$contraseña && $bloqueo < 3){
                $bloqueo=0;
                $modificar2=$id;
                $sql3="update usuarios set id='$id',nombre='$nombre',cuenta='$usuario',contraseña='$verificar',correo='$correo',bloqueo='$bloqueo' WHERE id='$modificar2'";
                $fin2 = $conexion -> query($sql3);
                   $_SESSION["id"]=$id;
                   $_SESSION["nombre"]=$nombre;
                   $_SESSION["cuenta"]=$usuario;
                   $_SESSION["password"]=$contraseña;
                   $_SESSION["email"]=$correo;
                   echo '<meta http-equiv="refresh" content="0;url=index.php">';
               }else{
                   if($bloqueo == 3){
                    echo '<script> swal("Cuenta Bloqueada :c", "Lo sentimos pero tu cuenta a sido bloqueada por exceso de intentos, recupera tu contraseña dando click al link correspondiente!!!", "error"); </script>';
                   }else{
                       $bloqueo++;
                       $modificar=$id;
                       $sql2="update usuarios set id='$id',nombre='$nombre',cuenta='$usuario',contraseña='$verificar',correo='$correo',bloqueo='$bloqueo' WHERE id='$modificar'";
                      $fin = $conexion -> query($sql2);
                      echo '<script> swal("Contraseña incorrecta!!", "La Contraseña ingresada es incorrecta, si no recuerdas tu contraseña recuperala", "error"); </script>';
                   }
               }
        
            }else{
               echo '<script> swal("Usuario Incorrecto!", "Tu cuenta de usuario con la que accedes no es correcta intentalo de nuevo y si no tienes uno cuenta Registrate!!!! ", "error"); </script>';
            }
        
        }
    }else{
        echo "<script>checa()</script>";
    }

}



?>