<?php
  require("AlphaProductCardConnection.php");
  require("AlphaContactPartnerData.php")
?>

<!DOCTYPE html> 
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="AlphaGeneral.css">
  <title>Products</title>
</head>

<body>
  <div id="navbar">
  <a href=AlphaHome.html id="logo">Made / Told</a>
  <div id="navbar-right">
    <input type="text" placeholder="Search..">
    <a class="active" href=AlphaHome.html>Home</a>
    <a href="AlphaProducts.php">Products</a>
    <a href=AlphaContact.php>Contact</a>
    <a href="#about">About</a>
  </div>
</div>

  <div class = main>
    <h1>||Check out our new products!||</h1>
  </div>
  
    <script>
        var CardNum = '<?=$CardNum?>';
        document.write('<p>'+CardNum+'</p>');
        var printmeN = '<?=$printmeN?>';
        var printmeL ='<?=$printmeL?>';
        
      for (var i = 0; i < CardNum;i++) {
        document.write("<div class=\"card_1\"><a href=https:\/\/www.linkedin.com\/in\/jackie-goolsbey-564769122><img src=\"Jackie.jpg\" alt=\"Avatar\"><\/a><div class=\"container_1\"><?php echo $printmeN;?><p>Artist & Ceramicist<\/p><\/div><\/div>");
        }
    </script>
</body>
</html>