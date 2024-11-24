<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_name = $_POST['student_name'];
    $fields = [];

    for ($i = 1; $i <= 4; $i++) {
        $fields[] = $_POST["subject{$i}_mse"];
        $fields[] = $_POST["subject{$i}_ese"];
    }

    $query = "INSERT INTO student_result (student_name, subject1_mse, subject1_ese, subject2_mse, subject2_ese, subject3_mse, subject3_ese, subject4_mse, subject4_ese) 
              VALUES ('$student_name', ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("dddddddd", ...$fields);
    if ($stmt->execute()) {
        echo "<script>alert('Student added successfully!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
}
?>
