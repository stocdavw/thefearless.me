

	<!-- PHP -->
<?php
require ("load.php");


// Create SQL query
$stmt = $conn->prepare("INSERT INTO wheeloflife (firstname, lastname, email, psychology, business, physical, relationships, finances, growth, contribution)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
die("Error: " . $conn->error);
}
$stmt->bind_param("ssssssssss", $firstname, $lastname, $email, $psychology, $business, $physical, $relationships, $finances, $growth, $contribution);

$psychology = $_POST['Psychology'];
$business = $_POST['Business'];
$physical = $_POST['Physical'];
$relationships = $_POST['Relationships'];
$finances = $_POST['Finances'];
$growth = $_POST['Growth'];
$contribution = $_POST['Contribution'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

if ($stmt->execute()) {
      echo "New record created successfully";
}
// Close connection
mysqli_close($conn);

?>
