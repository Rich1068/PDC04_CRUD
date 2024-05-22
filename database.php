<?php
$local_db = "localhost";
$username = "root";
$password = "";
$db_name = "3a";
$conn = mysqli_connect($local_db, $username, $password, $db_name);

// Check connection
if (!$conn) {
    echo "Connection failed";
} else {
    echo "Connection sucess";
}
  
?>