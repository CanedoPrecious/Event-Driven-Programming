<?php

include('../config/database.php');

$value = $_POST['search'];

$sql = "SELECT * FROM reg WHERE ( reg_no LIKE '%$value%' OR Regions LIKE '%$value%')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td style="text-align: center;"><?= $row['reg_no'] ?><br></td>
            <td><?= $row['Regions'] ?><br></td>
            <td>
            <button type="button" class="btn btn-sm btn-block btn-success" data-bs-toggle="modal" data-bs-target="#myModal">View</button>
            </td>
        </tr>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>