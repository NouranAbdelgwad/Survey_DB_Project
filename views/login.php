<?php
session_start();

// static admin credentials
$admin_user = "admin";
$admin_pass = "12345";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION["admin"] = $username;
        header("Location: analysis.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background: #fff;
            height: 100vh;
        }

        .main-box {
            height: 100%;
        }

        .illustration-container img {
            max-width: 85%;
        }

        .right-form-container {
            padding: 40px;
        }

        .custom-input {
            border: none;
            border-bottom: 2px solid black;
            border-radius: 0;
            height: 50px;
            font-size: 17px;
        }

        .custom-input:focus {
            outline: none;
            box-shadow: none;
            border-bottom: 2px solid #444;
        }

        .custom-login-btn {
            width: 100%;
            height: 50px;
            font-size: 18px;
            border-radius: 8px;
        }

        .error-msg {
            color: red;
            font-size: 15px;
            margin-top: -15px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <?php include_once 'layout/survey_navbar.php'; ?>

    <!-- MAIN BOX -->
    <div class="container-fluid main-box">
        <div class="row h-100 align-items-center">

            <!-- Left Image -->
            <div class="col-lg-6 d-flex justify-content-center illustration-container">
                <img src="../assets/imgs/image 12.png" alt="Admin Illustration">
            </div>

            <!-- Right Login Form -->
            <div class="col-lg-6 d-flex flex-column justify-content-center right-form-container">
                <form method="POST" class="right-form">

                    <h3 class="mb-4 fw-bold">Admin Login</h3>

                    <?php if (!empty($error)): ?>
                        <div class="error-msg"><?= $error ?></div>
                    <?php endif; ?>

                    <div class="mb-4">
                        <input type="text" class="form-control custom-input" placeholder="Username" name="username" required>
                    </div>

                    <div class="mb-5">
                        <input type="password" class="form-control custom-input" placeholder="Password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-dark custom-login-btn">Login</button>

                </form>
            </div>

        </div>
    </div>

</body>

</html>
