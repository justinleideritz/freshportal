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
            margin: 10px 0;
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
            text-align: center;
            font-size: larger;
            padding: 20px;
        }

        a[href="index.php"] {
            text-align: center;
            font-size: small;
        }

        .messageoff {
            display: none;
        }

        .messageon {
            display: flex;
            justify-content: space-between;
        }

        .alert {
            padding: 12px;
            background-color: #f44336;
            color: white;
            margin-bottom: 15px;
            border-radius: 5px;
            position: relative;
        }

        .alert p {
            margin: 0;
        }

        .alert button {
            background-color: #555;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }

        .alert button:hover {
            background-color: #666;
        }
    </style>
</head>

<body>
    <?php if (isset($_GET['message'])) {
        $style = "messageon";
    } else {
        $style = "messageoff";
    } ?>
    <div class="top">
        <img src="images.png" alt="">
        <h1><span style="color: #a0bf39;">Add</span> <span style="color: #4b556b">Employee</span></h1>
    </div>
    <form action="createExec.php" method="POST">
        <div id="alertBox" class="<?= $style ?> alert">
            <p>Email already exists</p>
            <button onclick="hideAlert()">Close</button>
        </div>
        <div>
            <label for="firstName">First name</label>
            <input required id="firstName" name="firstName" type="text">
        </div>
        <div>
            <label for="lastName">Last name</label>
            <input required id="lastName" name="lastName" type="text">
        </div>
        <div>
            <label for="email">email</label>
            <input required id="email" name="email" type="text">
        </div>
        <div>
            <label for="address">address</label>
            <input required id="address" name="address" type="text">
        </div>
        <div>
            <label for="birthdate">birthdate</label>
            <input required id="birthdate" name="birthdate" type="date">
        </div>
        <div>
            <input type="submit" value="Save">
            <a href="index.php">Back</a>
        </div>
    </form>
    <div class="footer">
        <p class="footer-text">
            &copy; Justin Leideritz
        </p>
    </div>
    <script>
        function hideAlert() {
            document.getElementById("alertBox").style.display = "none";
        }
    </script>
</body>

</html>