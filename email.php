<?php

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $em = $_GET['em'];
    echo $em;

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = 'librarykotha@gmail.com';
    $mail->Password = '302kotha';

    $mail->setFrom('librarykotha@gmail.com','Kotha Library');
    $mail->addAddress($em);
    $mail->addReplyTo('librarykotha@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Php Mailer Testing.';
    $mail->Body = '<h1 align=center> Worked!! </h1>';

    if(!$mail->send())
    {
        echo "Mail not sent.";
    }
    else echo "Mail sent!";

?>