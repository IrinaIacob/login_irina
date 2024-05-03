<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['username'])){
    $username = $_POST['username'];
    }
    if (isset($_POST['password'])){
    $password = $_POST['password'];
    }
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "auth";
    
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if($conn->connect_error){

        die("Connection failed: ". $conn->connect_error);

    }

    $query = "SELECT *FROM users WHERE user='$username' AND pass='$password'";
    $result = $conn->query($query);
    if($result->num_rows == 1){
        header("Location: uploadpage.html");
        exit();

    }
    else{
       header("Location: error.html");
        exit();
    }

}



?>