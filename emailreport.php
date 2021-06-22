<?php
@ob_start();
session_start();
?>

<?php

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $naam = $_SESSION["NNAME"];
    $rtopic = $_SESSION['R_TOPIC'];


    $emr = $_GET['emr'];
    echo $emr;
    //$nam = $_GET['nam'];
    //echo $nam;

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = 'librarykotha@gmail.com';
    $mail->Password = '302kotha';

    $mail->setFrom('librarykotha@gmail.com','Kotha Library');
    $mail->addAddress($emr);
    $mail->addReplyTo('librarykotha@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'About Report to Library.';
    //$mail->Body = '<h1 align=center> Hello!!</h1>';

    $txt = "Hello ".$naam."!<br>We are glad to inform you that your report about '".$rtopic."' has been solved.";

    $mail->Body = $txt;

    if(!$mail->send())
    {
        
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
        
      echo'<script>';
        echo'function pageRedirect() {';
            echo'window.location.replace("Report_at_Libr.php");';
        echo'}  ';    
        echo'setTimeout("pageRedirect()", 10);';
        echo'</script>';
    }

?>
<?php ob_flush();  ?>