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
    $groom = sanitizeInput($_POST['groom']);
    $bride = sanitizeInput($_POST['bride']);

    $groom_name = sanitizeInput($_POST['groom_name']);
    $groom_home_number = sanitizeInput($_POST['groom_home_number']);
    $groom_mobile_number = sanitizeInput($_POST['groom_mobile_number']);
    $groom_occupation = sanitizeInput($_POST['groom_occupation']);
    $groom_member_of_victory = sanitizeInput($_POST['groom_member_of_victory']);
    $groom_victory_length = sanitizeInput($_POST['groom_victory_length']);
    $groom_church_attended = sanitizeInput($_POST['groom_church_attended']);

    $bride_name = sanitizeInput($_POST['bride_name']);
    $bride_home_number = sanitizeInput($_POST['bride_home_number']);
    $bride_mobile_number = sanitizeInput($_POST['bride_mobile_number']);
    $bride_occupation = sanitizeInput($_POST['bride_occupation']);
    $bride_member_of_victory = sanitizeInput($_POST['bride_member_of_victory']);
    $bride_victory_length = sanitizeInput($_POST['bride_victory_length']);
    $bride_church_attended = sanitizeInput($_POST['bride_church_attended']);

    $meeting_details = sanitizeInput($_POST['meeting_details']);
    $reason_to_marry = sanitizeInput($_POST['reason_to_marry']);
    $parents_opinion = sanitizeInput($_POST['parents_opinion']);
    $wedding_plans = sanitizeInput($_POST['wedding_plans']);

    $wedding_venue = sanitizeInput($_POST['wedding_venue']);
    $wedding_date = sanitizeInput($_POST['wedding_date']);
    $wedding_time = sanitizeInput($_POST['wedding_time']);

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO `wedding`(`record_id`, `date`, `worship_service`, `small_group_leader`, `groom`, `bride`, `groom_name`, `groom_home_number`, `groom_mobile_number`, `groom_occupation`, `groom_member_of_victory`, `groom_victory_length`, `groom_church_attended`, `bride_name`, `bride_home_number`, `bride_mobile_number`, `bride_occupation`, `bride_member_of_victory`, `bride_victory_length`, `bride_church_attended`, `meeting_details`, `reason_to_marry`, `parents_opinion`, `wedding_plans`, `wedding_venue`, `wedding_date`, `wedding_time`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param(
        "sssssssssssssssssssssssssss",
        $record_id,
        $date,
        $worship_service,
        $small_group_leader,
        $groom,
        $bride,
        $groom_name,
        $groom_home_number,
        $groom_mobile_number,
        $groom_occupation,
        $groom_member_of_victory,
        $groom_victory_length,
        $groom_church_attended,
        $bride_name,
        $bride_home_number,
        $bride_mobile_number,
        $bride_occupation,
        $bride_member_of_victory,
        $bride_victory_length,
        $bride_church_attended,
        $meeting_details,
        $reason_to_marry,
        $parents_opinion,
        $wedding_plans,
        $wedding_venue,
        $wedding_date,
        $wedding_time
    );

    // Execute the SQL statement
    $stmt->execute();

    // Close the statement
    $stmt->close();
} else {
    echo "Form data not received.";
}

// Close the database connection
$conn->close();

// Function to sanitize user inputs
function sanitizeInput($input)
{
    $input = strip_tags($input);
    $input = htmlspecialchars($input);
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
    <link rel="stylesheet" href="style.css">
    <title>Wedding - Victory</title>
</head>
<body>
    <div class="container">
        <header style="color:#00741d">Wedding - Successfully saved</header><br>
        <span class="title" style="color:red;">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['record_id'])) {
                    $record_id = sanitizeInput($_POST['record_id']);
                    // Use the $record_id value as needed
                    echo "Record ID: " . $record_id;
                } else {
                    echo "Record ID not received.";
                }
            } else {
                echo "Invalid request.";
            }
            ?>
        </span><br>
        <span class="title">Please take a screenshot of this page as a backup.<br> This page will automatically redirect after 10 seconds. Make sure you take a screenshot.</span>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = 'wedding';
        }, 10000);
    </script>
</body>
</html>
