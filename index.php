<?php
include('./config/database.php');

$sql = "SELECT * FROM reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo $row['Regions']."<br/>";
  }
} else {
  echo "0 results";
} 
$conn->close();

?>