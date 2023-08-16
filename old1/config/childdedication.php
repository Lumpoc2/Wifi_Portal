<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data and sanitize inputs
    $recordId = sanitizeInput($_POST['record_id']);
    $date = sanitizeInput($_POST['date']);
    $worshipService = sanitizeInput($_POST['worship_service']);
    $groupLeaders = sanitizeInput($_POST['group_leaders']);
    $mother = sanitizeInput($_POST['mother']);
    $father = sanitizeInput($_POST['father']);
    $childName = sanitizeInput($_POST['childname']);
    $gender = sanitizeInput($_POST['gender']);
    $birthDate = sanitizeInput($_POST['birthdate']);
    $age = sanitizeInput($_POST['age']);
    $birthPlace = sanitizeInput($_POST['birthplace']);
    $address = sanitizeInput($_POST['address']);
    $fatherName = sanitizeInput($_POST['f_fathersname']);
    $homeNumberFather = sanitizeInput($_POST['f_homenumber']);
    $mobileNumberFather = sanitizeInput($_POST['f_mobilenumber']);
    $memberOfVictoryFather = sanitizeInput($_POST['f_memberofvictory']);
    $howLongFather = sanitizeInput($_POST['howlong']);
    $churchAttendedFather = sanitizeInput($_POST['churchAttended']);
    $motherName = sanitizeInput($_POST['m_mothername']);
    $homeNumberMother = sanitizeInput($_POST['m_motherhomenumber']);
    $mobileNumberMother = sanitizeInput($_POST['m_mobilenumber']);
    $memberOfVictoryMother = sanitizeInput($_POST['m_memberofvictory']);
    $howLongMother = sanitizeInput($_POST['m_howlong']);
    $churchAttendedMother = sanitizeInput($_POST['m_churchattended']);
    $venue = sanitizeInput($_POST['venue']);
    $dedicationDate = sanitizeInput($_POST['m_date']);
    $dedicationTime = sanitizeInput($_POST['v_time']);
    $expectedGuests = sanitizeInput($_POST['guests']);

    // Create a PDO connection to the database
    $host = 'localhost';
    $dbname = 'u991923994_victory';
    $username = 'u991923994_victory_ch';
    $password = 'edward@P@ssw0rd22123';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement with placeholders
        $stmt = $pdo->prepare("INSERT INTO `childdedication`(`record_id`, `date`, `worship_service`, `group_leaders`, `mother`, `father`, `childname`, `gender`, `birthdate`, `age`, `birthplace`, `address`, `f_fathersname`, `f_homenumber`, `f_mobilenumber`, `f_memberofvictory`, `howlong`, `churchAttended`, `m_mothername`, `m_motherhomenumber`, `m_mobilenumber`, `m_memberofvictory`, `m_howlong`, `m_churchattended`, `venue`, `m_date`, `v_time`, `guests`) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        // Bind the values to the prepared statement
        $stmt->bindParam(1, $recordId);
        $stmt->bindParam(2, $date);
        $stmt->bindParam(3, $worshipService);
        $stmt->bindParam(4, $groupLeaders);
        $stmt->bindParam(5, $mother);
        $stmt->bindParam(6, $father);
        $stmt->bindParam(7, $childName);
        $stmt->bindParam(8, $gender);
        $stmt->bindParam(9, $birthDate);
        $stmt->bindParam(10, $age);
        $stmt->bindParam(11, $birthPlace);
        $stmt->bindParam(12, $address);
        $stmt->bindParam(13, $fatherName);
        $stmt->bindParam(14, $homeNumberFather);
        $stmt->bindParam(15, $mobileNumberFather);
        $stmt->bindParam(16, $memberOfVictoryFather);
        $stmt->bindParam(17, $howLongFather);
        $stmt->bindParam(18, $churchAttendedFather);
        $stmt->bindParam(19, $motherName);
        $stmt->bindParam(20, $homeNumberMother);
        $stmt->bindParam(21, $mobileNumberMother);
        $stmt->bindParam(22, $memberOfVictoryMother);
        $stmt->bindParam(23, $howLongMother);
        $stmt->bindParam(24, $churchAttendedMother);
        $stmt->bindParam(25, $venue);
        $stmt->bindParam(26, $dedicationDate);
        $stmt->bindParam(27, $dedicationTime);
        $stmt->bindParam(28, $expectedGuests);

        // Execute the prepared statement
        $stmt->execute();
    } catch (PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage();
        exit();
    }
}

// Function to sanitize input
function sanitizeInput($input) {
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
    <title>Child dedication - Victory</title>
    <link rel="stylesheet" href="style.css">   
</head>
<body>
    <div class="container">
        <header style="color:#00741d">Child Dedication - Successfully saved</header><br>
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
            window.location.href = 'childdedication';
        }, 10000);
    </script>
</body>
</html>
