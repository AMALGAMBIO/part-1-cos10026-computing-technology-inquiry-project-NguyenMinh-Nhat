<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Using PHP Variables, arrays and operators</title>
    <!-- add other meta -->
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
    <?php

    $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

    echo "<p>The Days of the week in English are: " . implode(", ", $days) . ".</p>";


    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

    echo "<p>The Days of the week in French are: " . implode(", ", $days) . ".</p>";
    ?>
</body>
</html>
