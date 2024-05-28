<?php
include 'conexiune.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criminal Investigation Dashboard</title>
    <link rel="stylesheet" href="style_dark.css">
    <link rel="stylesheet" href="design.css">

</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Investigation Menu</h2>
            <ul>
             <!--   <li>Dashboard</li>
                <li>Cases</li>
                <li>Suspects</li>
                <li>Evidence</li>
                <li>Reports</li>
                <li>Settings</li>
            -->
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Cazul 1</h1>
            </div>
            
          
            <div class="stats">
                <div class="stat-card">
                    
                <a href="adaugapostare.php" style="text-decoration:none; color:#e0e0e0;">
                    <h3>Adauga o noua postare</h3>
                    <p>in baza de date</p>
                    </a>
                </div>
                <div class="stat-card">
                    <a href="analiza.html" style="text-decoration:none; color:#e0e0e0;">
                    <h3>Analizeaza</h3>
                    <p>datele</p>
                    </a>
                </div>
                <div class="stat-card">
                    <h3>Gaseste comunitati</h3>
                    <p>(daca exista)</p>
                </div>
            </div>
            <div class="important-info">
                <h2>analizele momentane</h2>
                <table style= "color:white;">
                  <thead>
                    <tr>
                      <th >id</th>
                      <th >nume</th>
                      <th >iduser</th>
                      <th >poza</th>
                      <th >comentariu</th>
                      <th >nrlikeuri</th>
                      <th >data</th>
                    </tr>
                  </thead>
                  <tbody>
                  

                  <?php             
                    $sql="SELECT * FROM tabel_postari ORDER BY id DESC";
                    $result=mysqli_query($con,$sql);
                    if($result){

                        
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $nume=$row['nume_user'];
                            $idus=$row['id_user'];
                            $poza=$row['poza_user'];
                            $comentariu=$row['comentariu'];
                            $nrlike=$row['numar_likeuri'];
                            $data=$row['data_comentariului'];
                    
                            echo '
                            <tr>
                              <td>
                                  <div >
                                    <h6 >#'.$id.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >'.$nume.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >#'.$idus.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <img src="'.$poza.'" style="width:20px;" alt="poza_profil">
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >'.$comentariu.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >'.$nrlike.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >'.$data.'</h6>
                                  </div>
                              </td>
                              
                                                            
                            </tr>';
                        }
                    }
                            ?>



                  </tbody>
                </table>    
            </div>
            <div class="updates">
                <h2>Recent Updates</h2>
                <p>Latest updates on the ongoing investigations.</p>
            </div>
            
        </div>
    </div>
</body>
</html>
