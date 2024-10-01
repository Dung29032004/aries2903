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

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$sql1 = "SELECT id, firstname, lastname, reg_date FROM MyGuests";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    echo "<table style='border: solid 1px black;width:70%'>
            <tr>
                <th style='border: solid 1px black;'>ID</th>
                <th style='border: solid 1px black;'>First Name</th>
                <th style='border: solid 1px black;'>Last Name</th>
                <th style='border: solid 1px black;'>Reg_date</th>
            </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr style='border: 1px solid;'>
                <td style='border: solid 1px black;'>".$row["id"]."</td>
                <td style='border: solid 1px black;'>".$row["firstname"]."</td>
                <td style='border: solid 1px black;'>".$row["lastname"]."</td>
                <td style='border: solid 1px black;'>".$row["reg_date"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>