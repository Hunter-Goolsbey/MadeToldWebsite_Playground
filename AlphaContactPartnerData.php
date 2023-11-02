<!DOCTYPE html>
<html>
<body>

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

$ArrayM = $result->fetch_all(MYSQLI_ASSOC);
$Array_1 = current($ArrayM);
$Partner_1 = $Array_1['Partner_Name'];
$Location_1 = $Array_1['Partner_Location'];
$Array_2 = next($ArrayM);
$Partner_2 = $Array_2['Partner_Name'];
$Location_2 = $Array_2['Partner_Location'];
$Array_3 = next($ArrayM);
$Partner_3 = $Array_3['Partner_Name'];
$Location_3 = $Array_3['Partner_Location'];
// print_r($ArrayM);
// echo "<br><br>";
// echo $ArrayM[0]['Partner_Name'];
// echo "<br><br>";
// print_r($Partner_1);
// echo "<br>";
// print_r($Location_1);
// echo "<br><br>";
// print_r($Partner_2);
// echo "<br>";
// print_r($Location_2);
// echo "<br><br>";
// print_r($Partner_3);
// echo "<br>";
// print_r($Location_3);
// echo "<br>";
$Indtry = 0;
$printmeN= "<h4><b>".$ArrayM[$Indtry++]['Partner_Name']."</h4></b>";
$printmeL= "<p>".$ArrayM[$Indtry++]['Partner_Location']."</p>";

$conn->close();
?>

</body>
</html>