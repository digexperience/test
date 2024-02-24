<?php
    header("Access-Control-Allow-Origin: *");
    $con = mysqli_connect("localhost", "root", "", "national_heroes");
    $result = mysqli_query($con, "SELECT * FROM heroes");
    $heroes = [];
    while($record = mysqli_fetch_assoc($result))
        $heroes[] = $record;

    echo json_encode($heroes);

    mysqli_close($con);
?>