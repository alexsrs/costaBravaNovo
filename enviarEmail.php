<?php
$name = $_POST['nome'];
$email = $_POST['email'];

require("/home1/costab64/public_html/_app/Library/PHPMailer/class.phpmailer.php");
require("/home1/costab64/public_html/_app/Library/PHPMailer/class.smtp.php");


 $mail = new phpmailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "costabravaclube.com.br";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "site@costabravaclube.com.br";
 $mail->Password = "joatinga";
 $mail->SetFrom("site@costabravaclube.com.br");

 $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 $mail->Subject = "[Costa Brava Clube] Mensagem enviada pelo site";

 $mail->Body .= " Nome: ".$_POST['nome']." <br>
"; // Texto da mensagem
 $mail->Body .= " E-mail: ".$_POST['email']." <br>
"; // Texto da mensagem 
 $mail->Body .= " Assunto: ".$_POST['assunto']." <br>
"; // Texto da mensagem
 $mail->Body .= " Mensagem: ".nl2br($_POST['mensagem'])."
"; // Texto da mensagem

$mail->AddReplyTo($email, $name);


 $mail->AddAddress("info@costabravaclube.com.br");
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
       echo "Mensagem enviada com sucesso";
    }
?>
