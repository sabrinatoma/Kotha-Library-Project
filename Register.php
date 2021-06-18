
<?php
@ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSSAll/registerCSS.css" type="text/css">
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action = "Register.php" method = "post">
                        <input type="email" class="input-box" placeholder="Your Email Id" required name="mmail">
                        <input type="password" class="input-box" placeholder="Password" required name="ppass">
                        <button type="submit" class="submit-btn" name="log">Submit</button>
                    </form> 
                    <button type="button" class="btn" onclick="openRegister()">I'm New here</button> 
                    
                </div>
                <div class="card-back">
                    <h2>REGISTER</h2>
                    <form action = "Register.php" method = "post">
                        <input type="text" class="input-box" placeholder="Your Name" required  name="nam">
                        <input type="text" class="input-box" placeholder="Your  Id"  required name="id">
                        <input type="text" class="input-box" placeholder="Your Dept"  required name="dept">
                        <input type="email" class="input-box" placeholder="Your Email Id"  required  name="mail">
                        <input type="password" class="input-box" placeholder="Password" required  name="pass">
                        <input type="text" class="input-box" placeholder="Term"  name="lev">
                        <input type="text" class="input-box" placeholder="Level"  name="term">
                        <input type="text" class="input-box" placeholder="Your Phone Number" required   name="phone">
                        <button type="submit" class="submit-btn"  name="butt">Submit</button>
                    </form> 
                    <button type="button" class="btn" onclick="openLogin()">I have an account</button>  
              </div>
            </div>
        </div>
        </div>
        <script>
             var card=document.getElementById("card");
             function openRegister(){
                 card.style.transform="rotateY(-180deg)";
             }
             function openLogin(){
                 card.style.transform="rotateY(0deg)";
             }
        </script>
</body>
</html>

<?php
 //session_start();
$usr_name = 'SYSTEM';
    $pass = '123ORacle';

    $connectionString = 'localhost/xe';

    $connect = oci_connect($usr_name,$pass,$connectionString);

    if ($connect){
        //echo '<p>Connect hoise</p>';
    }
    else{
        //echo '<p>ki korsos bainchod</p>';
    }

   
    if (isset($_POST['butt'])){
        $id = $_POST['id'];
        $dept = $_POST['dept'];
        $nam = $_POST['nam'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
        $levv = $_POST['lev'];
        $terrm = $_POST['term'];
        $command = 'insert into PERSON_TABLE';
        $datas = ' values (' . "'".$id."'". "," . "'".$dept."'". ",". "'".$nam."'". ",". "'".$levv."'". ",". "'".$terrm."'".",". "'".$pass."'". "," .$phone. ",". "'".$mail."'".')';
        //echo $datas;
        $command.=$datas;
        $out = oci_parse($connect,$command);
        oci_execute($out);
        
    }
    $flag=0;
 
    $show_table = 'select * from PERSON_TABLE ';
    $out = oci_parse($connect,$show_table);
    oci_execute($out);
     if (isset($_POST['log'])){ 
        $inn1 = $_POST['mmail'];
        $inn2 = $_POST['ppass'];
        $_SESSION['Mail_ID']=$inn1;
        $_SESSION['PASSWORD']=$inn2;
        $show_table1 = "select * from PERSON_TABLE  where EMAIL ='".$inn1."'AND PASSWORD='".$inn2."' ";
        $out1 = oci_parse($connect,$show_table1);
        oci_execute($out1);
        
        
        while (($row = oci_fetch_array($out, OCI_NUM)) ) {
          
            if(($row = oci_fetch_array($out1, OCI_NUM)) ==true){
                $_SESSION['NNAME']=$row[2];
                $_SESSION['DDEPT']=$row[1];
                $_SESSION['IID']=$row[0];
                $_SESSION['PPHONE']=$row[6];
                $_SESSION['LLevel']=$row[3];
                $_SESSION['TTerm']=$row[4];
                $flag=1;break;
            }
          

        }
        if($flag==1)
        {
            $IDD= $_SESSION['IID'];
       if($IDD[0]=='S')
       {
        echo'<script>';
        echo'function pageRedirect() {';
            echo'window.location.replace("Homepage_std.php");';
        echo'}  ';    
        echo'setTimeout("pageRedirect()", 100);';
        echo'</script>';
       }
       else if($IDD[0]=='F')
       {
        echo'<script>';
        echo'function pageRedirect() {';
            echo'window.location.replace("Homepage_fac.php");';
        echo'}  ';    
        echo'setTimeout("pageRedirect()", 100);';
        echo'</script>';
       }
       else
       {
        echo'<script>';
        echo'function pageRedirect() {';
            echo'window.location.replace("Homepage_lib.php");';
        echo'}  ';    
        echo'setTimeout("pageRedirect()", 100);';
        echo'</script>';
       }
  
    
        }
        else{
            
            echo'<script>';
            echo'function pageRedirect() {';
                echo'window.location.replace("index.html");';
            echo'}  ';    
            echo'setTimeout("pageRedirect()", 100);';
        echo'</script>';
           
           
        }
     } 
     ob_flush();
     ?>    


