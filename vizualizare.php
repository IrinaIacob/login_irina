<?php
include 'conexiune.php'; 
?>
<!DOCTYPE  html>
<html lang="en">
<head>
    <link rel="stylesheet" href="design.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag & Drop or Browse: File Upload</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="drag-area">
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
                                    <h6 >#'.$nume.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >#'.$idus.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >#'.$poza.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >#'.$comentariu.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >#'.$nrlike.'</h6>
                                  </div>
                              </td>
                              <td>
                                  <div >
                                    <h6 >#'.$data.'</h6>
                                  </div>
                              </td>
                              
                                                            
                            </tr>';
                        }
                    }
                            ?>



                  </tbody>
                </table>
  </div>


  <script src="script.js"></script>

</body>
</html>
