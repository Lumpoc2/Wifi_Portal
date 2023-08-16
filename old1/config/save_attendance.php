<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data and sanitize inputs
    $record_id = sanitizeInput($_POST['record_id']);
    $date = sanitizeInput($_POST['date']);
    $worship_service_time = sanitizeInput($_POST['worship_service_time']);
    $adult_congregation = sanitizeInput($_POST['adult_congregation']);
    $age_0_3 = sanitizeInput($_POST['age_0_3']);
    $age_4_6 = sanitizeInput($_POST['age_4_6']);
    $age_7_12 = sanitizeInput($_POST['age_7_12']);
    $teachers = sanitizeInput($_POST['teachers']);
    $yayas = sanitizeInput($_POST['yayas']);
    $total_adult_congregation = sanitizeInput($_POST['total_adult_congregation']);
    $total_kids = sanitizeInput($_POST['total_kids']);
    $total_teachers = sanitizeInput($_POST['total_teachers']);
    $over_all_total = sanitizeInput($_POST['over_all_total']);
    $fullname = sanitizeInput($_POST['fullname']);

    // Create a PDO connection to the database
    $host = 'localhost';
    $dbname = 'u991923994_victory';
    $username = 'u991923994_victory_ch';
    $password = 'edward@P@ssw0rd22123';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement with placeholders
        $stmt = $pdo->prepare("INSERT INTO `attendance`(`record_id`, `date`, `worship_service_time`,
         `adult_congregation`, `age_0_3`, `age_4_6`, `age_7_12`, `teachers`, `yayas`,
          `total_adult_congregation`, `total_kids`, `total_teachers`, `over_all_total`, `fullname`)
           VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        // Bind the values to the prepared statement
        $stmt->bindParam(1, $record_id);
        $stmt->bindParam(2, $date);
        $stmt->bindParam(3, $worship_service_time);
        $stmt->bindParam(4, $adult_congregation);
        $stmt->bindParam(5, $age_0_3);
        $stmt->bindParam(6, $age_4_6);
        $stmt->bindParam(7, $age_7_12);
        $stmt->bindParam(8, $teachers);
        $stmt->bindParam(9, $yayas);
        $stmt->bindParam(10, $total_adult_congregation);
        $stmt->bindParam(11, $total_kids);
        $stmt->bindParam(12, $total_teachers);
        $stmt->bindParam(13, $over_all_total);
        $stmt->bindParam(14, $fullname);


        // Execute the prepared statement
        $stmt->execute();
    } catch (PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage();
        exit();
    }
}

// Function to sanitize input
function sanitizeInput($input)
{
    $input = trim($input); // Remove leading and trailing whitespaces
    $input = stripslashes($input); // Remove backslashes
    $input = htmlspecialchars($input); // Convert special characters to HTML entities
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