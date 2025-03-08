<?php
require_once "settings.php";  

$dbconn = mysqli_connect($host, $user, $pwd, $sql_db);
if ($dbconn) {
    if (isset($_POST['carmake']) && !empty($_POST['carmake'])) {  
        $make = mysqli_real_escape_string($dbconn, $_POST['carmake']); 

        // SQL query using LIKE to find similar car makes
        $query = "SELECT * FROM cars WHERE make LIKE '%$make%'";
        $result = mysqli_query($dbconn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";

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
        } else {
            echo "<p>No cars found matching your search.</p>";
        }
    } else {
        echo "<p>Please enter a search term.</p>";
    }

    mysqli_close($dbconn);
} else {
    echo "<p>Unable to connect to the database.</p>";
}
?>
