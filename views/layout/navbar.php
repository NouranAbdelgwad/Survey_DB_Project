<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My PHP Website</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand ms-2" href="#">
            <img src="../assets/imgs/image 4.png" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navMenu">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item mx-2"><a class="nav-link" href="../views/home.php">Home</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="../views/about_us.php">About us</a></li>
            </ul>

            <a href="../views/survey1.php" class="btn btn-nav px-4 py-2 rounded-4 me-3">Start Survey</a>
        </div>
    </nav>
</body>