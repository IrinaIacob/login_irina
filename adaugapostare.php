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
                <li>New Entry</li>
        --></ul>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Adauga o postare noua</h1>
            </div>
            <div class="form-container">
                <h3>Completeaza detaliile de mai jos</h3>
                <form action="adaugapostare2.php" method="POST">
                    <label for="case-id">numele utilizatorului</label>
                    <input type="text" id="case-id" name="nume" >
                    
                    <label for="suspect-name">link de la poza de profil</label>
                    <input type="text" id="suspect-name" name="poza" >
                    
                    <label for="crime">postarea</label>
                    <input type="text" id="crime" name="postare" >
                    
                    <label for="status">numarul de likeuri</label>
                    <input type="text" id="status" name="likeuri" >
                    
                    <label for="date">data postarii</label>
                    <input type="date" id="date" name="datapostare" >
                    
                    <button type="submit">Adauga</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
