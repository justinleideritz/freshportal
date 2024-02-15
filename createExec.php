<?php
    require("dbcon.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $birthdate = $_POST["birthdate"];

        $emailQuery = "SELECT COUNT(*) as count FROM employee WHERE email = '$email'";
        $result = $conn->query($emailQuery);
        $row = $result->fetch(PDO::FETCH_ASSOC);
    
        if ($row['count'] > 0) {
            //echo "Email already exists. Please choose a different email.";

            header("location: create.php?message=Email");

        } else {
            $sqlQuery = "INSERT INTO employee (firstname, lastname, email, address, birthdate)
            VALUES ('$firstName', '$lastName', '$email', '$address', '$birthdate')";
    
            $conn->exec($sqlQuery);
    
            header("location: index.php");
        }
    }
?>