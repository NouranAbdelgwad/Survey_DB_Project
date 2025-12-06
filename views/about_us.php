<?php include 'layout/navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
    body {
        background: #f8f9fa;
    }

    .about-hero {
        background: #D2EEE1;
        padding-top: 80px;
        padding-bottom: 120px;
        border-bottom-left-radius: 40px;
        border-bottom-right-radius: 40px;
    }

    .header{
        font-size:30px
    }


    .mission-box,
    .vision-box {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .hero-img {
        width: 80%;
        max-width: 350px;
    }
    </style>
</head>

<body>

    <!-- ABOUT US -->
    <section class="text-center p-5 about-hero">
        <h2 class="fw-bold">About Us</h2>
        <p class="text-muted">We collect and use student feedback to improve teaching, courses,<br> and the overall
            university experience.</p>

        <img src="../assets/imgs/image 13.png" class="hero-img my-4" alt="">
    </section>

    <section class="text-center p-5">
        <h4 class="header fw-bold mt-3">Who we are</h4>
        <p class="w-75 mx-auto text-muted">
            The University Survey System is a dedicated platform designed to collect, analyze,
            and improve the academic and campus experience for our students and faculty.
            Our goal is to ensure that every voice is heard and every piece of feedback contributes
            to a stronger learning environment.
        </p>

        <div class="container mt-4">
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="mission-box">
                    <i class="fa-solid fa-bullseye"></i>
                        <h5 class="fw-bold mt-2">Our Mission</h5>
                        <p class="text-muted">To improve learning quality by collecting meaningful student feedback.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="vision-box">
                    <i class="fa-solid fa-eye"></i>
                        <h5 class="fw-bold mt-2">Our Vision</h5>
                        <p class="text-muted">To create a student-centered university where feedback drives improvement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="cta-section text-center">
        <h2 class="fw-bold">Ready to Make Your Voice Heard?</h2>
        <a href="/views/survey.php" class="btn btn-main px-4 py-2 rounded-4 me-3">Start Survey</a>
    </section>


    <?php include 'layout/footer.php'; ?>

</body>

</html>