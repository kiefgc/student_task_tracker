<?php
include_once ("db_connect.php");
if (isset($_GET['task_id'])) {
    $taskID = $_GET['task_id'];
    $sql = "DELETE FROM student_task_tracker WHERE task_id ='$taskID'";

    if ($conn->query($sql) === TRUE) {
        echo "Task deleted successfully. Congratulations on finishing a task!";
        header('Location: inventory.php');
    } else {
        echo "Error deleting task: " . $conn->error;
    }
} else {
    echo "Invalid task name.";
}
?>