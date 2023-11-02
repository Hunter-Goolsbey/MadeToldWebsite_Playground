<!DOCTYPE html>

<?php
  require("AlphaContactPartnerData.php");
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AlphaGeneral.css">
    <title>Alpha Home</title>
    <style>
    h1 {
    margin-top: 8.5%;
    }
    h2{
    margin-top: 3.5%;
    }
    </style>
</head>
  <body>
    <div id="navbar">
      <a href=AlphaHome.html id="logo">Made / Told</a>
      <div id="navbar-right">
          <input type="text" placeholder="Search...">
          <a class="active" href=AlphaHome.html>Home</a>
          <a href="AlphaProducts.php">Products</a>
          <a href="AlphaProductPage.php">Product Test</a>
          <a href=AlphaContact.php>Contact</a>
          <a href="#about">About</a>
          
      </div>
    </div>

    <h1>Our Team:</h1>

    <div class="card_1">
      <a href=https://www.linkedin.com/in/jackie-goolsbey-564769122>
        <img src="Jackie.jpg" alt="Avatar">
      </a>
      <div class="container_1">
        <h4><b>Jackie Goolsbey</b></h4>
        <p>Artist & Ceramicist</p>
      </div>
    </div>

    <div class="card_2">
      <a href=https://www.linkedin.com/in/hunter-goolsbey-b3606b158>
        <img src="Hunter.jpg" alt="Avatar">
      </a>
      <div class="container_2">
        <h4><b>Hunter Goolsbey</b></h4>
        <p>HR Professional, Database Coordinator, Developer</p>
      </div>
    </div>
    
    <div class="card_3">
      <a href=https://www.linkedin.com/in/hunter-goolsbey-b3606b158>
        <img src="Annie.jpg" alt="Avatar">
      </a>
      <div class="container_3">
        <h4><b>Annie Goolsbey</b></h4>
        <p>Motivator, Life Coach, Philanthropist</p>
      </div>
    </div>
<hr>

<h2>Our Partners</h2>


<div class="scrollable">
  <div class="PartnerCard_1">
      <a href=https://www.linkedin.com/in/jackie-goolsbey-564769122>
        <img src="LatahCreek.jpg" alt="Avatar">
      </a>
      <div class="container_1">
        <h4><b>
        <?php
          require("AlphaContactPartnerData.php");
          echo $printmeN;
        ?>
        </b></h4>
        <p>
        <?php
          require("AlphaContactPartnerData.php");
          echo $printmeL;
        ?>
        </p>
      </div>
    </div>
    
<div class="PartnerCard_1">
      <a href=https://www.linkedin.com/in/jackie-goolsbey-564769122>
        <img src="Annie.jpg" alt="Avatar">
      </a>
      <div class="container_2">
        <h4><b>Dandy Home</b></h4>
        <p>Yuma, AZ</p>
      </div>
    </div>
    
<div class="PartnerCard_3">
      <a href=https://www.linkedin.com/in/jackie-goolsbey-564769122>
        <img src="Jackie.jpg" alt="Avatar">
      </a>
      <div class="container_1">
        <h4><b>Castaway Cellars</b></h4>
        <p>Coeur'd Alene, ID</p>
      </div>
    </div>
<div class="PartnerCard_4">
      <a href=https://www.linkedin.com/in/jackie-goolsbey-564769122>
        <img src="Jackie.jpg" alt="Avatar">
      </a>
      <div class="container_1">
        <h4><b>Letah Creek Winery</b></h4>
        <p>Spokane, WA</p>
      </div>
    </div>
<div class="PartnerCard_5">
      <a href=https://www.linkedin.com/in/jackie-goolsbey-564769122>
        <img src="Jackie.jpg" alt="Avatar">
      </a>
      <div class="container_1">
        <h4><b>Letah Creek Winery</b></h4>
        <p>Spokane, WA</p>
      </div>
    </div>
  </div>
<p>scroll</p>
<p>scroll</p>
<p>scroll</p>
<p>scroll</p>
<p>scroll</p>
<p>scroll</p>
<p>scroll</p>
<p>scroll</p>
    <script type="text/javascript" src="Alpha.js"></script>

  </body>

</html>