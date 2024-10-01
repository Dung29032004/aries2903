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

$sql = "SELECT id, firstname, lastname, reg_date FROM MyGuests";
$result = $conn->query($sql);

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