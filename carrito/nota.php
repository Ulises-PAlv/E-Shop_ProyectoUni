<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--<script type="text/javascript" 
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>-->

    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="./styles/carrito.css">
</head>

<body>
    <main class="mt-4 mb-5">
        <div class="container">
            <div class="jumbotron">
                <h2 style="text-align: center; font-weight: bolder;">Nota de compra</h2>
                <hr style="margin: 0 auto 25px auto;">
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <h4 style="font-weight: bold;"><?php echo $name ?></h4>
                            <h5><?php echo $email ?></h5>
                            <hr>

                            <h5>Datos de envio:</h5>
                            <p><span>Telefono: </span> <?php echo $tel ?></p>
                            <p><span>Ciudad: </span> <?php echo $city ?>, <span>CP: </span> <?php echo $cp ?></p>
                            <p><span>Dirección: </span><?php echo $direc ?></p>
                        </div>
                        <div class="col-5">
                            <h4>Pago desglosado:</h4>
                            <h5>Metodo de pago: <?php echo $pago ?></h5>
                            <hr>
                            <div class="container">
                                <?php
                                    for($i = 0; $i < ($dataLen / 2); $i++) {
                                        echo '<p><span>'.$nomJuegos[$i].' </span>... $'.$precios[$i].'</p>';
                                    }
                                ?>
                            </div>
                            <hr>
                            <p><span>Impuestos del 16% aplicados...</span></p>
                            <p><span>Descuento aplicado: </span><?php echo $cupon ?></p>
                            <p><span>Subtotal: </span> $<?php echo $subtotal ?></p>
                            <p><span>Total: </span> $<?php echo $totalCompra ?></p>
                        </div>
                        <a class="btn btn-outline-primary btn-block" href="../index.php">Volver a Home</a>
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
                <p>Copyright ©️ 2020 EMpresaurios. Todos los derechos reservados. Esta página es un trabajo universitario, no somos un sitio de venta de video-juegos reales.</p>
            </div>
        </div>
</footer>
</body>

</html>

<script>
    <?php require('./sendNota.php'); ?>
</script>

