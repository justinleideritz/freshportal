<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshportal</title>
    <style>
        body {
            font-family: arial;
            margin: 10px 0px;
            padding: 0px;
        }
        .top {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            margin-bottom: 50px;
        }
        h1 {
            margin-top: 70px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"],
        input[type="submit"],
        a[href="index.php"] {
            display: inline-block;
            text-decoration: none;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"],
        a[href="index.php"] {
            background-color: #4b556b;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover,
        a[href="index.php"]:hover {
            background-color: #6b7280;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .footer-text {
            text-align:center;
            font-size: larger;
            padding: 20px;
        }
        a[href="index.php"] {
            text-align: center;
            font-size: small;
        }
    </style>
</head>
<body>
    <div class="top">
        <img src="images.png" alt="">
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