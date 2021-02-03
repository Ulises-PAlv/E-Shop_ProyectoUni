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
    $nombre_archivo = $_FILES['userfile']['name'];
    $tipo_archivo = $_FILES['userfile']['type'];
    $tamano_archivo = $_FILES['userfile']['size'];


    $sql='select * from playstation';
    $resultado=$conexion->query($sql);
    while($fila=$resultado->fetch_assoc()){
        $id=$fila['id'];
    }
    $id=$id+1;
    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{
         //conexion exitosa

         /*revisar si traemos datos a insertar en la bd  dependiendo
         de que el boton de enviar del formulario se le dio clic*/

         if(((strpos($tipo_archivo, "jpg") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png")) && ($tamano_archivo < 100000000))){
                //obtenemos datos del formulario
                
                $nom =$_POST['nombre'];
                $precio =$_POST['precio'];
                $descripcion =$_POST['descripcion'];
                $imagen=$_FILES['userfile']['name'];
                $existencias=$_POST['existencias'];
                //hacemos cadena con la sentencia mysql para insertar datos
                $sql = "INSERT INTO playstation (id, producto, imagen, precio, descripcion, Existencias) VALUES($id,'$nom','$imagen','$precio','$descripcion','$existencias')";
                $conexion->query($sql);  //aplicamos sentencia que inserta datos en la tabla usuarios de la base de datos
             
                if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
                    echo '<script> alert("registro insertado") </script>';
                }//fin
             else{
                 //echo '<script> alert("registro no insertado") </script>';
             }
               
            

             //datos del arhivo
             
	
             //compruebo si las características del archivo son las que deseo
             if (!((strpos($tipo_archivo, "jpg") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000000))) {
                 echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
             }else{
   	            if (move_uploaded_file($_FILES['userfile']['tmp_name'],  'imagenes/'.$nombre_archivo )){
      		
   	            }else{
      		        echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
   	            }
            }      

        
         }else{
             echo '<script> alert("Registro NO insertado, envie una imagen") </script>';
             require ('agregarPlay.php');
         }

        
         
    }

 echo '<meta http-equiv="refresh" content="0;url=playstation.php">'
?>

