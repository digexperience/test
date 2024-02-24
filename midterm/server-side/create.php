<?php
    header("Access-Control-Allow-Origin: *");
    $con = mysqli_connect("localhost", "root", "", "national_heroes");
    if(isset($_POST['data'])) {
        $data = json_decode($_POST['data']);
        $strSql = "INSERT INTO heroes(name, birthdate, deathdate, spouse, description) 
                VALUES(
                    '" . $data->name . "', 
                    '" . $data->birthdate . "', 
                    '" . $data->deathdate . "',
                    '" . $data->spouse . "', 
                    '" . $data->description . "')";
        
        if(mysqli_query($con, $strSql))
            echo json_encode(["data" => "Success"]);
        else
            echo json_encode(["data" => "Failed"]);
    }
    mysqli_close($con);
?>