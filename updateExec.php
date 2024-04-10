<?php
    require("dbcon.php");

    $employeeid = $_POST["employeeid"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $birthdate = $_POST["birthdate"];

    try {
        $sqlUpdate = "UPDATE employee SET firstname=:firstname, lastname=:lastname, email=:email, address=:address, birthdate=:birthdate WHERE id=:employeeid";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->bindparam(":employeeid", $employeeid);
        $stmt->bindparam(":firstname", $firstname);
        $stmt->bindparam(":lastname", $lastname);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":address", $address);
        $stmt->bindparam(":birthdate", $birthdate);
        $updateExec = $stmt->execute();
        header("Location: employeetable.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>