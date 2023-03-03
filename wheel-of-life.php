

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

// Get form data
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$psychology = $_POST['Psychology'];
$business = $_POST['Business'];
$physical = $_POST['Physical'];
$relationships = $_POST['Relationships'];
$finances = $_POST['Finances'];
$growth = $_POST['Growth'];
$contribution = $_POST['Contribution'];

// Create SQL query
$sql = "INSERT INTO wheel_of_life (first_name, last_name, email, psychology, business, physical, relationships, finances, growth, contribution)
VALUES ('$firstName', '$lastName', '$email', '$psychology', '$business', '$physical', '$relationships', '$finances', '$growth', '$contribution')";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
