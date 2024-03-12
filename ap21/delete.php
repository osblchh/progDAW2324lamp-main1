<?php

require_once "autoloader.php";

$connection = new Connection;
$conn = $connection->getConn();

$ident=($_GET['id']);

    $query = "DELETE FROM investment WHERE id = '$ident'";  

    if (mysqli_query($conn, $query) === TRUE) {
        header("location: index.php");
    }

?>