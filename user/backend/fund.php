<?php

if(isset($_POST['proceed'])){
          include 'actions/db.php';
           
             $trantype=$_POST['trantype'];
             $totalbal=$_POST['totalbal'];
            $uname=$_POST['uname'];
             $btc=$_POST['btc'];
             $email = $_POST['email'];
             $amount = $_POST['amount'];
              
              $date= date('Y-m-d h:i:s');
              $status="pending";
               $depositid=uniqid();

    $sql = "INSERT INTO depositrequests (username,amount,dateofdep,statusofdep,depositid,totalbal,usdemail,transtype) VALUES ('$uname','$amount','$date','$status','$depositid','$totalbal','$email','$trantype')";

	             mysqli_query($conn,$sql);

               $mailTo = "contact@alliancecoinmining.com";

               $header = "contact@alliancecoinmining.com";
              $sub = "You have recieved a deposit Request from your website";
              // $txt = "username:". $uid ."\n\n". "amount:" . $amount ."\n\n"."plan:". $plan.
              // "\n\n"."type:".$type;        
              
              $txt="Hello, you have a new deposit on your website login and check!";
              
              mail($mailTo,$sub,$txt,$header);
              
     }
 ?>



<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Alliancecoinminingexchangetime- deposit userdashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/xi.png" />
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
  

  <style type="text/css">
    .back{
      background-image: url(assets/img/9.gif );
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
  </style>

</head>

<body class="back" >
  <div class="loader"></div>
 
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="login-brand" style="color:orange;">
             Alliance Coin Mining Deposit Gateway
            </div>
            <div class="card ">
              
              <div class="card-body">
                
                 
              <div class="form-group text-center">
              <?php





                             
                             if($trantype == "btc"){



                              echo " 
                              <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                              to your Alliance Coin Mining Wallet via Bitcoin ,Please copy or scan the wallet address below and make a payment of $". $amount." and send exactly the amount to the generated address.
                          
                           

                           
                           
                           
                          <br><br>
                           <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                           <input type='text' class='form-control-plaintext' value='bc1qegk9xdfewrvappapd5y65thlpwulwy44np3pgz' id='copybtc' readonly=''>
                           <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                           
                           <a href='proof.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>comfirm payment</a>

                           <h4 style='color:orange;'>Payment Qr code generated</h4>
                           <img src='https://chart.googleapis.com/chart?chs=250x250&amp;cht=qr&amp;chl=bc1qegk9xdfewrvappapd5y65thlpwulwy44np3pgz' alt='image' class='imaged w128 rounded'><br><br>
                           



                          
                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy bitcoin from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Alliance Coin Mining wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied BTC address, and comfirm payment from your dashboard.</p>
                            <p> Crypto via: <a href='https://www.crypto.com' target'blank'>Crypto.com</a> to make payment to the copied BTC address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied BTC address, and comfirm payment from your dashboard.</p>
                          
                           </p>

                           ";





                                 echo "<br>";

                                
                             }else if($trantype == "perfect"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                 to your Alliance Coin Mining Wallet via Perfect Money ,Please copy or scan the wallet address below and make a payment of $". $amount." and send exactly the amount to the generated address.
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='U36062325' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='deposit.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>Done</a>




                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'> How do i pay?</p>
                          <p>Copy your unique wallet address and proceed to your Perfect money App or website to fund your Alliance Coin Mining wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Perfect Money via: <a href='https://www.perfectmoney.com' target'blank'>perfectmoney.com</a> to make payment to the copied Perfect Money address, and comfirm payment from your dashboard.</p>
                            

                              ";

                            
                                }else if($trantype == "eth"){
                                  echo " 
                                  <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                  to your Alliance Coin Mining Wallet via Ethereum ,Please copy or scan the wallet address below and make a payment of $". $amount."  and send exactly the amount to the generated address.
                              
                               
                              <br><br>
                               <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Ethereum address</label>
                               <input type='text' class='form-control-plaintext' value='0xCa18AF8897A9a59f0a64D41925C8669E458EfaDf' id='copybtc' readonly=''>
                               <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                               <a href='proof.php' class='btn' style='background-color:orange;color:black'><i data-feather='corner-up-left'></i>comfirm payment</a><br><br>
                            

                                <h4 style='color:orange;'>Payment Qr code generated</h4>
                           <img src='https://chart.googleapis.com/chart?chs=250x250&amp;cht=qr&amp;chl=0xCa18AF8897A9a59f0a64D41925C8669E458EfaDf' alt='image' class='imaged w128 rounded'><br><br>
                           


                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy Etherium from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Alliance Coin Mining wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied ETH address, and comfirm payment from your dashboard.</p>
                            <p> Crypto via: <a href='https://www.crypto.com' target'blank'>Crypto.com</a> to make payment to the copied ETH address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied ETH address, and comfirm payment from your dashboard.</p>


                               ";
 
                               
    
 
                            
                               
                                }else if($trantype == "usdt"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .",You are about to complete a deposit of $". $amount . "
                                 to your Alliance Coin Mining Wallet via USDT ,Please copy or scan the wallet address below and make a payment of $". $amount.".  Make sure you're sending only ERC20_USDT token to the generated wallet address. If you send any other USDT token, you may not be able to retrieve these funds.
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='TVZ5S31EziZm24FQaJAe86PQ3NYTSg4Q9w' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='proof.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>comfirm payment</a>
                         


                                <h4 style='color:orange;'>Payment Qr code generated</h4>
                           <img src='https://chart.googleapis.com/chart?chs=250x250&amp;cht=qr&amp;chl=TVZ5S31EziZm24FQaJAe86PQ3NYTSg4Q9w' alt='image' class='imaged w128 rounded'><br><br>
                           


                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy USDT from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Alliance Coin Mining wallet</p>

                          <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied USDT address, and comfirm payment from your dashboard.</p>
                            <p> Binance via: <a href='https://www.binance.com' target'blank'>Binance.com</a> to make payment to the copied USDT address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied USDT address, and comfirm payment from your dashboard.</p>



                              ";

                            
 
                               
                                }
                          
                          
                          
                          
                          
                          ?>
                        <script type="text/javascript">
                            
                            function mycopy(){
                                var copyTxt = document.getElementById("copybtc");
                                copyTxt.select();
                                document.execCommand("copy");
                            }


                            </script>

            <div class="simple-footer">
              Copyright &copy; Alliance Coin Mining 2022
            </div>
          </div>
        </div>
      </div>
    </section>
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
  <script src="components/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/sweetalert.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="components/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="components/js/custom.js"></script>

  <!--Start of Tawk.to Script-->
<script src="//code.jivosite.com/widget/EfzjzCGYnS" async></script><!--End of Tawk.to Script-->
</body>




</html>