<?php
include "../connection/db.php";
session_start();

// $_SESSION["student_id"] = 1;

// TEMP
$student_id = $_SESSION["student_id"];

// Get current question number
$current = isset($_GET['q']) ? intval($_GET['q']) : 1;

// 1. Fetch all questions
$questionsSql = "SELECT * FROM questions";
$result = $connection->query($questionsSql);

if (!$result) {
    die("Query failed: " . $connection->error);
}

$questionsArray = $result->fetch_all(MYSQLI_ASSOC);
$total = count($questionsArray)-1;

// Validate number
if ($current < 1) $current = 1;
if ($current > $total) $current = $total;

// Current question
$question = $questionsArray[$current - 1];

// 2. Save answer
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $question_id = $_POST['question_id'];
    $answer      = $_POST['answer_choice'];
    $student_id  = $_SESSION['student_id'];

    $stmt = $connection->prepare("
        INSERT INTO responses (student_id, question_id, answer_choice)
        VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE answer_choice = VALUES(answer_choice)
    ");

    $stmt->bind_param("iis", $student_id, $question_id, $answer);
    $stmt->execute();

    header("Location: survey.php?q=" . $_POST['next']);
    exit;
}
?>
