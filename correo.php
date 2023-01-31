<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';



// $id = '';
// $nombre = '';
// $apellidoP = '';
// $apellidoM = '';
$correo = '';
// $apodo='';
// $tipoUsuario='';



$aEmail = isset($_POST['aEmail']) ? $_POST['aEmail'] : '';

function generatePassword($length)
{
    $key = "";
    $pattern = "123456789abcdefghijklmnopqrstABCDEFGHIJKLMNOPQRST";
    $max = strlen($pattern)-1;
    for($i = 0; $i < $length; $i++){
        $key .= substr($pattern, mt_rand(0,$max), 1);
    }
    return $key;
}
   


 if(isset($aEmail) && !empty($aEmail)){
    $con = new SQLite3("bestwine.db") or die("Error al conectar");
    $cs = $con -> query("SELECT * FROM user WHERE email='$aEmail'");



    $id = '';
    $nombre = '';
    $apellido = '';
    $email = '';
    $bpassword = '';
    $vpassword='';

    while($resul = $cs -> fetchArray()){
        $id = $resul['id'];
        $nombre = $resul['nombre'];
        $apellido = $resul['apellido'];
        $email = $resul['email'];
        $vpassword = $resul['vpassword'];
    }
    
    if($aEmail == $email ){
        if (isset($_POST['submitChars'])) {
            $chars= '8';
            $cont = 0 ;
            $length = (int)$_POST['chars'];  
            $javi =generatePassword($length);
            echo $javi;
        }   
        $mail = new PHPMailer(true);

        try {
        
            $mail->CharSet = 'UTF-8';
        
            $mail->isSMTP();
        
            $mail->Host       = 'smtp.gmail.com';  // host de correos
            $mail->SMTPAuth   = true;                                   // Activa la autenticación del Usuario
            $mail->Username   = '19302122@utfv.edu.mx';                     // SMTP Usuario
            $mail->Password   = 'Sharingan256';                               // SMTP Password
            $mail->SMTPSecure = 'tls';                                  // Tipo de protocolo de envio de correo
            $mail->Port       = 587;                                    // TCP Puerto Servidor
        
            //PARA PHP 5.6 Y POSTERIOR
            $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
        
            //Salida correo
            $mail->setFrom('19302122@utfv.edu.mx', 'The Best Wine');
            $mail->addAddress($email);     //Correo de Salida
        
            // Contenido
            $mail->isHTML(true);                                  // Activamos codigo HTML
            // $mail->msgHTML(file_get_contents('ejemplo.html'), __DIR__);     //Se envio archivo en HTML pero $mail->Body debe estar desactivado
            $mail->Subject = 'Cambio de contraseña - The Best Wine';
            $mail->Body    = '
            <h1>¡Hola '.$nombre.'!</h1>
            <br>
            <p>Contraseña restablecida, exitosamente.</p>
            <br>
            <p>Tu nueva contraseña es: <b>'.$javi.'</b></p>
            ';
        
            $mail->send();
            
        } catch (Exception $e) {
            $errorMSg = "No se pudo enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
            echo $errorMSg;
        }
        $cs = $con -> query("UPDATE user SET vpassword = '$javi' WHERE email ='$aEmail'");
    }else{
        echo '
        no esta
       ';
    }
} 
?>
