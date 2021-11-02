<?php
$servername = "localhost";
$dbusername ="root";
$dbpass     = "";
$dbname     ="webbanphukiendienthoai";

// Create connection
$conn = mysqli_connect($servername, $dbusername,$dbpass, $dbname );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
?>
