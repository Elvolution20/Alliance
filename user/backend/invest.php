
<?php
    session_start();

    include 'actions/db.php';

    
     $uname = $_SESSION['uid'];

      $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "SELECT * FROM users WHERE username='$uname' ";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);

    if($result_checker > 0){
        while($data = mysqli_fetch_assoc($result)){

            $name = $data['username'];
            $fname= $data['fullname'];
            $email= $data['email'];
            $pwd= $data['pwd'];

            $country= $data['country'];
            $btc= $data['btcaddr'];
            $totalbal= $data['totalbal'];
            $totalwith= $data['totalwith'];
            $lastdep= $data['lastdeposit'];             
            $earning= $data['earn'];
            $lastwith= $data['lastwith'];

             $date= $data['registerdate'];
            
             $current= $data['current'];
             $totalinvestment = $data['totalinvestment'];

            
                



        }

    }
?>


<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Alliance Coin Mining - userdashboard</title>
  <!-- General CSS Files -->

  <!--begining of new css-->
  <link rel="stylesheet" href="asset/css/app.min.css">
  <link rel="stylesheet" href="asset/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="asset/bundles/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="asset/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="asset/bundles/summernote/summernote-bs4.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="asset/css/custom.css">

  <!--end of new css-->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/bundles/prism/prism.css">
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">


  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
  
  <link href="vendorz/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script type="text/javascript">
                        

                        function checkamountbal_with(){
                               
                               // var getamountbalance = document.getElementById("get_amoutbal").innerHTML;
           
                                var walletbals = document.forms['withdrawal']['walletbal'].value;
           
                                 var amounwith = document.forms['withdrawal']['amount'].value;
           
                                 var amountinvestnumber = parseInt(amounwith,10);
           
                               // alert(getamountdeposit);
           
                               if(amountinvestnumber > walletbals){
           
                                   alert("insufficient fund");
           
                                   // getamountdeposit.focus();
           
                                   return false;
           
                               }
           
                               return true;
                       }
           
           
           
           
           
                           </script>
           

</head>

