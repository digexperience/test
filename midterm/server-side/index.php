<?php
    // class Person {
    //     public $name;
    //     public $sex;
    //     public $address;
    // }

    // $person = new Person();
    // $person->name = "Renmark";
    // $person->sex = "Male";
    // $person->address = "Mabalacat";

    // print_r($person);
    // echo '<br><br>';
    // echo json_encode($person);

    $person = [
        "name" => "Juan Dela Cruz",
        "sex" => "Male",
        "address" => "Philippines"
    ];

    print_r($person);
    echo '<br><br>';
    echo json_encode($person);
?>