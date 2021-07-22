<?php session_start();

//Import PHPMailer classes into the global namespace

//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

require 'mail/PHPMailer.php';

require 'mail/SMTP.php';

require 'mail/Exception.php';



//Load Composer's autoloader

// require 'vendor/autoload.php';



//Create an instance; passing `true` enables exceptions

$mail = new PHPMailer(true);



try {

    //Server settings

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

    $mail->isSMTP();                                            //Send using SMTP

    $mail->Host       = 'smtp.mail.ru';                     //Set the SMTP server to send through

    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    $mail->Username   = 'mberdenev@mail.ru';                     //SMTP username

    $mail->Password   = 'Zverenish322';                               //SMTP password

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`



    //Recipients

    $mail->setFrom('mberdenev@mail.ru', 'Mailer');

    $mail->addAddress('dan.padaleki@yandex.ru');     //Add a recipient

    $mail->addAddress('carequality_store@mail.ru');               //Name is optional

    // $mail->addReplyTo('info@example.com', 'Information');

    // $mail->addCC('cc@example.com');

    // $mail->addBCC('bcc@example.com');



    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    include 'goods.php';

    $message='Заказал: Имя:'.$_POST['name'].' email:'.$_POST['email'].' telephone'.$_POST['telephone'];

    foreach ($_SESSION as $key => $value) {

        if($key=='amount') continue;

        if($value==0) continue;

        $message.='
`           
               

                Название:'.$goods["$key"]["name"].'

                Количество:'.$value.'</span>

            

        ';

    }

    

    unset($value);



    //Content

    $mail->isHTML(true);                                  //Set email format to HTML

    $mail->Subject = 'Hreewewa';

    $mail->Body    = $message;

    $mail->AltBody = '';



    $mail->send();

    echo '<h1 style="text-align:center;">Заказ оформлен</h1>';

} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}