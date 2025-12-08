<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

include '../connection/db.php';  // your DB connection

// -----------------------------
// FUNCTION: Get satisfaction %
// -----------------------------
function getCategoryStats($connection, $category)
{
    $sql = "
        SELECT answer_choice, COUNT(*) AS total
        FROM responses
        JOIN questions ON questions.id = responses.question_id
        WHERE questions.category = '$category'
        GROUP BY answer_choice
    ";

    $result = mysqli_query($connection, $sql);

    $stats = [
        "Very Satisfied" => 0,
        "Neutral" => 0,
        "Not Satisfied" => 0
    ];

    while ($row = mysqli_fetch_assoc($result)) {
        $stats[$row['answer_choice']] = $row['total'];
    }

    // Calculate satisfaction percentage
    $total = array_sum($stats);
    $percent = ($total > 0)
        ? round(($stats["Very Satisfied"] / $total) * 100)
        : 0;

    return $percent;
}

// -----------------------------
// CALCULATE CATEGORY PERCENTAGES
// -----------------------------
$teachQ  = getCategoryStats($connection, "Teaching Quality");
$content = getCategoryStats($connection, "Course Content");
$res     = getCategoryStats($connection, "Resources");
$comm    = getCategoryStats($connection, "Communication");

// -----------------------------
// LOAD TEXT FEEDBACK (Question #11)
// -----------------------------
$messages_query = "
    SELECT answer_text 
    FROM responses 
    WHERE question_id = 11 AND answer_text IS NOT NULL 
    ORDER BY id DESC
";
$messages_result = mysqli_query($connection, $messages_query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results & Analytics</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- CSS -->
    <style>
        body {
            background: white;
            font-family: "Tajawal", sans-serif;
        }

        .stat-card {
            background: #04122C;
            color: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
        }

        .section-box {
            background: white;
            padding: 25px;
            border-radius: 15px;
            margin-top: 20px;
        }

        .message-box {
            background: #f9f9f9;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #eee;
        }

        .custom-pagination {
            gap: 10px;
            user-select: none;
        }

        .page-dot {
            width: 35px;
            height: 35px;
            background: white;
            color: #333;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 500;
            border: 1px solid #ddd;
            cursor: pointer;
            text-decoration: none;
            transition: 0.2s;
        }

        .page-dot:hover {
            background: #e8f6e9;
        }

        .page-dot.active {
            background: #d9e8b3;
            color: black;
            font-weight: 700;
            border: none;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
     <?php include '../views/layout/navbar.php'?>

    <div class="container mt-4">

        <h2 class="fw-bold">Results & Analytics</h2>
        <p class="text-muted">All the survey insights in one place</p>

        <!-- Stats Row -->
        <div class="row text-center g-3">
            <div class="col-md-3">
                <div class="stat-card">Teaching Quality<br><b><?= $teachQ ?>% Satisfied</b></div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">Course Content<br><b><?= $content ?>% Satisfied</b></div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">Resources<br><b><?= $res ?>% Satisfied</b></div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">Communication<br><b><?= $comm ?>% Satisfied</b></div>
            </div>
        </div>

        <!-- Overview (bar Chart) -->
        <div class="section-box">
            <h5 class="fw-bold">Analysis Overview</h5>
            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <canvas id="overviewChart" height="60"></canvas>
                </div>
            </div>
        </div>

        <!-- Messages -->
        <div class="section-box mt-4">
            <h5 class="fw-bold">Feedback Messages</h5>

            <?php while ($msg = mysqli_fetch_assoc($messages_result)): ?>
                <div class="message-box">
                    <?= htmlspecialchars($msg['answer_text']) ?>
                </div>
            <?php endwhile; ?>

        </div>

    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById("overviewChart");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Teaching", "Content", "Resources", "Communication"],
                datasets: [{
                    label: "Satisfaction (%)",
                    data: [<?= $teachQ ?>, <?= $content ?>, <?= $res ?>, <?= $comm ?>],

                    backgroundColor: [
                        "#0e4137ff", 
                        "#3f484dff", 
                        "#4e7441ff", 
                        "#7a726bff" 
                    ],

                    borderColor: [
                        "#0e4137ff",
                        "#405664ff",
                        "#4e7441ff",
                        "#7a726bff"
                    ],

                    borderWidth: 2,
                    borderRadius: 8
                }]
            },

            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            stepSize: 20
                        }
                    }
                }
            }
        });
    </script>


</body>

</html>