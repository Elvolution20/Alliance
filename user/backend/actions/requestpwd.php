<?php
    // session_start();

    if(isset($_POST['send'])){

         include 'db.php';

         $uname = mysqli_real_escape_string($conn,$_POST['uname']);

         if(empty($uname)){

             header("Location:../forgot.php?inputempty");
            exit();


         }else{

             $sql = "SELECT * FROM users WHERE username='$uname'";
            $result = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                 header("Location:../forgot.php?invaliduid");
                exit();
            }else{
                while($data = mysqli_fetch_assoc($result)){
                    $usd =$data['username'];
                    $email =$data['email'];
                    $pwd =$data['pwd'];



                    // SEND MAIL FOR FORGETTEN PASSWORD

$to = $email;
$subject = 'Password';
$from = 'contact@alliancecoinmining.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message


$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#336699' style='text-align:center;'><span style='color:#083d6b'>Alliancecoinmining EXCHANGE</span>TIME</h3>";
// LOGO HERE
$message.=  "<img src='https://www.alliancecoinmining.com
/assets/img/logo.png' alt='logo' width='100' height='50'margin-left='30%'>";

// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$usd.",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p style='text-align:center;'> Your password is ". $pwd." </p>";

$message.="<p style='text-align:center;'> Keep your details safe/secret and don't share to any third party in order not to compromise your account. </p>";

$message.="<p style='text-align:center;'> Thanks for chosing Alliance Coin Mining and trusting our services. </p>";

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via <span style='color#fff; background-color:#336699; padding:8px;'>contact@alliancecoinmining.com</span></p>";
$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Alliance Coin Mining accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Alliance Coin Mining, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Alliancecoinminingexchangetime © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);








                    
                    header("Location:../login.php?mailforgottensentsuc");
                    exit();

                }
            }




         }









    }else{
          header("Location:../forgotpwd.php?loginempty");
            exit();
    }