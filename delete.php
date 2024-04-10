<?php
    require("dbcon.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM employee WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header("Location: employeetable.php");
?>
