<?php include 'layout/navbar.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Platform</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    
    

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h1>Your Opinion Matters!</h1>
                    <p>Take a few minutes to complete our survey and help improve courses, services, and campus life.</p>
                    <a href="../views/survey1.php" class="btn btn-main px-4 py-2 rounded-4 me-3">Start Survey</a>
                </div>

                <div class="col-lg-6 text-center">
                    <img src="../assets/imgs/image 11.png"
                         class="img-fluid" style="max-height: 330px;">
                </div>

            </div>
        </div>
    </section>

    <!-- Why section -->
    <div class="container text-center my-5">
        <h2 class="fw-bold">Why Use Our Platform?</h2>

        <div class="row mt-4 justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card-box">
                <i class="fa-solid fa-people-group"></i>
                    <h5 class="fw-bold">Student-Centered</h5>
                    <p>Your opinions matter. Help shape university policies, courses, and services through meaningful feedback.</p>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card-box">
                <i class="fa-solid fa-chart-line"></i>
                    <h5 class="fw-bold">Real Impact</h5>
                    <p>See how your feedback drives change with transparent results and actionable insights for university staff.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to action -->
    <section class="cta-section text-center">
        <h2 class="fw-bold">Ready to Make Your Voice Heard?</h2>
        <a href="../views/survey1.php" class="btn btn-main px-4 py-2 rounded-4 me-3">Start Survey</a>
    </section>

    
    <?php include 'layout/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