<body>
  
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
                <!-- <img alt="image" src="assets/img/logo.png" height="60px"  width="20%" class="header-logo" />-->
           <h6 style="color:#5b53ae"><?php date_default_timezone_set('Africa/lagos');
           $date= date('Y-m-d h:i:s');
           echo $date;
           
           ?><br>Your Account Today</h6>

          </ul>
        </div>





        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                1 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <!-- <a href="#">Mark All As Read</a> -->
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="welcome.php" class="dropdown-item"> <span class="dropdown-item-avatar
                      text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user"><?php echo $fname?></span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> 

              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>









          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
                        fa-code"></i>
                  </span> <span class="dropdown-item-desc"> You Will be notified when something new appears.<span class="time">
                      </span>
                  </span>
                </a> 

              </div>
            
            </div>
          </li>




            <?php
                 $sql = 'SELECT * FROM kyc';
                     $result = mysqli_query($conn,$sql);
                     $result_check = mysqli_num_rows($result);
                     if($result_check > 0){
                          while($data = mysqli_fetch_assoc($result)){
                                    $dd= $data['dateup'];
                                    $img1= $data['idcard'];
                                    $img2= $data['Selfie'];
                                    $img3= $data['ssn'];
                                    $img4 = $data['license'];
                                    $uname= $data['username'];
                                    $proofid= $data['kid'];

                                  }
                                }

              ?>




          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
              <!-- <?php echo "<img height='100%' width='100%' src='kyc/".$img2." '>"; ?> -->
                  

       <img alt="image" src="components/img/profile1.png" class="user-img-radious-style"> 
                </span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?php echo $uname?> </div>



              <a href="profile.php" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Profile
              </a> 

              


              <a href="dephistory.php" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> 

              <a href="kyc.php" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Verify
              </a>
              <div class="dropdown-divider"></div>

              <a href="#" class="dropdown-item has-icon text-danger"> 
               
              <form action="actions/loggout.php" method="POST"><button type="submit" style="color:red" class="btn" name="logout"><i data-feather="power"></i> Logout</button></form>
              </a>
            </div>
          </li>
        </ul>
















        
      </nav>
      <div class="main-sidebar sidebar-style-2 " style="background-color:#5b53ae">
        <aside id="sidebar-wrapper ">
          <div class="sidebar-brand">
            <a href="#0"><img src="assets/img/logo.png" style="height: 50px;width: 100px;"></a><br>
            <!-- <a href="#"> <img alt="image" src="components/img/profile1.png" class="header-logo" /> -->
             <span class="logo-name" style="color:white;font-size:14px"><?php echo $uname;?></span>
            </a>
          </div>
          <ul class="sidebar-menu ">
        
            <li class="dropdown">
              <a href="userdashboard.php" class="nav-link" style="color:orange"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="deposit.php" class="nav-link" style="color:orange"><i
                  data-feather="credit-card"></i><span>Deposit</span></a>
              
            </li>

            <li>
              <a href="proof.php" class="nav-link" style="color:orange"><i data-feather="send"></i><span>Confirm deposit</span></a>
             
            </li>

            <li class="dropdown">
              <a href="trade.php" class="nav-link" style="color:orange"><i data-feather="bar-chart-2"></i><span>Trade/Mining</span></a>
            </li>
           
            <li class="dropdown">
              <a href="invest.php" class="nav-link" style="color:orange"><i data-feather="bar-chart"></i><span>Investment</span></a>
            </li>
            
            <li class="dropdown">
              <a href="loanrequest.php" class="nav-link" style="color:orange"><i data-feather="activity"></i><span>Loan Request</span></a>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown" style="color:orange"><i data-feather="command"></i><span>Transaction history</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="dephistory.php" style="color:white">Deposit History</a></li>
                <li><a class="nav-link" href="Withdrawlhist.php" style="color:white">Withdrawal History</a></li>
                <li><a class="nav-link" href="investhistory.php" style="color:white">Investment History</a></li>
              </ul>
            </li>

          
             <li class="dropdown">
              <a href="withcomfirm.php" class="nav-link" style="color:orange"><i
                  data-feather="layers"></i><span>Request Withdrawal</span></a>
            </li>
           
              <a href="profile.php" class="nav-link" style="color:orange"><i data-feather="user"></i><span>My Profile</span></a>
             
            </li>
            <li>
              <a href="kyc.php" class="nav-link" style="color:orange"><i data-feather="upload-cloud"></i><span>Kyc Verification</span></a>
             
            </li>


                        <li>
              <a href="refer.php" class="nav-link" style="color:orange"><i data-feather="share-2"></i><span>Refer and earn</span></a>
             
            </li>
            <li class="nav-link">
             
              <form action="actions/loggout.php" method="POST"><button type="submit" style="color:#fff; background-color: red; border-radius: 5px; padding: 8px;" class="btn" name="logout"><i data-feather="power"></i> Logout</button></form>
            </li>
            
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">


                          <div class="card-body">
                    <div class="media">
                      <img class="mr-3" src="assets/img/image-64.png" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0">Alliance Coin Mining investment Plans</h5>
                        <p class="mb-0">Check out our Amazing Investment Plans. Remember, choose the investment plan that suits your needs. The higher your plan, the more ROI(Return On Investment) you enjoy and Alliance Coin Mining loan qualification.</p>
                      </div>
                    </div>
                  </div>
     
      <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($url, 'invsilversuc') == true){
    echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your Silver Plan Investment Was Successful... </p>";
  }

  if(strpos($url, 'invgoldsuc') == true){

    echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your Gold Plan Investment Was Successful....</p>";
  }



  if(strpos($url, 'invplasuc') == true){

    echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your Platinum Plan Investment Was Successful....</p>";
  }
  if(strpos($url, 'invplatinumsuc') == true){

    echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your yearly Plan Investment Was Successful....</p>";
  }


