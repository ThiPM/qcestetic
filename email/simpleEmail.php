<?php


function enviarEmail( $to, $from, $replyTo, $subject, $message ) {
    $headers =  'From: '       .$from .    "\r\n" .
                'Reply-To: '   .$replyTo . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $mail_enviado =   mail($to, $subject, $message, $headers);
    // A função mail() retorna true ou false pro envio
    if ( $mail_enviado ){
        return (true);
    }else{
        return (false);
    }
    
}

?>
