
<?php
session_start();

  if( $_SESSION["cuenta"]!="AdminEmpresaurio" && $_SESSION["password"]!="c38aeb85264b3e8382da5fc307f5d00b2bee146c"){

      session_destroy();

      echo '<script type="text/javascript">

      window.location="http://localhost/Curso%20de%20php/ProyectoEmpresaurios/index.php";

      </script>';

  }

$q = $_REQUEST["q"];

$servidor='localhost';
$cuenta='root';
$password='';
$bd='productosempresaurios';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql="DELETE FROM xbox
WHERE id = $q";
$resultado=$conexion->query($sql);


?>