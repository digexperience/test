<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "root", "", "national_heroes");

if(isset($_POST['data'])) {
    $data = json_decode($_POST['data'], true);
    $id = $data['id'];
    $name = $data['name'];
    $birthdate = $data['birthdate'];
    $deathdate = $data['deathdate'];
    $spouse = $data['spouse'];
    $description = $data['description'];

    $stmt = $con->prepare("UPDATE heroes SET name=?, birthdate=?, deathdate=?, spouse=?, description=? WHERE id=?");
    $stmt->bind_param("sssssi", $name, $birthdate, $deathdate, $spouse, $description, $id);

    if ($stmt->execute()) {
        echo json_encode(array("data" => "Success"));
    } else {
        echo json_encode(array("data" => "Error"));
    }

    $stmt->close();
}

$con->close();
?>
