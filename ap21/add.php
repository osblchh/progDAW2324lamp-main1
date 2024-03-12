<?php

require_once "autoloader.php";

$connection = new Connection;
$conn = $connection->getConn();


if (count($_POST) > 0) {
    $id=$_POST["id"];
    $company=$_POST["company"];
    $investment=$_POST["investment"];
    $date=$_POST["date"];
    $active=$_POST["active"];

    $query = "INSERT INTO investment(id, company, investment, date, active)
    VALUES ('$id','$company','$investment','$date','$active')"; 

    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    }
}


?>

<html>
    <head>
        <title>Información</title>
        <style>
            form {
                border: 2px solid black;
                width: 400px;
                height: 500px;
                font-size: 25px;
            }
        </style>
    </head>
<center><h1>Informacion de la empresa</h1></center>
<body>
<center>
<form id="form_x" class="class_x" method="post">
<br>
<label for="id" >ID: </label>
<input type="id" name="id" value="">
<br>
<br>
<br>
<label for="company" >Company: </label>
<input type="company" name="company" value="">
<br>
<br>
<br>
<label for="investment">Investment: </label>
<input type="investment" name="investment" value="">
<br>
<br>
<br>
<label for="date">Date: </label>
<input type="date" name="date" value="">
<br>
<br>
<br> 
<label for="active"> Active: </label>
<select id="active" name="active">
    <option value="0">Yes</option>
    <option value="1">No</option>
</select>
<br>
<br>
<br>
<input id="submit" type="submit" value="Aceptar" />
</form>
</center>
</body>

</html>