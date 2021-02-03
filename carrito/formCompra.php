<?php
$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'productosempresaurios';
session_start();
$conexion = new mysqli($servidor,$cuenta,$password,$bd);

/*$res_getPS = $conexion->query($get_PS);
$res_getX = $conexion->query($get_X);*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pago</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="../imagenes/logo1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script type="text/javascript" 
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>

    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="./styles/carrito.css">

    <style>
        label { color: black; }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " id="color">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="../imagenes/logo1.png" alt="" width="50" height="50" class="d-inline-block align-top">
                Empresaurios
            </a>
            <form class="d-flex col-5">
                <input class="form-control me-4" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success btn-buscar" type="submit">Buscar</button>
            </form>
            
            <?php
            $str="";
            if(isset($_SESSION["id"])){	
                $str= '<a class="navbar-brand" href="../cerrar sesion.php">';
                $str .= '<i class="fas fa-house-user"></i>';
                $str.='Cerrar session';
                $str.='</a>';
            }else{
                $str= '<a class="navbar-brand" href="../Login.php">';
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
                    <a class="nav-link" href="../xbox.php">X-box <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../playstation.php">Play-Station</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../acercade.php">Acerca de </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contactanos.php">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pregfre.php">Pregutas Frecuentes</a>
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

    <main class="mt-4 mb-5">
        <div class="container">
            <div class="jumbotron">
                <h3 style="text-align: center; font-weight: bolder;">Formulario de compra</h3>
                <p style="text-align: center; font-size: 13px;">Llena el formulario con los datos requeridos para asi poder efectuar tu compra de manera correcta. <br>Cualquier duda o comentario favor de dejarlo en la sección <span>'Contactanos'</span> y te responderemos lo más pronto posible, si quieres conocer nuestra politica de privacidad y como protegeremos tus datos haz <a href="#">click aqui!.</a></p>
                <hr style="margin: 0 auto 25px auto;">

                <div class="container">
                    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Nombre</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Nombre completo" name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Correo electronico</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="example@gmail.com" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCupon">Cupon</label>
                                <input type="text" class="form-control" id="inputCupon" placeholder="UAA15" name="cupon">
                            </div>
                                <div class="form-group col-md-6">
                                <label for="inputTelefono">Telefono de contacto</label>
                                <input type="text" class="form-control" id="inputCupon" name="tel">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ciudad</label>
                                <input type="text" class="form-control" id="inputCity" name="city">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCountry">Pais</label>
                                <select id="inputCountry" class="form-control" name="country">
                                    <option selected>~Selecciona~</option>
                                    <option value="0">México</option>
                                    <option value="1">Estados Unidos</option>
                                    <option value="2">Resto del mundo jeje</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCP">Codigo Postal</label>
                                <input type="text" class="form-control" id="inputCP" name="cp">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDireccion">Dirección</label>
                            <input type="text" class="form-control" id="inputDireccion" placeholder="Calle, Numero. Colonia" name="direc">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Finalizar compra</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Carrito dependencias -->
    <script src="./scripts/Juego.class.js"></script>
    <script src="./scripts/LS.class.js"></script>
    <script src="./scripts/agregarProducto.js" type="text/javascript"></script>
</body>

</html>

<?php
    //** Get cookies
    $juegos = $_COOKIE["productos"];
    $pago = $_COOKIE["pago"];

    //** Get array LS
    $dataArray = explode(':', $juegos);
    $dataLen = count($dataArray);

    $id_s = array();
    $cantidad = array();

    for($i = 0; $i < $dataLen; $i++) {
        if($i === 0) {
            array_push($id_s, $dataArray[$i]);
        }else if(($i % 2) == 0){
            array_push($id_s, $dataArray[$i]);
        }else {
            array_push($cantidad, $dataArray[$i]);
        }
    }

    //** Obtener precios de BD
    $precios = array();
    $nomJuegos = array();

        //?? QUERYS
        $get_precioX = 'SELECT * FROM xbox';
        $get_precioPS = 'SELECT * FROM playstation';

        for($i = 0; $i < ($dataLen / 2); $i++) {
            if((((int) $id_s[$i]) / 100) >= 1) {
                $res = $conexion->query($get_precioPS);

                while($fila = $res->fetch_assoc()) {
                    if($fila['id'] == $id_s[$i]) {
                        array_push($precios, $fila['precio']);
                        array_push($nomJuegos, $fila['producto']);
                        break;
                    }
                }
            }else {
                $res = $conexion->query($get_precioX);

                while($fila = $res->fetch_assoc()) {
                    if($fila['id'] == $id_s[$i]) {
                        array_push($precios, $fila['precio']);
                        array_push($nomJuegos, $fila['producto']);
                        break;
                    }
                }
            }
        }
    
    //** Calcular Precios normal
    $totalCompra=0;

    for($i = 0; $i < ($dataLen / 2); $i++) {
        $precios[$i] = $precios[$i] * $cantidad[$i];
        $totalCompra += $precios[$i];
    }
?>

<?php
if(!empty($_POST))
if(!empty($_POST['name'] && !empty($_POST['email']))) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cupon = $_POST['cupon'];
    $tel = $_POST['tel'];
    $city = $_POST['city'];
    $cp = $_POST['cp'];
    $direc = $_POST['direc'];
    $country = $_POST['country'];

    //?? Obtener gastos envio, impuestos y descuento

    switch($country) {
        case 0: if($totalCompra >= 3000) {
                    $totalCompra += 0;
                }else {
                    $totalCompra += 120;
                }
                break;
        case 1: $totalCompra += 200;
                break;
        case 2: $totalCompra += 300;
                break;
    }

    $cupon = strtolower($cupon);

    switch($cupon) {
        case 'uaa15':   $descuento = $totalCompra * 0.15;
                        $totalCompra = $totalCompra - $descuento;
                    break;
        case 'tuv3f3':  $descuento = $totalCompra * 0.20;
                        $totalCompra = $totalCompra - $descuento;
                    break;
        case 'otojorol3aka5':   $descuento = $totalCompra * 0.15;
                                $totalCompra = $totalCompra - $descuento;
                        break;
        default: $totalCompra = $totalCompra;
    }

    //?? Calcular pago final
    
    $impuestos = $totalCompra * 0.16;
    $subtotal = $totalCompra - $impuestos;

    require('./homeClean.php');
}
?>