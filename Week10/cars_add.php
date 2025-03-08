<?php
require_once "settings.php"; 

$conn = mysqli_connect($host, $user, $pwd, $sql_db); 

if ($conn) {
    // Secure user input before using it in SQL
    $make  = mysqli_real_escape_string($conn, trim($_POST["carmake"]));
    $model = mysqli_real_escape_string($conn, trim($_POST["carmodel"]));
    $price = mysqli_real_escape_string($conn, trim($_POST["price"]));
    $yom   = mysqli_real_escape_string($conn, trim($_POST["yom"]));

    // Prepare SQL query
    $query = "INSERT INTO cars (make, model, price, yom) VALUES ('$make', '$model', '$price', '$yom')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "<p class='wrong'>Something is wrong with the query: " . htmlspecialchars($query) . "</p>";
    } else {
        echo "<p class='ok'>Successfully added a new Car record</p>";
    }

    mysqli_close($conn);
}
?>
