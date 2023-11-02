<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Made_Told";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Partner_Name, Partner_Location FROM Partners";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        $printmeN= "<h4><b>".$row["Partner_Name"]."</h4></b>";
        $printmeL= "<p>".$row["Partner_Location"]."</p>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AlphaGeneral.css">
    <title>Alpha Home</title>
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
    
    <div id="div1">
    </div>
    
    <script type="text/javascript" src="Alpha.js"></script>
    <script>
    const para = document.createElement("p");
    const node = document.createTextNode("This is my paragraph");
    para.appendChild(node);
    const element = document.getElementById("div1");
    element.appendChild(para);
    </script>
    
  </body>

</html>