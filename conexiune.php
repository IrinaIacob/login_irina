<?php

$con=new mysqli('localhost','root','','baza_de_date_licenta');

if(!$con){
    die(mysqli_error($con));    
} 

?>