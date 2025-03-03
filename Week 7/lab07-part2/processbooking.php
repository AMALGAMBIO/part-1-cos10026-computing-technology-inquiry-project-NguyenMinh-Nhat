<html>
    <head>
        <title>Booking Confirmation</title>
        <?php
        function sanitise_input($data) {
            $data = trim($data); // Remove spaces
            $data = stripslashes($data); // Remove slashes
            $data = htmlspecialchars($data); // Convert special characters to HTML entities
            return $data;

        $firstname = sanitise_input($_POST["firstname"]);
        $lastname = sanitise_input($_POST["lastname"]);
        $species = sanitise_input($_POST["species"]);
        $age = sanitise_input($_POST["age"]);
        $food = sanitise_input($_POST["food"]);
        $partySize = sanitise_input($_POST["partySize"]);
}
?>

    </head>
    <body>
        <h1>
            Rohirrim Tour Booking Confirmation
        </h1>

        <?php
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Ensure the form was submitted
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $age = $_POST["age"];
            $species = $_POST["species"];
            $food = $_POST["food"];

            $partySize = $_POST["partysize"];
            $errMsg = "";

            
            if (isset($_POST["species"])) {
                $species = $_POST["species"];
            } else {
                $species = "Not specified";
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Check if any booking options are selected
                $bookings = [];
                if (!empty($_POST['accom'])) {
                    $bookings[] = $_POST['accom'];
                }
                if (!empty($_POST['4day'])) {
                    $bookings[] = $_POST['4day'];
                }
                if (!empty($_POST['10day'])) {
                    $bookings[] = $_POST['10day'];
                }
                
                $bookingText = !empty($bookings) ? implode(", ", $bookings) : "None";
            }
            if ($firstname == "") {
                $errMsg .= "<p>You must enter your first name.</p>";
            } 
            else if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
                $errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
            }
            
            if ($errMsg != "") {
                echo "<p>$errMsg</p>";
            } 
            if (!isset($_POST["firstname"])) {
                header("Location: register.html");
                exit();
            }
            
            else {
                echo "<p> Welcome $firstname $lastname ! <br />
                You are now booked on the $bookingText <br/>
                Species: $species<br/>
                Age: $age<br/>
                Meal Preference: $food<br/>
                Number of travellers: $partySize</p>";
            }
            
        
        
        
        }
        ?>
    </body>
</html>
/* test */