<?php
$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'productosempresaurios';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$get_PS = 'select * from playstation';
$get_X = 'select * from xbox';
$res_getPS = $conexion->query($get_PS);
$res_getX = $conexion->query($get_X);

for($i = 0; $i < ($dataLen / 2); $i++) {
    if((((int) $id_s[$i]) / 100) >= 1) {
        $res = $conexion->query($get_precioPS);

        while($fila = $res->fetch_assoc()) {
            if($fila['id'] == $id_s[$i]) {
                $existencias = $fila['Existencias'];
                $ward = $existencias- $cantidad[$i];
                $sql3 = "update playstation set Existencias='$ward' WHERE id='$id_s[$i]'";
                $fin1 = $conexion -> query($sql3);
                break;
            }
        }
    }else {
        $res = $conexion->query($get_precioX);

        while($fila = $res->fetch_assoc()) {
            if($fila['id'] == $id_s[$i]) {
                $existencias = $fila['Existencias'];
                $ward = $existencias- $cantidad[$i];
                $sql4 = "update xbox set Existencias='$ward' WHERE id='$id_s[$i]'";
                $fin2 = $conexion -> query($sql4);
                break;
            }
        }
    }
}
?>

<script>
    localStorage.clear();
</script>

<?php 
    require('./nota.php');
?>