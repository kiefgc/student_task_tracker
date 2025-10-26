<?php
include 'db_connect.php';

$student_id = 1; // not implementing proper login logic

$query = "SELECT title, due_date, priority, status 
          FROM task 
          WHERE student_id = ? 
          ORDER BY due_date ASC";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $student_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_stmt_close($stmt);
mysqli_close($conn);
