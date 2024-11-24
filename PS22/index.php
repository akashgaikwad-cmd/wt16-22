<?php
include 'db.php';

$query = "SELECT * FROM student_result";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester Results</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">VIT Semester Results</h1>
    <a href="add_student.php" class="btn btn-success my-3">Add New Student</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Subject 1</th>
                <th>Subject 2</th>
                <th>Subject 3</th>
                <th>Subject 4</th>
                <th>Total Marks</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?= $row['student_name'] ?></td>
                    <?php
                    $total_marks = 0;
                    for ($i = 1; $i <= 4; $i++) {
                        $subject_total = $row["subject{$i}_mse"] + $row["subject{$i}_ese"];
                        $total_marks += $subject_total;
                        echo "<td>{$subject_total}/100</td>";
                    }
                    ?>
                    <td><?= $total_marks ?>/400</td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
