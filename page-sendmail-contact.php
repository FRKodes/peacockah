<?php
if (isset($_POST['email'])) {
    
    $from           = trim($_POST['email']);
    $nombre 		= utf8_decode($_POST['nombre']);
    $email          = utf8_decode($_POST['email']);
    $telefono       = utf8_decode($_POST['telefono']);
    $mensaje        = utf8_decode($_POST['mensaje']);

    require_once('./PHPMailer/class.phpmailer.php');

    //PHPMailer Object
    $mail = new PHPMailer(true);
    $mail->From = $email;
    $mail->FromName = $nombre;
    $mail->addAddress('ventas@peacockanimalhealth.com', 'PEACOCK ANIMAL HEALTH');
    // $mail->addAddress('frkalderon@gmail.com', 'PEACOCK ANIMAL HEALTH');
    $mail->addReplyTo("ventas@peacockanimalhealth.com", "Reply");
    $mail->addBCC("frkalderon@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = "Contacto Web PEACOCK ANIMAL HEALTH";
    $mail->Body = "<p>". $nombre ." escribi&oacute;: </p>";
    $mail->Body.= "<p>Nombre<b>: </b>". $nombre ."</p>";
    $mail->Body.= "<p>Email<b>: </b>". $email ."</p>";
    $mail->Body.= "<p>Telefono<b>: </b>". $telefono ."</p>";
    $mail->Body.= "<p><b>Comentarios: </b>". $mensaje ."</p>";
    $mail->AltBody = "Nombre: " . $nombre." // Email: ".$email." // Telefono: ".$telefono." // Mensaje: ".$mensaje ." ";

    if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; }
    else {echo "Message has been sent successfully"; }

}