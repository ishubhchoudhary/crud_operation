<?php
    // $username = "localhost";
    // $hostname = "root";
    // $password = "";
    // $db = "crud_operation";

    // $conn =  new mysqli($username, $hostname, $password, $db);
    // if($conn){
    //     echo "connection successfuly";
    // }else {
    //     echo mysqli_connect_error();
    // }

// -----------------------------------------------------------
    // $conn = mysqli_connect("localhost", "root", "");
    // $db = mysqli_select_db($conn, "crud_operation");
    // if($conn){
    //     echo "connection successfuly";
    // }else {
    //     echo mysqli_connect_error();
    // }

    // ===========================================

    $conn = new mysqli('localhost', 'root', '' , 'crud_operation');

    if($conn) {
        //  echo "connection successfull";
        // die(mysqli_error($conn));
    }
    else {
        die(mysqli_error($conn));
    };
    
?>