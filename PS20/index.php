<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
        }
        .result-box {
            margin-top: 20px;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Electricity Bill Calculator</h1>
        <form id="billForm" method="POST">
            <div class="mb-3">
                <label for="units" class="form-label">Enter Units Consumed:</label>
                <input type="number" name="units" id="units" class="form-control" placeholder="e.g., 150" required>
            </div>
            <button type="submit" name="calculate" class="btn btn-primary w-100">Calculate Bill</button>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $units = $_POST['units'];
            $bill = 0;

            if ($units <= 50) {
                $bill = $units * 3.50;
            } elseif ($units <= 150) {
                $bill = (50 * 3.50) + (($units - 50) * 4.00);
            } elseif ($units <= 250) {
                $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
            } else {
                $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
            }

            echo "
            <div class='result-box'>
                <h4>Electricity Bill</h4>
                <p><strong>Units Consumed:</strong> $units</p>
                <p><strong>Total Bill:</strong> Rs. " . number_format($bill, 2) . "</p>
            </div>";
        }
        ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#billForm').on('submit', function(e) {
                let units = $('#units').val();
                if (units <= 0) {
                    alert('Please enter a valid number of units!');
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
