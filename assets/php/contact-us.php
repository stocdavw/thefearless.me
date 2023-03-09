<!-- PHP -->
<?php

require ("load.php");

$stmt = $conn->prepare("INSERT INTO contact (firstname, lastname, email, message)    VALUES (?, ?, ?, ?)");
if ($stmt === false) {
die("Error: " . $conn->error);
}
$stmt->bind_param("ssss", $firstname, $lastname, $email, $message);

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$message= $_POST['message'];

if ($stmt->execute()) {
      echo "New record created successfully";
}

$stmt->close();
?>
