<!-- PHP -->
<?php
// Connect to MySQL database
$host = "localhost";
$username = "uhygnldrbulp3";
$password = "wgbsugcfwx0w";
$dbname = "dbxsth8evghol4";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
