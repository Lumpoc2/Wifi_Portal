<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Assuming you have a MySQL database setup with appropriate credentials
$servername = 'localhost';
$dbname = 'u991923994_victory';
$username = 'u991923994_victory_ch';
$password = 'edward@P@ssw0rd22123';

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form inputs from the POST request
    $record_id = $_POST['record_id'];
    $date = $_POST['date'];
    $worship_service = $_POST['worship_service'];
    $small_group_leader = $_POST['small_group_leader'];
    $owner_name = $_POST['owner_name'];
    $home_number = $_POST['home_number'];
    $mobile_number = $_POST['mobile_number'];
    $business_name = $_POST['business_name'];
    $nature_of_business = $_POST['nature_of_business'];
    $member_of_victory = $_POST['member_of_victory'];
    $how_long = $_POST['how_long'];
    $church_attended = $_POST['church_attended'];
    $sgl_home_number = $_POST['sgl_home_number'];
    $sgl_mobile_number = $_POST['sgl_mobile_number'];
    $venue = $_POST['venue'];
    $dedication_date = $_POST['dedication_date'];
    $dedication_time = $_POST['dedication_time'];
    $expected_guests = $_POST['expected_guests'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO `business_dedication`(`record_number`, `date`, `worship_service`, `leaders_of_couple`, `business_owner`, `home_number`, `mobile_number`, `business_name`, `nature_of_business`, `member_of_victory`, `how_long`, `church_attend`, `leaders_home_number`, `leaders_mobile_numebr`, `venue`, `date_event`, `time`, `number_of_guest`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssssssss", $record_id, $date, $worship_service, $small_group_leader, $owner_name, $home_number, $mobile_number, $business_name, $nature_of_business, $member_of_victory, $how_long, $church_attended, $sgl_home_number, $sgl_mobile_number, $venue, $dedication_date, $dedication_time, $expected_guests);

    // Execute the SQL statement
    $stmt->execute();



    // Close the statement
    $stmt->close();
} else {
    echo "Form data not received.";
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counseling - Victory</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header style="color:#00741d">Business Dedication - Successfully saved</header><br>
        <span class="title" style="color:red;">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['record_id'])) {
                    $record_id = ($_POST['record_id']);
                    // Use the $record_id value as needed
                    echo "Record ID: " . $record_id;
                } else {
                    echo "Record ID not received.";
                }
            } else {
                echo "Invalid request.";
            } ?>
        </span><br>
        <span class="title">Please take a screenshot of this page as backup.<br>This page will automatically redirect
            after <p id="countdown"></p> seconds. Make sure you take a screenshot.</span>
    </div>

<script>
    function countdown() {
      var count = 10;
      var countdownElement = document.getElementById("countdown");
      var timer = setInterval(function() {
        countdownElement.textContent = count;
        count--;

        if (count === 0) {
          clearInterval(timer);
          window.location.href = "https://victory.evillarin.com/business_dedication";
        }
      }, 1000);
    }

    countdown();
  </script>
</body>

</html>