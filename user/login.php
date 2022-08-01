<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alliancecoinmining | Login </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="auth/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="auth/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="auth/font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="css-1?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="auth/style.css">

    <link rel="icon" type="image/ico" href="images/favicon.ico">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="fxt-template-animation fxt-template-layout21">
        <!-- Animation Start Here -->
        <div id="particles-js"></div>
        
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
                 <div class="fxt-content">
                     <div class="fxt-header">
                         <img src="images/logo.png" style="height: 80px;width: 150px;">
                         <p>Login into your dashboard.</p>

                          <?php

                 $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


                   if(strpos($url, 'loginempty') == true){
                       echo "<p class='suc' style='color:red;font-size:20px;'>Please,fill out all inputs  </p>";
                   }

                   if(strpos($url, 'invaliduid') == true){
                       echo "<p class='text-danger' style='font-size:13px;'><i class='fas fa-user-alt-slash'></i> Sorry no such user found</p>";
                   }

                    if(strpos($url, 'invalidpwd') == true){
                       echo "<p class='text-danger' style='font-size:13px;'><i class='fas fa-user-alt-slash'></i> Your password is incorect</p>";
                   }

                   if(strpos($url, 'logoutsuc') == true){
                    echo "<p  style=' color:green;font-size:13px;'><i class='fas fa-user-lock'></i> You are currently logged out</p>";
                 }


                    if(strpos($url, 'signupsuc') == true){
                       echo "<p class='suc' style='color:green;font-size:13px;'>Your registration was successful, we sent you a welcome mail with your login details, carefully go through the mail.</p>";
                    }
                   if(strpos($url, 'loginsuc') == true){
                       echo "<p class='suc' style='color:green;font-size:13px;'> Login successfull...Please wait..</p>";
                    }


                   if(strpos($url, 'mailforgottensentsuc') == true){
                       echo "<p class='text-success' style='font-size:13px;'><i class='fas fa-envelope'></i> your password has been sent to your Email, Confirm and Login..</p>";
                    }


       ?>
                     </div>
                     <div class="fxt-form">

                         <form method="POST" action="backend/actions/login.php">


                             <input type="hidden" name="_token" value="e3a6ddCmHZDI33XELsLLR8xE9oJL0p0bW9Vccz8u">                             

                             <div class="form-group">
                                 <div class="fxt-transformY-50 fxt-transition-delay-1">
                                     <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="" required="">
                                                                      </div>
                             </div>

                             <div class="form-group">
                                 <div class="fxt-transformY-50 fxt-transition-delay-2">
                                     <input id="password" type="password" class="form-control" name="pwd" placeholder="********" required="">
                                     <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="fxt-transformY-50 fxt-transition-delay-3">
                                     <div class="fxt-checkbox-area">
                                         <div class="checkbox">
                                             <input id="checkbox1" type="checkbox" >
                                             <label for="checkbox1">Keep me logged in</label>
                                         </div>
                                         <a href="backend/forgot.php" class="switcher-text">Forgot Password</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="fxt-transformY-50 fxt-transition-delay-4">
                                     <button style="background-color: #08237e" type="submit" name="login" class="fxt-btn-fill">Log in</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <div class="fxt-footer">
                         <div class="fxt-transformY-50 fxt-transition-delay-9">
                             <p>Don't have an account?<a href="register.php" class="switcher-text2 inline-text">Register</a>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     </section>
    <!-- jquery-->
    <script src="auth/js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="auth/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="auth/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="auth/js/imagesloaded.pkgd.min.js"></script>
    <!-- Particles js -->
    <script src="auth/js/particles.min.js"></script>
    <script src="auth/js/particles-1.js"></script>
    <!-- Validator js -->
    <script src="auth/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="auth/js/main.js"></script>

    <!--Start of Tawk.to Script-->
<script src="//code.jivosite.com/widget/EfzjzCGYnS" async></script><!--End of Tawk.to Script-->
</body>


<!-- Mirrored from affixtheme.com/php/xmee/demo/login-21.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 May 2021 11:47:03 GMT -->

</php>