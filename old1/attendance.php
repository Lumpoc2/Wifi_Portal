<?php include "../security/config.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weekend Worship Service - Victory </title>
</head>

<body>
    <div class="container">
        <header>Weekend Worship Service - Pagadian City</header>
        <form action="attendancesaved" method="POST">
            <div class="form first">
                <div class="details personal">
                    <a href="home">
                        <p style="text-align: right; color:red; text-decoration: none;">Back to home</p>
                    </a>
                    <br>
                    <div class="fields">
                        <div class="input-field">
                            <label>Record ID</label>
                            <input type="text" name="record_id" placeholder="Date" required
                                value="<?php echo (rand(1, 99999999)); ?>" readonly>
                        </div>
                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" name="date" placeholder="Date" required>
                        </div>

                        <div class="input-field">
                            <label>Time</label>
                            <input type="time" name="worship_service_time" placeholder="Time" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Attendance & Offerings</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Adult Congregation</label>
                            <input type="text" name="adult_congregation" placeholder="Adult Congregation" required>
                        </div>

                        <div class="input-field">
                            <label>Age 0-3</label>
                            <input type="text" name="age_0_3" placeholder="Enter Home Number" required>
                        </div>

                        <div class="input-field">
                            <label>Age 4-6</label>
                            <input type="text" name="age_4_6" placeholder="Enter Mobile Number" required>
                        </div>
                        <div class="input-field">
                            <label>Age 7-12</label>
                            <input type="text" name="age_7_12" placeholder="Enter Business Name" required>
                        </div>
                        <div class="input-field">
                            <label>Teachers</label>
                            <input type="text" name="teachers" placeholder="Enter Nature of Business"
                                required>
                        </div>

                        <div class="input-field">
                            <label>Yayas</label>
                            <input type="text" name="yayas" placeholder="Member of Victory?" required>
                        </div>
                        <div class="input-field">
                            <label>Total Adult Congregation</label>
                            <input type="text" name="total_adult_congregation" placeholder="Member of Victory?" required>
                        </div>
                        <div class="input-field">
                            <label>Total Kids</label>
                            <input type="text" name="total_kids" placeholder="Member of Victory?" required>
                        </div>
                        <div class="input-field">
                            <label>Total Teachers</label>
                            <input type="text" name="total_teachers" placeholder="Member of Victory?" required>
                        </div>
                        <div class="input-field">
                            <label>Over all Total</label>
                            <input type="text" name="over_all_total" placeholder="Member of Victory?" required>
                        </div>
                    </div>


                    <span class="title">SERVICE REPORT RECORD BY</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Fullname</label>
                            <input type="text" name="fullname" placeholder="Recorded By" required>
                        </div>
                    </div>
                    <button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>

        </form>
    </div>
</body>

</html>