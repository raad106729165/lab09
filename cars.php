<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lab 09: used car listing from MySQL">
    <title>Lab 09 - Cars</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 0.4em 0.8em; text-align: left; }
        th { background-color: #e0e0e0; }
    </style>
</head>
<body>
    <h1>Used Car Dealership</h1>
<?php
require_once("settings.php");

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    echo "<p>Database connection failure.</p>";
} else {
    $query = "SELECT car_id, make, model, price, yom FROM cars";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "<p>Something is wrong with the query: " . htmlspecialchars($query) . "</p>";
    } elseif (mysqli_num_rows($result) == 0) {
        echo "<p>There are no cars to display.</p>";
    } else {
        echo "<table>";
        echo "<tr><th>Car ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    mysqli_close($conn);
}
?>
</body>
</html>
