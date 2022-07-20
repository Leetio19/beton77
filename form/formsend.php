<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.jino.ru';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    $mail->Username = 'beton@beton77.ru';
    $mail->Password = 'Ibrae2022';
    $mail->setFrom('beton@beton77.ru', 'Beton77');
    $mail->addAddress('Arm_93@mail.ru', 'Receiver Name');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Заявка с сайта Beton77.ru';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Имя: {$_POST['name']}
Телефон: {$_POST['phone']}
Сообщение/Заказ: {$_POST['message']}
EOT;
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Share it with us!';
    }
    ?>
