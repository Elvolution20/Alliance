<?php
include 'db.php';

 session_start();


    if(isset($_POST["register"])){

        // GET THE DATA from user

        $uname=mysqli_real_escape_string($conn,$_POST['uname']);
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $fname=mysqli_real_escape_string($conn,$_POST['fname']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $country=mysqli_real_escape_string($conn,$_POST['country']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        // $compwd =mysqli_real_escape_string($conn,$_POST['compwd']);

        // echo $uname;


        $sql = "UPDATE users SET  username='$name', fullname='$fname', pwd='$pwd', country='$country',  phone='$phone' WHERE username='$uname'

              ";

        mysqli_query($conn,$sql);

          $_SESSION['uid'] = $name;
            
		
		header("Location:../profile.php?sucess");
		 exit();



    }else{
    	header("Location:../profile.php?error?");
		 exit();
    }
?>