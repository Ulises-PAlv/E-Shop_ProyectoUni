<?php
session_start();
$servidor='localhost';
$cuenta='root';
$password='';
$bd='productosempresaurios';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql='select * from playstation';
$resultado=$conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="../imagenes/logo1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--<script type="text/javascript" 
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>-->

    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="./styles/carrito.css">
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
            <a class="navbar-brand" href="">
<i class="fas fa-cart-arrow-down"></i>
Carrito <sup><span class="badge badge-pill badge-success" id="cantidadCar">0</span></sup>
</a>
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
          
            <a class="navbar-brand" href="../registro.php">
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
                    <a class="nav-link" href="../index.php">Juegos más populares</a>
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
                /*$cad="";
                if(isset($_SESSION["id"])){
                    if( $_SESSION["cuenta"]=="AdminEmpresaurio" && $_SESSION["password"]=="c38aeb85264b3e8382da5fc307f5d00b2bee146c"){
                        $cad='<li class="nav-item">';
                        $cad.='<a class="nav-link" href="admi.php">Admin</a>';
                        $cad.= '</li>';
                    }
                    echo $cad;
                }*/
                
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
            <div class="row">
                <div class="col-8">
                    <div class="container">
                        <div class="jumbotron">
                            <h3 class="text-center" style="color: purple; font-weight: bolder;">Juegos agregados</h3>
                            <div class="row">
                                <table class="table table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="color: purple; font-weight: bold;"
                                            class="text-center">Título</th>
                                            <th scope="col" style="color: purple; font-weight: bold;"
                                            class="text-center">Datos del títutlo</th>
                                            <th scope="col" style="color: purple; font-weight: bold;" class="text-center">Cantidad</th>
                                            <th scope="col" style="color: purple; font-weight: bold;" class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="productos">
                                    </tbody>
                                </table>
                                <div style="width: 100%;">
                                    <button class="btn btn-danger btn-block"
                                    id="btn-vaciar"
                                    onclick="vaciarCarrito()">
                                        <i class="fas fa-trash mr-2"></i> Vaciar carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="jumbotron">
                       <?php if(isset($_SESSION['id'])){
    
                        echo
                        '<h4>'. $_SESSION["cuenta"].'</h4>
                        <hr> <h5>'.$_SESSION["nombre"].'</h5>
                        <p>'.$_SESSION["email"].'</p>';
                        }
                         ?>
                        <img src="../imagenes/bannerCarrito.jpg" alt="banner" width="280">

                        <h5 class="mt-4">Cupon de 15% de descuento!</h5>
                        <img src="../imagenes/UAA15.jpeg" alt="cupon" width="280">
                            
                        <div style="width: 100%;" class="mt-4">
                            <?php
                            if(isset($_SESSION["id"])){
                               echo '<button class="btn btn-outline-success btn-block"
                            data-toggle="modal"
                            data-target="#modalAdd">
                                <i class="fas fa-cash-register"></i> Elegir metodo de pago
                            </button>';
                            }else{
                                echo '<a class="btn btn-outline-success btn-block" href="../Login.php">
                                <i class="fas fa-cash-register"></i> Inicia Sesión para completar compra
                            </a>';
                            }
                            
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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

<!-- Modal form -->
<div class="modal fade" id="modalAdd"
tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Metodo de pago: </h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-8">
                        <form action="#" class="credit-card-div">
                            <div class="panel panel-default" >
                                <div class="panel-heading">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="Introduzca el numero de la tarjeta" />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <span class="help-block text-muted small-font" > Expiry Month</span>
                                            <input type="text" class="form-control" placeholder="MM" />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <span class="help-block text-muted small-font" >  Expiry Year</span>
                                            <input type="text" class="form-control" placeholder="YY" />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <span class="help-block text-muted small-font" >  CCV</span>
                                            <input type="text" class="form-control" placeholder="CCV" />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <img src="../imagenes/cardsLogo.png" class="img-rounded img-card" />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12 pad-adjust">
                                            <input type="text" class="form-control" placeholder="Nombre del propietario " />
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <img src="../imagenes/tiposTarjetas.png" alt="..." width="210" class="pl-4">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-4">
                        <div class="container">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="credito_debito" name="metodoPago">
                                <label class="form-check-label ml-3" for="Credito_Debito">
                                    <img src="../imagenes/credit_debit.png" alt="..." width="100">
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" value="" id="oxxo" name="metodoPago">
                                <label class="form-check-label ml-3" for="oxxo">
                                    <img src="../imagenes/oxxo.svg" alt="..." width="85">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer"> <!--  -->
               
                <a type="button" class="btn btn-outline-primary btn-block" id="btnFin" onclick="finalizar()" href="./formCompra.php">
                    <i class="fas fa-money-check-alt mr-3"></i>Realizar pago
                </a>
                    
            </div>
        </div>
    </div>
    <h5 id="pruba"></h5>
</div>

<script>
function finalizar() {
    var date = new Date();
    date.setTime(date.getTime()+(1*24*60*60*1000));

    // ?? Almacenamos Metodo de pago
    var btnId = $('input[name=metodoPago]:checked').attr('id');

    // ?? Obtenemos ArrayJuegos de LS
    var juegos = JSON.parse(localStorage.getItem('Juegos'));
    var strIDs = '';

    for(let i = 0; i < juegos.length; i++) {
        if(i != (juegos.length - 1)) {
            strIDs += juegos[i].id.toString() + ':' + juegos[i].cantidad.toString() + ':';
        }else {
            strIDs += juegos[i].id.toString() + ':' + juegos[i].cantidad.toString();
        }
    }

    //?? Juegos cookie
    document.cookie = 'productos' + "=" + strIDs + "; expires=" + date.toGMTString();
    //?? Pago cookie
    document.cookie = 'pago' + "=" + btnId.toString() + "; expires=" + date.toGMTString();
}
</script>

<!--
<script type="text/javascript">
    $(document).ready(function () {
        $('#btnFin').click(function(){
            // ?? Almacenamos Metodo de pago
            var btnId = $('input[name=metodoPago]:checked').attr('id');
            var obj = {
                metodo: btnId
            };
            localStorage.setItem('Pago', JSON.stringify(obj));

            // ?? Obtenemos ArrayJuegos de LS
            var juegos = JSON.parse(localStorage.getItem('Juegos'));
            //** console.log(juegos);
            var pago = JSON.parse(localStorage.getItem('Pago'));
            //** console.log(pago);
            let x = 10;

            $.post('./carrito.component.php',   // url
            {juegos: juegos, pago: pago}, // data to be submit
            function(data, status, jqXHR) {// success callback
                console.log('Status: ' + status + ' ...Data: ' + data);
            });
        });
    });

    //            
</script>
-->



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
