<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <title>ModelBank</title>
    <style type="text/css">
        button{
            position: relative;
    display: inline-block;
    padding: 10px 26px;
    margin: 10px 0;
    color:white;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 2px;
    border-radius: 8px;
    background-color:#4682B4;
    background-image: pink;
    transition-duration: 0.4s;
        }

.button:hover {
  background-color: Green; /* Green */
  color: white;
}
    </style>

</head>


<body style="background-image: url('img/images.jpg');">
    <?php
  include 'navbar.php';
  ?>
  <div class"maincontent">
    <div id="mainletters" style="margin-top:180px; margin-left:-180px; ">
       <h1> Welcome to ModelBank </h1>
       <h3> <i>	"A Tradition of Trust" </i></h3>
    </div>
    <div class="mainimage" style="margin-left:800px; margin-top:-140px;">
         <img src="img/bank.jpg" alt="bank image" style="border-radius:23px;"></img>
    </div>
 </div>

</header>
<main>



<!--cards-->

<span class="header" id="home" style="margin-left:500px;  "></span>
<span class="header1" style="margin-top:1700px; "></span><h1> Services</h1>
<div class="container"style=" margin-top:150px; ">
 <div class="card">
   <div class="content">
     <div class="image"><img src="img/Untitled.png"></div>
         <div class="contentbox">
             <h3> View customers <br><span></span></h3>
           </div>
    </div>
    <a href="transfermoney.php"><button>View all Users</button></a>
 </div>
 <div class="card">
   <div class="content">
     <div class="image"><img src="img/transaction.jpg"></div>
         <div class="contentbox">
             <h3>Transaction<br><span> </span></h3>
           </div>
    </div>
  <a href="transfermoney.php"><button>Transfer Money</button></a>
 </div>
 <div class="card">
   <div class="content">
     <div class="image"><img src="img/history.jpg"></div>
         <div class="contentbox">
             <h6> View Transaction History <br><span>  </span></h6>
           </div>
    </div>
    <a href="transactionhistory.php"><button >View Transfer History</button></a>
 </div>
</div>

<!--cards-->
<!--middle part start-->
<div class="container mt-5">
  <div class="row mt-5">
      <div class="col-12 mt-5 text-center">
          <span class="header" style="margin-bottom:10px;">about us</span>
      </div>
  </div>

  <!--main content-->
  <div class="row mt-5">
      <div class="col-xl-6 col-lg-6 col-sm-12 text-center">
          <img src="img/12345.jpg" style="border-radius:150px;" class="header-part">
      </div>
      <div class="col-xl-6 col-lg-6 col-sm-12 pt-5" style="font-weight: 600;">
          ModelBank is a leading private sector bank in India. The Bank’s consolidated total assets stood at Rs. 14.76 Million at September 2020.  ModelBank currently has a network of 5,288 branches and 15,158 ATMs across India. Our principal objective is to create a development financial institution for providing medium-term and long-term project financing to Indian businesses and citizens.


      </div>
  </div>
  <!--main content-->

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
//on scroll plugin//
AOS.init({
once:true,
duration:1000,
});
//on scroll plugin//
</script>
</main>

<!-- footer-div-->
<div class="footer-div" style="margin-right:0px;margin-top: 30px;">
<div class="row footer-row" >
<div class="col-3 footer-col footer-col-1" style="margin-left:880px;">
<h6 class="footer-headings footer-headings-1" style="font-si">© 2021 Anirudh Vyas.  All rights reserved.</h6>
</div>
</div>
</div>
<!-- footer-div-end-->
</body>
</html>
