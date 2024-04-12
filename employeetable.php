<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshportal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./styles/employeetable.css">
</head>
<body>
    <div class="top">
        <img src="./images/images-removebg-preview.png" alt="">
        <h1><span style="color: #a0bf39;">Employee</span> <span style="color: #4b556b">overview</span></h1>
    </div>
    <?php
        require("dbcon.php");
        
        echo '<div class="table">';
        echo "<a id='create' href='create.php'>Add Employee</a>";
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th> <th>First name</th> <th>Last name</th> <th>Email</th> <th>Address</th> <th>Birthdate</th> <th>Edit</th> <th>Delete</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($sqlTable as $row) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["firstname"]."</td>";
            echo "<td>".$row["lastname"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["address"]."</td>";
            echo "<td>".$row["birthdate"]."</td>";
            echo "<td><a href='update.php?id=".$row["id"]."'><i id='edit' class='fa-solid fa-pen-to-square'></i></a></td>";
            echo "<td><a href='delete.php?id=".$row["id"]."'onclick='return confirmDelete()'><i id='delete' class='fa-solid fa-trash'></i></a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    <p><a id="logout" href='logout.php'>Logout</a></p>
    </div>
    <div class="footer">
    <p class="footer-text">
        &copy; Justin Leideritz
    </p>
    </div>
    <script>
        function confirmDelete() {
        return confirm("Are you sure you want to delete this row?");
    }
    </script>
    <script src="https://kit.fontawesome.com/56f09bada5.js" crossorigin="anonymous"></script>
</body>
</html>