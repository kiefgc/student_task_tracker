<?php
include_once("db_connect.php");

if (isset($_GET['task_id'])) {
    $taskID = $_GET['task_id'];

    $sql = "DELETE FROM task WHERE task_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $taskID);

    if ($stmt->execute()) {
        header("Location: inventory.php?msg=Task+deleted+successfully");
        exit();
    } else {
        echo "Error deleting task: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid task ID.";
}

$conn->close();
