<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Step 2</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- NAVBAR -->
    <?php include_once 'layout/survey_navbar.php'; ?>

    <!-- MAIN BOX -->
    <div class="container form-wrapper shadow-sm">

        <!-- QUESTION ICON -->
        <div class="text-center mb-4">
            <div class="question-icon">
                ?
            </div>
        </div>

        <!-- STEPS -->
        <div class="steps">
            <div class="step active">1</div>
            <div class="step-line active-line"></div>
            <div class="step semi-active">2</div>
            <div class="step-line"></div>
            <div class="step">3</div>
        </div>


        <!-- QUESTION -->
        <h4 class="fw-bold mt-4 mb-4" style="color:#1B263B;">
            How helpful and relevant was the course content to your academic goals?
        </h4>

        <!-- OPTIONS -->
        <div class="options">
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="q1">
                <label class="form-check-label">Very Satisfied</label>
            </div>

            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="q1">
                <label class="form-check-label">Neutral</label>
            </div>

            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="q1">
                <label class="form-check-label">Not Satisfied</label>
            </div>
        </div>

        <!-- BUTTONS -->
        <div class="d-flex justify-content-between mt-5">
            <a href="survey3.php" class="btn btn-dark px-5 py-2 rounded-3">Previous</a>
            <a href="survey5.php" class="btn btn-dark px-5 py-2 rounded-3">Next</a>
        </div>
    </div>

    <!-- INTERNAL JS -->
    <script>
        // Highlight steps based on click
        const steps = document.querySelectorAll(".step");

        steps.forEach(step => {
            step.addEventListener("click", () => {
                steps.forEach(s => s.classList.remove("active"));
                step.classList.add("active");
            });
        });
    </script>

</body>

</html>