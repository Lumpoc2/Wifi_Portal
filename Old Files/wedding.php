<?php include "../security/config.php"; 
include "../security/project-security.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">   
    <title>Wedding - Victory </title> 
</head>
<body>
    <div class="container">
        <header>Wedding - Victory Pagadian City</header>
        <a href="home"><p style="text-align: right; color:red; text-decoration: none;">Back to home</p></a><br>
        <form action="weddingsaved" method="POST">
    <div class="form first">
        <div class="details personal">
            <div class="fields">
                <div class="input-field">
                    <label>Record ID</label>
                    <input type="text" placeholder="Date" required value="<?php echo(rand(1,1000000));?>" readonly name="record_id">
                </div>
                <div class="input-field">
                    <label>Date</label>
                    <input type="date" placeholder="Date" required name="date">
                </div>

                <div class="input-field">
                    <label>Worship Service</label>
                    <input type="text" placeholder="Enter Worship Service" required name="worship_service">
                </div>

                <div class="input-field">
                    <label>Small Group Leader</label>
                    <input type="text" placeholder="Enter Small Group Leader" required name="small_group_leader">
                </div>
                <div class="input-field">
                    <label>Groom</label>
                    <input type="text" placeholder="Enter Groom's Name" required name="groom">
                </div>
                <div class="input-field">
                    <label>Bride</label>
                    <input type="text" placeholder="Enter Bride's Name" required name="bride">
                </div>
            </div>
        </div>
        <br>

        <div class="details ID">
            <span class="title">Groom's Information</span>

            <div class="fields">
                <div class="input-field">
                    <label>Groom's Name</label>
                    <input type="text" placeholder="Enter Groom's Name" required name="groom_name">
                </div>

                <div class="input-field">
                    <label>Home Number</label>
                    <input type="text" placeholder="Enter Home Number" required name="groom_home_number">
                </div>

                <div class="input-field">
                    <label>Mobile Number</label>
                    <input type="text" placeholder="Enter Mobile Number" required name="groom_mobile_number">
                </div>
                <div class="input-field">
                    <label>Occupation</label>
                    <input type="text" placeholder="Enter Business Name" required name="groom_occupation">
                </div>

                <div class="input-field">
                    <label>Member of Victory? (YES/NO)</label>
                    <input type="text" placeholder="Enter Member of Victory?" required name="groom_member_of_victory">
                </div>

                <div class="input-field">
                    <label>If Yes, How Long?</label>
                    <input type="text" placeholder="If Yes, How Long?" required name="groom_victory_length">
                </div>

                <div class="input-field">
                    <label>If No, Church Attended?</label>
                    <input type="text" placeholder="If No, Church Attended?" required name="groom_church_attended">
                </div>


            </div>
            <br>
            <div class="details personal">
                <span class="title">Bride's Information</span>

                <div class="fields">
                    <div class="input-field">
                        <label>Bride's Name</label>
                        <input type="text" placeholder="Enter Bride's Name" required name="bride_name">
                    </div>

                    <div class="input-field">
                        <label>Home Number</label>
                        <input type="text" placeholder="Enter Home Number" required name="bride_home_number">
                    </div>

                    <div class="input-field">
                        <label>Mobile Number</label>
                        <input type="text" placeholder="Enter Mobile Number" required name="bride_mobile_number">
                    </div>
                    <div class="input-field">
                        <label>Occupation</label>
                        <input type="text" placeholder="Enter Business Name" required name="bride_occupation">
                    </div>


                    <div class="input-field">
                        <label>Member of Victory? (YES/NO)</label>
                        <input type="text" placeholder="Enter Member of Victory?" required name="bride_member_of_victory">
                    </div>

                    <div class="input-field">
                        <label>If Yes, How Long?</label>
                        <input type="text" placeholder=" If Yes, How Long?" required name="bride_victory_length">
                    </div>

                    <div class="input-field">
                        <label>If No, Church Attended?</label>
                        <input type="text" placeholder="If No, Church Attended?" required name="bride_church_attended">
                    </div>
                </div>
            </div>
            <br>
            <div class="details personal">
                <span class="title">Personal Interview by Pastor</span>

                <div class="fields">
                    <div class="input-field">
                        <label>How did you meet? How long have you known each other?</label>
                        <input type="text" placeholder="Enter Bride's Name" required name="meeting_details">
                    </div>

                    <div class="input-field">
                        <label>Why would you like to get married?</label>
                        <input type="text" placeholder="Enter Home Number" required name="reason_to_marry">
                    </div>

                    <div class="input-field">
                        <label>What do your parents think of your plan?</label>
                        <input type="text" placeholder="Enter Mobile Number" required name="parents_opinion">
                    </div>
                    <div class="input-field">
                        <label>What are your plans?</label>
                        <input type="text" placeholder="Enter Business Name" required name="wedding_plans">
                    </div>
                </div>
            </div>
            <br>
            <div class="details personal">
                <span class="title">Wedding Details</span>

                <div class="fields">
                    <div class="input-field">
                        <label>Venue</label>
                        <input type="text" placeholder="Enter Bride's Name" required name="wedding_venue">
                    </div>

                    <div class="input-field">
                        <label>Date</label>
                        <input type="date" placeholder="Enter Home Number" required name="wedding_date">
                    </div>

                    <div class="input-field">
                        <label>Time</label>
                        <input type="time" placeholder="Enter Mobile Number" required name="wedding_time">
                    </div>
                </div>
            </div>
        </div>
        <button class="nextBtn">
            <span class="btnText">Submit</span>
            <i class="uil uil-navigator"></i>
        </button>
    </div>
</form>

    </div>
</body>
</html>