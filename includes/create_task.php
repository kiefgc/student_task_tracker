<?php
include_once("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $_POST['taskName'];
    $taskDueDate = $_POST['due_date'];
    $taskPrio = $_POST['priority'];
    $taskStatus = $_POST['status'];

    // Fixed student ID for now
    $student_id = 1;

    $sql = "INSERT INTO task (student_id, title, due_date, priority, status)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $student_id, $taskName, $taskDueDate, $taskPrio, $taskStatus);

    if ($stmt->execute()) {
        header('Location: /Student_task_tracker/frontend/index.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
