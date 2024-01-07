<?php

    $host = "localhost";
    $user = "pcbgenou_ourtesteduser";
    $pass = "Fakepassword@ill90";
    $db = "pcbgenou_ourtestedbase";
    //$db = "swiftBankDatabase2";

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        die("Database Could not be reaached".mysqli_connect_error());
    }
?>