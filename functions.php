<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_phshing";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// $sql = "CREATE TABLE IF NOT EXISTS myguests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// password VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if (mysqli_query($conn, $sql)) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }



?>