<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "freshportal";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $sqlSelectAll = "SELECT * FROM employee LEFT JOIN role ON (EMP_RoleID = ROL_ID)";
    $sqlTable = $conn->query($sqlSelectAll);
?>