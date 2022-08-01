<?php
include 'db.php';

	if(isset($_POST['upload'])){
		

        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $gov = mysqli_real_escape_string($conn,$_POST['id']);
        $country = mysqli_real_escape_string($conn,$_POST['coun']);

		date_default_timezone_set('Africa/lagos');
        $date=date("Y-m-d H:i:s");
		$kycid=uniqid();
		// IMAGE 
        $selfie = $_FILES['selfie']['name'];
		$validid = $_FILES['validid']['name'];
		// $ssn = $_FILES['ssn']['name'];
		$license = $_FILES['lin']['name'];

        //path to file
        // $target1 = "../kyc/".basename($_FILES['selfie']['name']);
        
        $target2 = "../kyc/".basename($_FILES['validid']['name']);

        // $target3 = "../kyc/".basename($_FILES['ssn']['name']);
        
        // $target4 = "../kyc/".basename($_FILES['lin']['name']);

		// INSERT INTO DB

		$sql ="INSERT INTO kyc (dateup,idcard,gov,country,username,kid) VALUES ('$date','$validid','$gov', '$country','$uname','$kycid')";

		move_uploaded_file($_FILES['validid']['tmp_name'], $target2);
		// move_uploaded_file($_FILES['selfie']['tmp_name'], $target1);
		// move_uploaded_file($_FILES['ssn']['tmp_name'], $target3);
		// move_uploaded_file($_FILES['lin']['tmp_name'], $target4);

		mysqli_query($conn,$sql);
        
                // send mail to admin..
      $mailTo = "contact@alliancecoinmining.com";//change the email address
      $header = "contact@alliancecoinmining.com";
      $sub = "New Verification Request from: ".$username;
      $txt = "Hello Admin, you have a new verification request from: "."\n\n"."Username: ".$username."\n\n"."Email: ".$useremail;
     
      mail($mailTo,$sub,$txt,$header);

        //registeration email
$to = $email;
$subject = 'Verification';
$from = 'contact@alliancecoinmining.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
// <img src="http://www.yourserver.com/myimages/image1.jpg

$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#ffc000'><span style='color:white'>KYC</span> VERIFICATION</h3>";
// LOGO HERE

$message.=  "<img src='https://www.alliancecoinmining.com
/assets/img/bo.png' alt='logo' width='100' height='65'>";

// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Hello ". $uname. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>Your kyc verification has been received and will be reviewed shortly. This may take 24 hours in order to validate the informations you provided us with.</p>";


$message.="<p>Your are informations are secured with our high encryption database and cannot be shared with third party</p>";

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via contact@alliancecoinmining.com

</p>";


$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Alliancecoinmining Exchange Time accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Alliancecoinmining Exchange Time, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";



$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Alliancecoinminingexchangetime © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);



		header("Location:../kyc.php?uploadsuc");
		 exit();

		
	}else{
		header("Location:../kyc.php?error");
		exit();
	}