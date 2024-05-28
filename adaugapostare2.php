<?php

include 'conexiune.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criminal Investigation Dashboard</title>
    <link rel="stylesheet" href="style_dark_form.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Investigation Menu</h2>
            <ul>
              <!--  <li>Dashboard</li>
                <li>Cases</li>
                <li>Suspects</li>
                <li>Evidence</li>
                <li>Reports</li>
                <li>Settings</li>
                <li>New Entry</li>-->
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Adauga o postare noua</h1>
            </div>
            <div class="form-container">
            <?php
            
            $nume =  $_POST['nume'];
            $poza = $_POST['poza'];
            $postare =  $_POST['postare'];
            $likeuri = $_POST['likeuri'];
            $datap = $_POST['datapostare'];
            
            $sql = "INSERT INTO tabel_postari (nume_user, poza_user, comentariu, numar_likeuri, data_comentariului)  VALUES ('$nume','$poza','$postare','$likeuri','$datap')";
         
        if(mysqli_query($con, $sql)){
            echo "<h3>Postarea a fost introdusa cu succes in baza de date</h3>"; 
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
            
            ?>


                
            </div>
        </div>
    </div>
</body>
</html>
