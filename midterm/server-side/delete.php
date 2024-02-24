<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "root", "", "national_heroes");

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $stmt = $con->prepare("DELETE FROM heroes WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo json_encode(array("data" => "Success"));
    } else {
        echo json_encode(array("data" => "Error"));
    }

    $stmt->close();
}

$con->close();
?>
