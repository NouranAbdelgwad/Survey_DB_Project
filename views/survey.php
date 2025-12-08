<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Step 2</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php include_once 'layout/survey_navbar.php'; ?>
    <?php include "../controllers/SurveyController.php" ?>
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


        <form method="POST">

            <input type="hidden" name="question_id" value="<?php echo $question['id']; ?>">
            <!-- QUESTION -->
            <h4 class="fw-bold mt-4 mb-4" style="color:#1B263B;">
                <?php echo $question['question_text']; ?>
            </h4>

            <!-- OPTIONS -->
            <div class="options">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="answer_choice" value="Very Satisfied">
                    <label class="form-check-label">Very Satisfied</label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="answer_choice" value="Neutral">
                    <label class="form-check-label">Neutral</label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="answer_choice" value="Not Satisfied">
                    <label class="form-check-label">Not Satisfied</label>
                </div>
            </div>
            <!-- PREV BTN -->
            <div class="d-flex justify-content-between mt-5">

            <?php if ($current > 1): ?>
                <a href="survey.php?q=<?php echo $current - 1; ?>" class="btn btn-dark px-5 py-2 rounded-3">Previous</a>
            <?php endif; ?>

            <!-- NEXT button -->
            <?php if ($current < $total): ?>
                <button type="submit" name="next" value="<?php echo $current + 1; ?>" class="btn btn-dark px-5 py-2 rounded-3">Next</button>
            <?php else: ?>
                <a href="survey11.php" class="btn btn-dark px-5 py-2 rounded-3">Next</a>
            <?php endif; ?>
            </div>

        </form>
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