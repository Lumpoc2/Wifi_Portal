<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Assuming you have a MySQL database setup with appropriate credentials
$host = 'localhost';
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
    $record_id = sanitizeInput($_POST['record_id']);
    $date = sanitizeInput($_POST['date']);
    $worship_service = sanitizeInput($_POST['worship_service']);
    $small_group_leader = sanitizeInput($_POST['small_group_leader']);
    $name_of_deceased = sanitizeInput($_POST['name_of_deceased']);
    $cause_of_death = sanitizeInput($_POST['cause_of_death']);
    $age = sanitizeInput($_POST['age']);
    $member_of_victory = sanitizeInput($_POST['member_of_victory']);
    $name_of_spouse = sanitizeInput($_POST['name_of_spouse']);
    $relation_to_the_deceased = sanitizeInput($_POST['relation_to_the_deceased']);
    $home_number = sanitizeInput($_POST['home_number']);
    $mobile_number = sanitizeInput($_POST['mobile_number']);
    $name_of_small_group = sanitizeInput($_POST['name_of_small_group']);
    $home_number_of_small = sanitizeInput($_POST['home_number_of_small']);
    $mobile_number_of_small = sanitizeInput($_POST['mobile_number_of_small']);
    $venue = sanitizeInput($_POST['venue']);
    $v_date = sanitizeInput($_POST['v_date']);
    $time = sanitizeInput($_POST['time']);
    $expected_number_of_guests = sanitizeInput($_POST['expected_number_of_guests']);
    $religion_of_the_family = sanitizeInput($_POST['religion_of_the_family']);
   
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO `funeral`(`record_id`, `date`,
     `worship_service`, `small_group_leader`, `name_of_deceased`,
      `cause_of_death`, `age`, `member_of_victory`, `name_of_spouse`,
       `relation_to_the_deceased`, `home_number`, `mobile_number`,
        `name_of_small_group`, `home_number_of_small`, `mobile_number_of_small`,
         `venue`, `v_date`, `time`, `expected_number_of_guests`,
          `religion_of_the_family`) 
          VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssssssssssssss", $record_id, $date, $worship_service, $small_group_leader, $name_of_deceased, $cause_of_death, $age, $member_of_victory, $name_of_spouse, $relation_to_the_deceased, $home_number, $mobile_number, $name_of_small_group, $home_number_of_small, $mobile_number_of_small, $venue, $v_date, $time, $expected_number_of_guests, $religion_of_the_family);


    // Execute the SQL statement
    $stmt->execute();

   
} else {
    echo "Form data not received.";
}


function sanitizeInput($input) {
    // Remove potentially harmful characters
    $input = strip_tags($input);

    // Escape special characters
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Prevent SQL injection
    global $conn;
    $input = $conn->real_escape_string($input);

    return $input;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funeral - Victory</title>
    <link rel="stylesheet" href="style.css">   
</head>
<body>
    <div class="container">
        <header style="color:#00741d">Counseling - Successfully saved</header><br>
        <span class="title" style="color:red;"><?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['record_id'])) {
                $record_id = sanitizeInput($_POST['record_id']);
                // Use the $record_id value as needed
                echo "Record ID: " . $record_id;
                 // Close the statement
                 $conn->close();
            } else { 
                echo "Record ID not received.";
            }
        } else {
            echo "Invalid request.";
        }?></span><br>
        <span class="title">Please take a screenshot of this page as backup.<br>This page will automatically redirect after 10 seconds. Make sure you take a screenshot.</span>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = 'funeral';
        }, 10000);
    </script>
</body>
</html>
