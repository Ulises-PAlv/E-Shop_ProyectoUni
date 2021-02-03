<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
$correoE=$_POST['correo'];
$nombre=$_POST['nombre'];
$mensaje=$_POST['mensaje'];



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
    $mail->Password   = 'Jesus1234567890';                             // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('empresauriosgames@gmail.com', 'Administrador Empresaurios');
    $mail->addAddress($email, $name);     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nota de pago';
    $mail->Body    = 'Gracias por tu preferencia '.$name.'<br> Dirección: '.$direc.'<br> Ciudad: '.$city.' Codigo Postal: '.$cp. '<br> Subtotal: $'.$subtotal.'<br> Total a pagar: $'.$totalCompra;

    $mail->send();
    //echo '<script> alert("Correo enviado, atenderemos su duda lo más rápido posible") </script>';
    
    //echo 'El mensaje se envio a su corrreo';
} catch (Exception $e) {
    echo '<script> alert("Hubo un pedocles") </script>';
    echo "Hubo un error wapo: {$mail->ErrorInfo}";
}
echo '<meta http-equiv="refresh" content="0;url=contactanos.php">'
?>
