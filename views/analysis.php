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
        background: #e8f6e9;
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

    .page-ellipsis {
        padding: 0 5px;
        color: #777;
        font-size: 20px;
    }
    </style>
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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2"><a class="nav-link" href="/views/home.php">Home</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="/views/about_us.php">About us</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="#">Analysis</a></li>
            </ul>

        </div>
    </nav>

    <div class="container mt-4">

        <h2 class="fw-bold">Results & Analytics</h2>
        <p class="text-muted">All you need to know about the responses</p>

        <!-- Stats Row -->
        <div class="row text-center g-3">
            <div class="col-md-3">
                <div class="stat-card">Teaching Quality<br><b>20% Satisfied</b></div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">Course Content<br><b>40% Satisfied</b></div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">Resources<br><b>30% Satisfied</b></div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">Communication<br><b>10% Satisfied</b></div>
            </div>
        </div>

        <!-- Overview -->
        <div class="section-box">
            <h5 class="fw-bold">Analysis Overview</h5>
            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <img src="../assets/imgs/Frame 44.png" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- Messages -->
        <div class="section-box mt-4">
            <h5 class="fw-bold">Messages</h5>

            <div class="message-box">Taking the survey was simple and quick. I like that my feedback actually leads to
                changes.</div>
            <div class="message-box">The platform is easy to use, and the questions are clear. I feel heard.</div>
            <div class="message-box">I appreciate how the survey helps improve our courses every semester.</div>
            <div class="message-box">Great experience! The system is smooth and works well on my phone.</div>
            <div class="message-box">I like that the surveys are anonymous. It makes it easier to share honest feedback.
            </div>

            <!-- Pagination -->
            <div class="custom-pagination d-flex justify-content-center mt-4">
                <a href="#" class="page-dot">1</a>
                <a href="#" class="page-dot">2</a>
                <a href="#" class="page-dot">3</a>
                <a href="#" class="page-dot">4</a>
                <a href="#" class="page-dot">5</a>
                <span class="page-ellipsis">....</span>
                <a href="#" class="page-dot">50</a>
            </div>

        </div>

    </div>

</body>

</html>