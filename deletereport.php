

<?php

//include ("Report_at_Libr.php");

$usr_name1 = 'DMBS1';
$pass1 = '12345';

$connectionString1 = 'localhost/xe';

$connect1 = oci_connect($usr_name1,$pass1,$connectionString1);

$tp = $_GET['tp'];
echo $tp;


  $query1 = "DELETE FROM reporttable WHERE TOPIC='$tp'";
  echo $query1;
    $run1 = oci_parse($connect1,$query1);
    oci_execute($run1);

  if($run1)
  {


      echo "Row deleted!\n";
      echo'<script>';
        echo'function pageRedirect() {';
            echo'window.location.replace("Report_at_Libr.php");';
        echo'}  ';    
        echo'setTimeout("pageRedirect()", 10);';
        echo'</script>';
  }
  else
  {
      echo "Not Deleted";
  }


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