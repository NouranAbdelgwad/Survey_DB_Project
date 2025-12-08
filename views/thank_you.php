<?php include 'layout/navbar.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Platform</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    body {
        background: #e8f6e9;
        font-family: 'Segoe UI', sans-serif;
    }

    .main-card {
        width: 90%;
        background: white;
        padding: 50px;
        border-radius: 25px;
        margin: auto;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .action-btn-dark{
        background-color: #061025 !important;
        color: #f7f7f7 !important;
        padding: 8px 20px !important;
        border-radius: 12px !important;
    }

    .action-btn-dark:hover {
        background-color: white !important;
        color: rgb(0, 0, 0) !important;
        border: 1px solid #061025 !important;
    }
    </style>

</head>


<body>
    <div class="main-card mt-4">

        <h2 class="fw-bold">Thank You for Completing the Survey!</h2>
        <p class="text-muted mt-2">Your feedback helps us improve the university experience for all students.</p>
        <img src="../assets/imgs/image 6.png" class="img-fluid my-4" style="max-width: 380px;">

        <div class="mt-3">
            <a href="home.php" class="action-btn-dark btn me-3">Back Home</a>
        </div>

    </div>
</body>