<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "freshportal";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $sqlSelectAll = "SELECT * FROM employee";
    $sqlTable = $conn->query($sqlSelectAll);
?>