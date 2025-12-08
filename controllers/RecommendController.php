<?php
session_start();
include "../connection/db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $question_id = 11;
    $answer      = $_POST['answer_text'];
    $student_id  = $_SESSION['student_id'];

    $stmt = $connection->prepare("
        INSERT INTO responses (student_id, question_id, answer_text)
        VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE answer_text = VALUES(answer_text)
    ");

    $stmt->bind_param("iis", $student_id, $question_id, $answer);
    $stmt->execute();

    header("Location: thank_you.php");
    exit;
}

?>