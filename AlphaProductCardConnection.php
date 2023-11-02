<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Made_Told";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


$sql = "SELECT * FROM Partners";
$result = $conn->query($sql);


$row_cnt = $result->num_rows;


// printf("result set has %d rows.\n", $row_cnt);

$CardNum = $row_cnt;

$conn->close();
?>

