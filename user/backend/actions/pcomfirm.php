<?php
include 'db.php';
	
	if (isset($_POST['proceed'])) {

		$pwd =mysqli_real_escape_string($conn,$_POST['pass']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$fname=mysqli_real_escape_string($conn,$_POST['name']);

		$otp = uniqid();
		
// echo $email;
    

        if(empty($pwd) ){

            header("Location:../withcomfirm.php?loginempty");
            exit();


        }else{ 


         $sql = "SELECT * FROM users WHERE email ='$email' ";
            $result = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                header("Location:../withcomfirm.php?invaliduid");
                exit();

            }else{

               if($row=mysqli_fetch_assoc($result)){

                $cpwd = $row['pwd'];
                
                   
				//de-hashed the password
                // $hashedpwd = password_verify($pwd, $row['pwd']);
                
                if($pwd != $cpwd){
                header("Location:../withcomfirm.php?invalidpassword");
                exit();

                }else{



		//registeration email
$to = $email;
$subject = "Alliancecoinminingexchangetime withdrawal otp";
$from = "contact@alliancecoinmining.com";
 
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>OTP VERIFICATION</span></h3>";
// LOGO HERE
$message.=  "<img src='https://www.alliancecoinmining.com/assets/img/bo.png' alt='logo' width='100' height='65'>";

$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<h3 style='text-align:center; color:#336699;'>Hello, ".$fname." </h3>";

$message.="<p style='text-align:center;'>You have initiated a withdrawal request, use the OTP below to complete your request. </p>";

$message .=  "<p style='text-align:center; color:blue;'>".$otp."</p> ";


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
        
		header("Location:../requestwith.php?success");
		exit();

}

}
}
}
	}else{
		header("Location:../withcomfirm.php?error");
		exit();
	}

                	
   
       