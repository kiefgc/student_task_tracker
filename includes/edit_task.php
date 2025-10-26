<?php
include_once("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskID = $_POST['task_id'];
    $taskName = $_POST['taskName'];
    $taskDueDate = $_POST['due_date'];
    $taskPrio = $_POST['priority'];
    $taskStatus = $_POST['status'];

    $sql = "UPDATE task 
            SET title = ?, due_date = ?, priority = ?, status = ?
            WHERE task_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $taskName, $taskDueDate, $taskPrio, $taskStatus, $taskID);

    if ($stmt->execute()) {
        header("Location: inventory.php?msg=Task+updated+successfully");
        exit();
    } else {
        echo "Oops! Something went wrong. Please try again later.<br>";
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
