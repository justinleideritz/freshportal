<?php
    require("dbcon.php");

    $employeeid = $_POST["employeeid"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $birthdate = $_POST["birthdate"];
    $role = $_POST["role"];
    $phone = $_POST["phone"];

    try {
        $sqlUpdate = "UPDATE employee SET EMP_Firstname=:firstname, EMP_Lastname=:lastname, EMP_Email=:email, EMP_Address=:address, EMP_Birthdate=:birthdate, EMP_RoleID=:role, EMP_Phone=:phone WHERE EMP_ID=:employeeid";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->bindparam(":employeeid", $employeeid);
        $stmt->bindparam(":firstname", $firstname);
        $stmt->bindparam(":lastname", $lastname);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":address", $address);
        $stmt->bindparam(":birthdate", $birthdate);
        $stmt->bindParam("role", $role);
        $stmt->bindParam(":phone", $phone);
        $updateExec = $stmt->execute();
        header("Location: employeetable.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>