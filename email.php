<?php
@ob_start();
session_start();
?>


<?php

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $em = $_GET['em'];
    echo $em;

    $naam = $_SESSION["NNAME"];
    $b_name = $_SESSION['Bk_NAME'];

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
    $mail->Subject = 'About Request of collecting books.';
    //$mail->Body = '<h1 align=center> Hello!!</h1>';

    $txt = "Hello!<br>We are glad to inform you that your request for collecting the book '".$b_name."' has been collected.<br>You can borrow the book and enjoy gaining knowledge.";

    $mail->Body = $txt;
    if(!$mail->send())
    {
        echo "Mail not sent.";
        echo "Row deleted!\n";
      echo'<script>';
        echo'function pageRedirect() {';
            echo'window.location.replace("Report_at_Libr.php");';
        echo'}  ';    
        echo'setTimeout("pageRedirect()", 10);';
        echo'</script>';
        echo "<script>
        function checkdelete()
        {
          alert('Email not Sent');
          //window.location = 'email.php';
          
        }
        </script>";
    }
    else 
    {
        echo "<script>
        function checkdelete()
        {
          alert('Email Sent');
          //window.location = 'email.php';
          
        }
        </script>";
        echo "Mail sent!";
        echo "Row deleted!\n";
      echo'<script>';
        echo'function pageRedirect() {';
            echo'window.location.replace("Report_at_Libr.php");';
        echo'}  ';    
        echo'setTimeout("pageRedirect()", 10);';
        echo'</script>';
    }

?>
<?php ob_flush();  ?>