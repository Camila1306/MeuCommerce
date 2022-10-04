<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPAuth = true;
$mail->Username = 'camila.rocha@unidavi.edu.br';
$mail->Password = '';
$mail->setFrom('camilaa7x@gmail.com', 'Camila Cordeiro da Rocha');
$mail->addAddress('devti.exemplo@gmail.com', 'DevTI Exemplo');
$mail->Subject = 'Teste e-mail DevTI [' . date('D M j G:i:s T Y') . ']';
$mail->msgHTML(file_get_contents('email.html'), __DIR__);
$mail->AltBody = 'E-mail enviado em HTML';
//$mail->addAttachment('imagens/redmi_note_10s.png');

if (!$mail->send()) {
    echo 'Erro ao enviar e-mail: ' . $mail->ErrorInfo;
} else {
    echo 'E-mail enviado!';
}
