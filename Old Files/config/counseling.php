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
    $occupation = sanitizeInput($_POST['occupation']);
    $nature_of_problem = sanitizeInput($_POST['nature_of_problem']);

    $name_of_counselee = sanitizeInput($_POST['name_of_counselee']);
    $home_number = sanitizeInput($_POST['home_number']);
    $mobile_number = sanitizeInput($_POST['mobile_number']);
    $member_of_victory = sanitizeInput($_POST['member_of_victory']);
    $how_long = sanitizeInput($_POST['how_long']);
    $church_attended = sanitizeInput($_POST['church_attended']);
    $previous_counseling = sanitizeInput($_POST['previous_counseling']);

    $summary_of_situation = sanitizeInput($_POST['summary_of_situation']);
    $pastor_recommendations = sanitizeInput($_POST['pastor_recommendations']);

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO `counseling`(`record_number`, `date`, `worship_service`, `group_leaders`, `occupation`, `nature_of_problem`, `name_of_counselee`, `home_number`, `mobile_number`, `member_of_victory`, `how_long`, `church_attended`, `previous_counseling`, `brief`, `pastors_recommendation`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssss", $record_id, $date, $worship_service, $small_group_leader, $occupation, $nature_of_problem, $name_of_counselee, $home_number, $mobile_number, $member_of_victory, $how_long, $church_attended, $previous_counseling, $summary_of_situation, $pastor_recommendations);

    // Execute the SQL statement
    $stmt->execute();

    // Close the statement
    $stmt->close();
} else {
    echo "Form data not received.";
}

// Close the database connection
$conn->close();

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
    <title>Counseling - Victory</title>
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
            window.location.href = 'counseling';
        }, 10000);
    </script>
</body>
</html>
