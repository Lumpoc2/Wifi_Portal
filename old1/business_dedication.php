
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">   
    <title>Business Dedication - Victory </title> 
</head>
<body>
    <div class="container">
        <header>Business Dedication - Victory Pagadian City</header>
        <form action="businessdedication" method="POST">
            <div class="form first">
                <div class="details personal">
                    <a href="home"><p style="text-align: right; color:red; text-decoration: none;">Back to home</p></a>
                    <br>
                    <div class="fields">
                         <div class="input-field">
                            <label>Record ID</label>
                            <input type="text" name="record_id" placeholder="Date" required value="<?php echo(rand(1,1000000));?>" readonly>
                        </div>
                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" name="date" placeholder="Date" required>
                        </div>

                        <div class="input-field">
                            <label>Worship Service</label>
                            <input type="text" name="worship_service" placeholder="Enter Worship Service" required>
                        </div>

                        
                        <div class="input-field">
                            <label>Small Group Leader</label>
                            <input type="text" name="small_group_leader" placeholder="Enter Small Group Leader" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Personal Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Business Owner's name</label>
                            <input type="text" name="owner_name" placeholder="Enter Business Owner's name" required>
                        </div>

                        <div class="input-field">
                            <label>Home Number</label>
                            <input type="text" name="home_number" placeholder="Enter Home Number" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="mobile_number" placeholder="Enter Mobile Number" required>
                        </div>
                        <div class="input-field">
                            <label>Business Name</label>
                            <input type="text" name="business_name" placeholder="Enter Business Name" required>
                        </div>
                        <div class="input-field">
                            <label>Nature of Business</label>
                            <input type="text" name="nature_of_business" placeholder="Enter Nature of Business" required>
                        </div>

                        <div class="input-field">
                            <label>Member of Victory? (YES/NO)</label>
                            <input type="text" name="member_of_victory" placeholder="Member of Victory?" required>
                        </div>

                        <div class="input-field">
                            <label>If Yes, How Long?</label>
                            <input type="text" name="how_long" placeholder="If Yes, How Long?" required>
                        </div>

                        <div class="input-field">
                            <label>If No, Church Attended?</label>
                            <input type="text" name="church_attended" placeholder="If No, Church Attended?" required>
                        </div>
                        <div class="input-field">
                            <label>Small Group Leader's Home Number</label>
                            <input type="text" name="sgl_home_number" placeholder="Enter Small Group Leader's Home Number" required>
                        </div>
                        <div class="input-field">
                            <label>Small Group Leader's Mobile Number</label>
                            <input type="text" name="sgl_mobile_number" placeholder="Enter Small Group Leader's Mobile Number" required>
                        </div>
                       
                    </div>
                    <div class="details personal">
                    <span class="title">Dedication Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Venue</label>
                            <input type="text" name="venue" placeholder="Enter Venue" required>
                        </div>

                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" name="dedication_date"  placeholder="Date" required>
                        </div>

                        
                        <div class="input-field">
                            <label>Time</label>
                            <input type="time" name="dedication_time" placeholder="Time" required>
                        </div>
                        <div class="input-field">
                            <label>Expected Number of Guest</label>
                            <input type="text" name = "expected_guests" placeholder="Enter Expected Number of Guest" required>
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