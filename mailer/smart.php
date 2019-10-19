<?php 


// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'marycheff@mail.ru';                 // Наш логин
$mail->Password = 'radugin230wemail.';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('marycheff@mail.ru', 'Марычев Мар');   // От кого письмо 
$mail->addAddress('marycheff.kolya2011@yandex.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment($_FILES['upload']['tmp_name'], $_FILES['upload']['name']);   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка с сайта';
$mail->Body    = '' .$name . ' оставил заявку, его почта ' .$email . ' <br>его комментарий ' .$message; 
	// Пользователь оставил свои данные <br> 
	// Имя: ' . $name . ' <br>
	// E-mail: ' . $email. '<br>
	// Комментарии: ' . $message. '';

$mail->AltBody = '';

if(!$mail->send()) {
    echo "Error";
} else {
    header('location: ../thankyou.html');
}

?>