<?php
include_once ("db_connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $_POST['taskName'];
    $taskDueDate = $_POST['due_date'];
    $taskPrio = $_POST['priority'];
    $taskStatus = $_POST['status'];

    $sql = "UPDATE student_task_tracker
            SET due_date = '$taskDueDate', priority = '$taskPrio', status = '$taskStatus'
            WHERE title = '$taskName'"; 

    if (mysqli_query($conn, $sql)) {
        echo "Task updated.";
        header('Location: inventory.php');
    } else {
        echo "Oops! Something went wrong. Please try again later.";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>