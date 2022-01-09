<?php
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'gurkan');
define('DB_PASSWORD', 'gurkan1234');
define('DB_DATABASE', 'gurkan');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ROOT =  "http://".$_SERVER['HTTP_HOST']."/odev";

?>
