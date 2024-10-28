<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Multiplication Table</h2>

    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']);

        if ($number > 0) {
            echo "<table>";
            echo "<tr><th>*</th>"; // Top-left corner of the table
            for ($i = 1; $i <= $number; $i++) {
                echo "<th>$i</th>"; // Column headers
            }
            echo "</tr>";

            for ($row = 1; $row <= $number; $row++) {
                echo "<tr>";
                echo "<th>$row</th>"; // Row header
                for ($col = 1; $col <= $number; $col++) {
                    $product = $row * $col;
                    echo "<td>$product</td>"; // Cell value
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a positive number.</p>";
        }
    }
    ?>
</body>
</html>

