 <?php
$servername = "localhost";
$username = "cpe2999";
$password = "0639805868w";
$dbname= "cpe2999";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>