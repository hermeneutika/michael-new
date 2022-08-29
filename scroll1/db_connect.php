<?php
/* Database connection start */
$servername = "localhost";
$username = "michael";
$password = "A7ndromeda!1";
$dbname = "scroll1";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>