?>

  <div class="row" >
                 
              <div class="col-lg-3 col-md-6 col-sm-6 col-12" >
                <div class="card card-statistic-1" style="background-color:#5b53ae;color:white">
                  <div class="card-icon bg-secondary">
                    <i class="fas fa-wallet" style="color:black"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0 " style="color:white">
                          <i class="ti-arrow-up text-success"></i> 
                          $<?php echo $totalbal;?>
                        </h3>
                        <span class="" style="color:orange">Wallet Balance</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                 <div class="col-xl-3 col-lg-6" >
                <div class="card" style="color:black">
                  <div class="card-bg" style="background-color:#5b53ae;color:white">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Bronze Plan</h5>
                      <h2 class="mb-3 font-18">Mining Interest : 20%</h2>
                      <a href="#" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal3">Invest</a>
                      <p class="mb-0"><span class="col-orange">$100</span> min. deposit</p>
                      <p class="mb-0"><span class="col-orange">$499</span> max. deposit</p>
                      <p class="mb-0"><span class="col-orange">ROI</span> after 1 day</p>
                      <p class="mb-0"><span class="col-orange">10%</span> referral bonus</p>
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-orange font-30 p-r-30"></i>
                    
                    </div>
                    <canvas id="cardChart1" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>
            
              <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:black">
                  <div class="card-bg" style="background-color:#5b53ae;color:white">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Silver Plan</h5>
                      <h2 class="mb-3 font-18">Mining Interest : 35%</h2>
                      <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal2">Invest</a>
                      <p class="mb-0"><span class="col-orange">$500</span> min. deposit</p>
                      <p class="mb-0"><span class="col-orange">$999</span> max. deposit</p>
                      <p class="mb-0"><span class="col-orange">ROI</span> after 1 day</p>
                      <p class="mb-0"><span class="col-orange">10%</span> referral bonus</p>
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-green font-30 p-r-30"></i>
                    </div>
                    <canvas id="cardChart2" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>
            
              <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:black">
                  <div class="card-bg" style="background-color:#5b53ae;color:white">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Gold Plan</h5>
                      <h2 class="mb-3 font-18">Mining Interest : 135%</h2>
                      <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal1">Invest</a>
                      <p class="mb-0"><span class="col-orange">$1000</span> min. deposit</p>
                      <p class="mb-0"><span class="col-orange">$4999</span> max. deposit</p>
                      <p class="mb-0"><span class="col-orange">ROI</span> after 3 days</p>
                      <p class="mb-0"><span class="col-orange">10%</span> referral bonus</p>
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-blue font-30 p-r-30"></i>
                    </div>
                    <canvas id="cardChart3" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>

             <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:black">
                  <div class="card-bg" style="background-color:#5b53ae;color:white">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Premium Plan</h5>
                      <h2 class="mb-3 font-18">Mining Interest : 455%</h2>
                      <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal5">Invest</a>
                      <p class="mb-0"><span class="col-orange">$5000</span> min. deposit</p>
                      <p class="mb-0"><span class="col-orange">$9999</span> max. deposit</p>
                      <p class="mb-0"><span class="col-orange">ROI</span> after 7 days</p>
                      <p class="mb-0"><span class="col-orange">10%</span> referral bonus</p>
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-red font-30 p-r-30"></i>
                    </div>
                    <canvas id="cardChart3" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>




              




</div>
              <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header" style="background-color:#5b53ae;color:white">
                  <h4 style="color:white"><i class="fab fa-btc"></i>Bitcoin Live Trading Chart</h4>
                  
                </div>
                <div class="card-body">
                  
                   
                <iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=dark&amp;cnt=10&amp;pref_coin_id=1505&amp;graph=yes" width="100%" height="649px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe><br><br>
                  
                    </div>
                   
                    </div>
                  </div>
                </div>

                
              </div>
            </div>
          </div>




              </div>
            </div>
          </div>
        </section>

<!-- silver plan modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="">
                <h5 class="modal-title" id="formModal" style="color:#5b53ae"><i class="material-icons">equalizer</i> Investment Panel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              <script type="text/javascript">
             function checkamountbal_with(){
             
                     var walletbals = document.forms['invest']['totalbal'].value;
                      var amounwith = document.forms['invest']['amount'].value;
                      var amountinv = parseInt(amounwith,10);
                 
                    if( amountinv > walletbals){
                      swal('Insufficient Funds', 'Your Investment Request failed due to Insufficient Funds!', 'error');
                        
                        return false;
                    }if(amountinv < 200){
                      swal('Transaction failed', 'Amount you entered is below the minimum investment amount for this plan!', 'error');
                      
                        return false;
                    }if(amountinv > 999){
                      swal('Transaction failed', 'Amount you entered is above the maximum investment amount for this plan!', 'error');
                       
                        return false;
                    }return true;
            }
                </script>

<h5>Basic Plan</h5>
                
                <form name="invest" method="POST" action="actions/investsilver.php" onsubmit="return checkamountbal_with()" class="needs-validation" novalidate="">
                <!-- <div class="form-group">
                    <label style="color:black">Investment Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="silver" name="plan" >
                   
                  <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                  <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="current" value="<?php echo $current;?>">
                   <input type="hidden" name="investment" value="<?php echo $totalinvestment;?>">
                  <div class="form-group">
                    <label style="color:black">Investment Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="number" class="form-control" placeholder="enter amount here..." name="amount" tabindex="1" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
                  
                  <button type="submit" name='invest' class="btn m-t-15 waves-effect" tabindex="4" style="background:#5b53ae;color:white "><i class="far fa-paper-plane"></i> proceed</button>
                  
                </form>
              </div>
            </div>
          </div>
        </div>


