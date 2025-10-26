<?php
include_once "db_connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $_POST['taskName'];
    $taskDueDate = $_POST['due_date'];
    $taskPrio = $_POST['priority'];
    $taskStatus = $_POST['status'];

    $sql = "INSERT INTO student_task_tracker (title, due_date, priority, status)
            VALUES ('$taskName', '$taskDueDate', '$taskPrio', '$taskStatus')";

    if (mysqli_query($conn, $sql)) {
        echo "New task added.";
        header('Location: index.html');
    } else {
        echo "Oops! Something went wrong. Please try again later.";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>