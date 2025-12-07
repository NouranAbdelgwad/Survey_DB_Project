<?php include '../connection/db.php' ?>
<?php
$years   = getEnumValues($connection, "students", "level");
$colleges = getEnumValues($connection, "students", "college");
$majors  = getEnumValues($connection, "students", "major");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name       = $_POST['name'];
    $level      = $_POST['year'];       
    $student_id = $_POST['student_id'];
    $college    = $_POST['college'];    
    $email      = $_POST['email'];
    $major      = $_POST['major'];      

    $sql = "INSERT INTO students 
            (Student_ID, name, email, level, college, major)
            VALUES 
            ('$student_id', '$name', '$email', '$level', '$college', '$major')";

    if (!mysqli_query($connection, $sql)) {
        die('SQL Error: ' . mysqli_error($connection));
    }

    $sid = mysqli_insert_id($connection);

    header("Location: survey1.php?sid=$sid");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- NAVBAR -->
    <?php include_once '../views/layout/survey_navbar.php'; ?>

    <!-- MAIN FORM BOX -->
    <div class="container form-wrapper shadow-sm">
        <div class="text-center mb-4">
            <i class="bi bi-person" id="user-icon"></i>
        </div>

        <!-- STEPS -->
        <div class="steps">
            <div class="step active">1</div>
            <div class="step-line"></div>
            <div class="step">2</div>
            <div class="step-line"></div>
            <div class="step">3</div>
        </div>


        <!-- FORM -->
        <form action="" method="POST">
            <div class="row g-4">

                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" required class="form-control underline-input" name="name">
                </div>

                <div class="col-md-6">
                    <label>Academic Year</label>
                    <div class="underline-dropdown-wrapper">
                        <select class="form-select underline-dropdown" required name="year">
                            <option selected></option>
                            <?php foreach ($years as $y): ?>
                                <option value="<?= $y ?>"><?= $y ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Student ID</label>
                    <input type="text" class="form-control underline-input" required name="student_id">
                </div>

                <div class="col-md-6">
                    <label>College</label>
                    <div class="underline-dropdown-wrapper">
                        <select class="form-select underline-dropdown" required name="college">
                            <option selected></option>
                            <?php foreach ($colleges as $c): ?>
                                <option value="<?= $c ?>"><?= $c ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" required class="form-control underline-input" name="email">
                </div>

                <div class="col-md-6">
                    <label>Major</label>
                    <div class="underline-dropdown-wrapper">
                        <select required class="form-select underline-dropdown" name="major">
                            <option selected></option>
                            <?php foreach ($majors as $m): ?>
                                <option value="<?= $m ?>"><?= $m ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

            </div>



            <div class="text-end mt-4">
                <input type="submit" value="Next" class="btn btn-dark px-5 py-2 rounded-3"></a>
            </div>
        </form>
    </div>


    <script>
        const steps = document.querySelectorAll(".step");
        steps.forEach((step, index) => {
            step.addEventListener("click", () => {
                steps.forEach(s => s.classList.remove("active"));
                step.classList.add("active");
            });
        });
    </script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</body>

</html>