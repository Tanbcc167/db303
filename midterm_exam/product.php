<?php
session_start();
include 'db_connect.php';
    $sql = 'select ProductName, UnitsInStock from products where CategoryID=1';
    try {
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    catch(Exception $e) {
        echo $e->getMessage();
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
  <table>
    <tr>
      <th>Product name</th>
      <th>Units in stock</th>
    </tr>
    <tr>
      <td>Chai</td>
      <td>39</td>
      <tr>
      <td>Chang</td>
      <td>17</td>
      </tr>
      <tr>
      <td>Guaraná Fantástica</td>
      <td>20</td>
      </tr>
      <tr>
      <td>Sasquatch Ale</td>
      <td>111</td>
      </tr>
      <tr>
      <td>Steeleye Stout</td>
      <td>20</td>
      </tr>
      <tr>
      <td>Côte de Blaye</td>
      <td>17</td>
      </tr>
      <tr>
      <td>Chartreuse verte</td>
      <td>69</td>
      </tr>
      <tr>
      <td>Ipoh Coffee</td>
      <td>17</td>
      </tr>
      <tr>
      <td>Laughing Lumberjack Lager</td>
      <td>52</td>
      </tr>
      <tr>
      <td>Outback Lager</td>
      <td>15</td>
      </tr>
      <tr>
      <td>Rhönbräu Klosterbier</td>
      <td>125</td>
      </tr>
      <tr>
      <td>Lakkalikööri</td>
      <td>57</td>
      </tr>
      
     

    </tr>
  </table>
</body>
</html>