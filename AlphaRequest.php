<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "Made_Told";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $Newsletter_Status=['Newsletter_Status'];
  if($Newsletter_Status!=1){
    $Newsletter_Status=0;
  } 
    else {
      $Newsletter_Status=1;
  }

  $query = "INSERT INTO Newsletter (fname, lname, email, Newsletter_Status) 
  VALUES ('$fname', '$lname', '$email', '$Newsletter_Status')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      echo "Thanks for your review.";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="AlphaGeneral.css">
  <title>Alpha Response</title>
  <style>
  #number span {
  display: inline-block;
  width: 50%;
  margin-top: 80px;
  font-size: 45px;
  }
  </style>
</head>

<body>
  <div id="navbar">
  <a href=AlphaHome.html id="logo">Made / Told</a>
  <div id="navbar-right">
    <input type="text" placeholder="Search..">
    <a class="active" href=AlphaHome.html>Home</a>
    <a href=AlphaContact.html>Contact</a>
    <a href="#about">About</a>
  </div>
</div>
 <script type="text/javascript" src="Alpha.js"></script>
 <div id="number">
   <span><?php echo"Thank you for your submission"?></span>
</body>

</html>