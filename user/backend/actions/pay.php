<?php
session_start();
include 'db.php';

	if(isset($_POST['pay'])){
		
        $depositid =mysqli_real_escape_string($conn,$_POST['depid']);

        $sql = "SELECT * FROM withdawalrequest WHERE withid='$depositid' ";
        $result= mysqli_query($conn,$sql);
        $result_checker= mysqli_num_rows($result);
    
        if($result_checker > 0){
    
            while($data = mysqli_fetch_assoc($result)){
    
                $uname= $data['username'];
                $amount= $data['amount'];
                $dd= $data['dateofwith'];
                $status= $data['statusofwith'];
                $totalbal= $data['earning'];
                $btc= $data['btcaddr'];
                $depositid= $data['withid'];
                $usdemail= $data['usdemail'];
                
    
                // $fn = $data['firstname'];
                // $ln = $data['lastname'];
    
			$latestranstactstatus="PAID";

			// CALACULATE DEPOSIT PLUS CURRENT BALANCE

			$currentwalletbalance=$totalbal-$amount;
            
            $balancedwithdrawal = $totalwith + $amount;

			// UPDATE TRANSACTION STATUS
			 $sql = "UPDATE withdawalrequest SET statusofwith ='$latestranstactstatus'
        WHERE withid='$depositid'
        ";
        mysqli_query($conn,$sql);


        $sql = "UPDATE users SET earn ='$currentwalletbalance', totalwith='$balancedwithdrawal'
        WHERE username='$uname'
        ";

$to = $usdemail;
$subject = 'Successful Withdrawal';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#336699'><span style='color:#083d6b'>Alliancecoinmining EXCHANGE </span>TIME</h3>";
// LOGO HERE
$message.=  "<img src='https://alliancecoinmining.com/images/mlogo/logo.png' alt='logo' width='100' height='65' style='margin-left:50%'>";

$message.=  "<h4 style='padding: 1px;'>Dear ".$fname ."</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
$message.="<p>Your withdrawal of  $".$amount." has been approved.</p>";
$message.="<p>The payment is currently being processed. and credicted to your wallet address.</p>";
$message.="<p>Please, check your wallet address with the address ".$btc ."</p>";

$message.="<p>Thanks for trusting Alliancecoinminingexchangetime. Stay connected, invest more and enjoy other benefits like loan and support signals</p>";

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via contact@alliancecoinmining.com

</p>";


$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Alliancecoinmining Exchange Time accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Alliancecoinmining Exchange Time, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";



$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Alliancecoinminingexchangetime ©2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";
mail($to, $subject, $message, $headers);

        mysqli_query($conn,$sql);

header("Location:../adminwithdrawlrequest.php?pay=sucess");

            }
        }
        }