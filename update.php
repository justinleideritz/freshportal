<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshportal</title>
    <link rel="stylesheet" href="./styles/update.css">
</head>
<body>
    <div class="top">
        <img src="./images/images-removebg-preview.png" alt="">
        <h1><span style="color: #a0bf39;">Edit</span> <span style="color: #4b556b">Employee</span></h1>
    </div>
    <?php
        require("dbcon.php");
        $employeeid = $_GET["id"];

        $sqlUpdate = "SELECT * FROM employee WHERE id=:employeeid";

        $stmt = $conn->prepare($sqlUpdate);
        $data = ['employeeid' => $employeeid];
        $stmt->execute($data);

        $result = $stmt->fetch(PDO::FETCH_OBJ);
    ?>
    <form action="updateExec.php" method="POST">
        <div>
            <label for="employeeid">ID</label>
            <input hidden required type="text" name="employeeid" value="<?=$result->id?>">
        </div>
        <div>
            <label for="firstname">First name</label>
            <input required type="text" name="firstname" value="<?=$result->firstname?>">
        </div>
        <div>
            <label for="lastname">Last name</label>
            <input required type="text" name="lastname" value="<?=$result->lastname?>">
        </div>
        <div>
            <label for="email">email</label>
            <input required type="text" name="email" value="<?=$result->email?>">
        </div>
        <div>
            <label for="address">address</label>
            <input required type="text" name="address" value="<?=$result->address?>">
        </div>
        <div>
            <label for="birthdate">birthdate</label>
            <input required type="date" name="birthdate" value="<?=$result->birthdate?>">
        </div>
        <input required type="submit" name="updateCustomer" value="Save">
        <a href="index.php">Back</a>
    </form>
    <div class="footer">
        <p class="footer-text">
            &copy; Justin Leideritz
        </p>
    </div>
</body>
</html>