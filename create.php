<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshportal</title>
    <link rel="stylesheet" href="./styles/create.css">
</head>

<body>
    <?php if (isset($_GET['message'])) {
        $style = "messageon";
    } else {
        $style = "messageoff";
    } ?>
    <div class="top">
        <img src="./images/images-removebg-preview.png" alt="">
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