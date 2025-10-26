<?php
include 'db_connect.php';

$student_id = 1; //not implementing proper login logic

$query = "SELECT title, due_date, priority, status
                FROM task
                WHERE student_id = :student_id
                ORDER BY due_date ASC";

$stmt = $pdo->prepare($query);
$stmt->execute(['student_id' => $student_id]);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
