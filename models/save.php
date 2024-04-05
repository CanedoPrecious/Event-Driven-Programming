<?php



$registration = array(
    'id' => "'" . $_POST['id'] . "'",
    'brgyCode' => "'" . $_POST['code'] . "'",
    'brgyDesc' => "'" . $_POST['desc'] . "'",
    'regCode' => "'" . $_POST['regCode'] . "'",
    'provCode' => "'" . $_POST['provCode'] . "'",
    'citymunCode' => "'" . $_POST['cty'] . "'",
);


save($registration);

function save($data)
{
    include('../config/database.php');

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO std_students ($attributes) VALUES ($values)";

    if($conn->query($query) === TRUE){
        header('location: ../registration.php?success');
    }else{
        header('location: ../registration.php?invalid');
    }

    $conn->close();
}
 