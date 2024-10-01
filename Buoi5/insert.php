<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "b5_mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES  ('John', 'Doe', 'john@example.com'),
        ('Jane', 'Smith', 'jane@example.com'),
        ('James', 'Johnson', 'james@example.com'),
        ('Emily', 'Brown', 'emily@example.com'),
        ('Michael', 'Davis', 'michael@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
