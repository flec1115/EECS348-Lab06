<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize the number input
        $number = (int) $_POST["number"];
        
        echo "<h1>Multiplication Table up to $number</h1>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        
        // Generate table header with column indexes
        echo "<tr><th>*</th>";
        for ($col = 1; $col <= $number; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";
        
        // Generate rows with row indexes and multiplication values
        for ($row = 1; $row <= $number; $row++) {
            echo "<tr>";
            echo "<th>$row</th>";  // Row index
            for ($col = 1; $col <= $number; $col++) {
                $result = $row * $col;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>
</body>
</html>

