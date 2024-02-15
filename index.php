<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshportal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: arial;
            margin: 10px 0px;
            padding: 0px;
        }
        h1 {
            margin-top: 70px;
        }
        #create {
            text-decoration: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            background-color: #4b556b;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #create:hover{
            background-color: #6b7280;
            color: #fff;
        }
        .top {
            display: flex;
            justify-content: space-evenly;
        }
        table {
            border-collapse: collapse;
            margin: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        thead {
            background-color: #e8e8e8;
        }
        tr {
            color: #4b556b;
            border-style: solid;
            transition: background-color 0.3s ease;
        }
        .table {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        td, th{
            padding: 40px 20px;
        }
        tr:hover{
            background-color: #e8e8e8;
        }
        .footer-text {
            text-align:center;
            font-size: larger;
            padding: 20px;
        }
        #delete {
            color: white;
            padding: 10px;
            border-radius: 5px;
            background-color: #ed0e2c;
            transition: background-color 0.3s ease;
        }
        #edit {
            color: white;
            padding: 10px;
            border-radius: 5px;
            background-color: #f5a142;
            transition: background-color 0.3s ease;
        }
        #edit:hover {
            background-color: #f7ae5c;
        }
        #delete:hover {
            background-color: #fc4760;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="top">
        <img src="images.png" alt="">
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