<?php
    require("dbcon.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $birthdate = $_POST["birthdate"];
        $role = $_POST["role"];
        $phone = $_POST["phone"];

        $emailQuery = "SELECT COUNT(*) as count FROM employee WHERE EMP_Email = '$email'";
        $result = $conn->query($emailQuery);
        $row = $result->fetch(PDO::FETCH_ASSOC);
    
        if ($row['count'] > 0) {
            header("location: create.php?message=Email");
        } else {
            $sqlQuery = "INSERT INTO employee (EMP_Firstname, EMP_Lastname, EMP_Email, EMP_Address, EMP_Birthdate, EMP_Phone)
            VALUES ('$firstName', '$lastName', '$email', '$address', '$birthdate', '$phone')";
            $conn->exec($sqlQuery);
            header("location: employeetable.php");
        }
    }
?>