<!-- Gold plan modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="">
              <h5 class="modal-title" id="formModal"style="color:#5b53ae"><i class="material-icons">equalizer</i> Investment Panel</h5>                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_gold(){
                     var walletbal = document.forms['invest1']['totalbal'].value;
                      var amounin = document.forms['invest1']['amount'].value;
                      var amountchk = parseInt(amounin,10);
                    if( amountchk > walletbal){
                      swal('Insufficient Funds', 'Your Investment Request failed due to Insufficient Funds!', 'error');
                        return false;
                    }if(amountchk < 1000){
                      swal('Transaction failed', 'Amount you entered is below the minimum investment amount for this plan!', 'error');
                     
                        return false;
                      }if(amountchk > 19999){
                        swal('Transaction failed', 'Amount you entered is above the maximum investment amount for this plan!', 'error');
                     
                        return false;
                      
                    }return true;
               }
                </script>
   <h5>Standard Plan</h5>
                  <form name="invest1" method="POST" action="actions/investgold.php" onsubmit="return checkamountbal_gold()" class="needs-validation" novalidate="">
                 <!-- <div class="form-group">
                    <label style="color:black">Investment Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="gold" name="plan" readonly="">
                   
                  
                  <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                  <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="current" value="<?php echo $current;?>">
                  <input type="hidden" name="investment" value="<?php echo $totalinvestment;?>">
                  <div class="form-group">
                    <label style="color:black">Investment Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="number" class="form-control" placeholder="enter amount here..." name="amount" tabindex="3" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
                  
                  <button type="submit" name="invest" class="btn m-t-15 waves-effect" tabindex="5" style="background:#5b53ae;color:white"><i class="far fa-paper-plane"></i>proceed</button>
                </form>
              </div>
            </div>
          </div>
        </div>


         <!-- Ultra plan modal -->
       <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="">
                <h5 class="modal-title" id="formModal" style="color:#5b53ae"><i class="material-icons">equalizer</i> Investment Panel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_diamond(){
                     var walletbal = document.forms['investd']['totalbal'].value;
                      var amound = document.forms['investd']['amountd'].value;
                      var amountchk = parseInt(amound,10);
                    if( amountchk > walletbal){
                      swal('Insufficient Funds', 'Your Investment Request failed due to Insufficient Funds!', 'error');
                       
                      return false;
                    }if(amountchk < 10000){
                     
                      swal('Transaction failed', 'Amount you entered is below the minimum investment amount for this plan!', 'error');
                     
                      return false;

                     }if(amountchk > 19999){
                     
                      swal('Transaction failed', 'Amount you entered is greater than the maximum investment amount for this plan!', 'error');
                     
                      return false;
                    
                    }return true;
               }
                </script>

              <h5>Ultra Plan</h5>
             
                <form name="investd" method="POST" action="actions/investdiamond.php" onsubmit="return checkamountbal_diamond()" class="needs-validation" novalidate="">
                 <!-- <div class="form-group">
                    <label style="color:black">investment Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="platinum" name="plan" readonly="">
                    
                  <div class="form-group">
                    <label style="color:black">investment Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                      <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="current" value="<?php echo $current;?>">
                         <input type="hidden" name="investment" value="<?php echo $totalinvestment;?>">
                      <input type="number" class="form-control" placeholder="enter amount here..." name="amountd" tabindex="7" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
                  
                  <button type="submit" name="invest" class="btn m-t-15 waves-effect" tabindex="8" style="background:#5b53ae;color:white "><i class="far fa-paper-plane"></i>proceed</button>                </form>
              </form>
                </div>
            </div>
          </div>
        </div>




       <!-- Vip plan modal -->
       <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="background: linear-gradient(45deg, #121045, #98258d);">
              <h5 class="modal-title" id="formModal" style="color:orange"><i class="fas fa-signal"></i> Investment Panel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_platinum(){
                     var walletbal = document.forms['investp']['totalbal'].value;
                      var amound = document.forms['investp']['amountp'].value;
                      var amountchk = parseInt(amound,10);
                    if( amountchk > walletbal){
                      swal('insufficient wallet Balance',  'error');
                        return false;

                     }if(amountchk < 50000){
                     
                      swal('Transaction failed', 'Amount you entered is less than the minimum investment amount for this plan!', 'error');
                     
                      return false;
                   
                    }return true;
               }
                </script>

              <h5>vip Plan</h5>
              <h6 class="text-danger">principal profit: 85%</h6>
                  <h6 class="">Duration: 7 days</h6>
                  <p><b> <i class="fas fa-sign-out-alt"></i> Min Deposit</b>: $50000
                  <span><b><i class="fas fa-sign-out-alt"></i> Max Deposit</b>:unlimited</p><span>
                <form name="investp" method="POST" action="actions/investplatinum.php" onsubmit="return checkamountbal_platinum()" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label style="color:black">investment Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" value="Vip" name="plan" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="color:black">investment amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                      <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="current" value="<?php echo $current;?>">
                         <input type="hidden" name="investment" value="<?php echo $totalinvestment;?>">
          <input type="number" class="form-control" placeholder="enter amount here..." name="amountp" tabindex="9" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
              
                  <button type="submit" name="invest" class="btn  m-t-15 waves-effect" tabindex="7" style="background: linear-gradient(45deg, #121045, #98258d);color:orange "><i class="far fa-paper-plane"></i>proceed with investment</button>
                </form>
              </div>
            </div>
          </div>
        </div>





       <!-- commercial plan modal -->
       <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="background: linear-gradient(45deg, #121045, #98258d);">
              <h5 class="modal-title" id="formModal" style="color:orange"><i class="fas fa-signal"></i> Investment Panel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_platinum(){
                     var walletbal = document.forms['investp']['totalbal'].value;
                      var amound = document.forms['investp']['amountp'].value;
                      var amountchk = parseInt(amound,10);
                    if( amountchk > walletbal){
                      swal('insufficient wallet Balance',  'error');
                        return false;

                     }if(amountchk < 20000){
                     
                      swal('Transaction failed', 'Amount you entered is less than the minimum investment amount for this plan!', 'error');
                     
                      return false;


                      }if(amountchk < 49999){
                     
                      swal('Transaction failed', 'Amount you entered is greater than the maximum investment amount for this plan!', 'error');
                     
                      return false;
                   
                    }return true;
               }
                </script>

              <h5>Commercial Plan</h5>
              <h6 class="text-danger">principal profit: 65%</h6>
                  <h6 class="">Duration: 7 days</h6>
                  <p><b> <i class="fas fa-sign-out-alt"></i> Min Deposit</b>: $20000
                  <span><b><i class="fas fa-sign-out-alt"></i> Max Deposit</b>: $49999</p><span>
                <form name="investp" method="POST" action="actions/investplatinum.php" onsubmit="return checkamountbal_platinum()" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label style="color:black">investment Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" value="commercial" name="plan" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="color:black">investment amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                      <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="current" value="<?php echo $current;?>">
                         <input type="hidden" name="investment" value="<?php echo $totalinvestment;?>">
          <input type="number" class="form-control" placeholder="enter amount here..." name="amountp" tabindex="9" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
              
                  <button type="submit" name="invest" class="btn  m-t-15 waves-effect" tabindex="7" style="background: linear-gradient(45deg, #121045, #98258d);color:orange "><i class="far fa-paper-plane"></i>proceed with investment</button>
                </form>
              </div>
            </div>
          </div>
        </div>







        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>




    </div>
  </div>


  
  <div class="mgm" style="display: none;">
