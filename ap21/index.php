<?php

require_once "autoloader.php";

$connection = new Connection();
$conn = $connection->getConn();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>

<body>
    <table class="redTable">
        <thead>
            <tr>
                <td colspan="8">
                  
                </td>
            </tr>
        </thead>
        <tbody>
            <?php   
      $conn = new mysqli('localhost', 'root', '', "ap21");
            
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
  
      $query = 'SELECT * FROM cartera';
      $result = mysqli_query($conn, $query);
  var_dump($result);
      echo '<table class="table table-striped">';
      echo '<tr>
              <th>Id</th>
              <th>Company</th>
              <th>Investment</th>
              <th>Date</th>
              <th>Active</th>
              <th colspan="2">Actions</th>
          </tr>';
      while($value = $result->fetch_array(MYSQLI_ASSOC)){
          echo '<tr>';
          foreach($value as $element){
              echo '<td>' . $element . '</td>';
          }
     
          echo '<td><a href="add.php?id="><img src="img/insertar.png" width="25" height="25"></a></td>';     
          echo'<td><a href="delete.php?Id=' . $value['Id'] . '"><img src="img/delete.png" width="25" height="25"></a></td>';
          echo'<td><a href="edit.php?id='.$value['Id'] .'"><img src="img/edit.png" width="25" height="25"></a></td>';
          echo '</tr>';
      }
      echo '</table>';
  
      $result->close();
      mysqli_close($conn);
  

?>
        </tbody>
    </table>
</body>

</html>