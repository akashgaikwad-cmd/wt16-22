<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Marks</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Add Student Marks</h2>
    <form action="process.php" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="student_name" class="form-label">Student Name:</label>
            <input type="text" id="student_name" name="student_name" class="form-control" required>
        </div>
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <h5>Subject <?= $i ?></h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>MSE Marks (out of 30):</label>
                    <input type="number" name="subject<?= $i ?>_mse" class="form-control" min="0" max="30" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>ESE Marks (out of 70):</label>
                    <input type="number" name="subject<?= $i ?>_ese" class="form-control" min="0" max="70" required>
                </div>
            </div>
        <?php endfor; ?>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>
</body>
</html>