<div class="txt" style="color:black;">Someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    top: 90px;
    right: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 900;
    display: block;
    color:#1f16ba;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#1f16ba;
}
</style>
<script data-cfasync="false" src="cdn-cgi%5Cscripts%5C5c5dd728%5Ccloudflare-static%5Cemail-decode.min.js"></script><script type="text/javascript">
var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia', 'South Africa', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'South Africa', 'South Africa', 'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'South Africa', 'Italy', 'South Africa', 'United Kingdom', 'South Africa', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'South Africa', 'Panama', 'South Africa', 'South Africa', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
    var listPlans = ['$500','$1500','$1000','$10,000','$2000','$3000','$4000', '$600', '$700', '$2500'];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'Someone from <b>' + country + '</b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
  <!-- General JS Scripts -->



  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="components/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="components/bundles/prism/prism.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="components/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="components/js/custom.js"></script>

  <script src="asset/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="asset/js/page/sweetalert.js"></script>
  
  <!-- JS Libraies -->
  <script src="asset/bundles/chartjs/chart.min.js"></script>
  <script src="asset/bundles/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="asset/bundles/summernote/summernote-bs4.js"></script>
  <!-- Page Specific JS File -->
  <script src="asset/js/page/widget-data.js"></script>
  <script src="asset/js/page/sweetalert.js"></script>
  <!-- Template JS File -->
  
  <!-- Custom JS File -->


  <!--Start of Tawk.to Script-->
<script src="//code.jivosite.com/widget/EfzjzCGYnS" async></script><!--End of Tawk.to Script-->
 
</body>




</html>