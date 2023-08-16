<?php include "../security/config.php"; 
include "../security/project-security.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">   
    <title>Business Dedication - Victory</title> 
</head>
<body>
    <div class="container">
        <header>Child Dedication - Victory Pagadian City</header>
        <a href="home"><p style="text-align: right; color:red;">Back to home</p></a><br> 
        <form action="childdedicationsaved" method="POST">
            <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <label>Record ID</label>
                            <input type="text" name="record_id" placeholder="Date" value="<?php echo(rand(1,1000000));?>" required readonly>
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
                            <label>Small Group Leaders of Parents</label>
                            <input type="text" name="group_leaders" placeholder="Enter Small Group Leaders of Parents" required>
                        </div>
                        <div class="input-field">
                            <label>Mother</label>
                            <input type="text" name="mother" placeholder="Enter Mother's Name" required>
                        </div>
                        <div class="input-field">
                            <label>Father</label>
                            <input type="text" name="father" placeholder="Enter Father's Name" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Personal Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label><b>Child's Name</b></label>
                            <input type="text" name="childname" placeholder="Enter Child's Name" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <input type="text" name="gender" placeholder="Enter Gender" required>
                        </div>

                        <div class="input-field">
                            <label>Birth Date</label>
                            <input type="date" name="birthdate" placeholder="Enter Birth Date" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="text" name="age" placeholder="Enter Age" required>
                        </div>
                        <div class="input-field">
                            <label>Birth Place</label>
                            <input type="text" name="birthplace" placeholder="Enter Birth Place" required>
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter Address" required>
                        </div>
                    </div>
                </div>
                
                <div class="father">
                    <span class="title">Father's Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Father's Name</label>
                            <input type="text" name="f_fathersname" placeholder="Enter Home Number" required>
                        </div>
                        <div class="input-field">
                            <label>Home Number</label>
                            <input type="text" name="f_homenumber" placeholder="Enter Home Number" required>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="f_mobilenumber" placeholder="Enter Mobile Number" required>
                        </div>                        
                        <div class="input-field">
                            <label>Member of Victory? (YES/NO)</label>
                            <input type="text" name="f_memberofvictory" placeholder="Member of Victory?" required>
                        </div>
                        <div class="input-field">
                            <label>If Yes, How long</label>
                            <input type="text" name="howlong" placeholder="If Yes, How long" required>
                        </div>
                        <div class="input-field">
                            <label>If No, Church Attended</label>
                            <input type="text" name="churchAttended" placeholder="If No, Church Attended" required>
                        </div>
                    </div>
                </div>
                
                <div class="mother">
                    <span class="title">Mother's Name</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Mother's name</label>
                            <input type="text" name="m_mothername" placeholder="Enter Home Number" required>
                        </div>
                        <div class="input-field">
                            <label>Home Number</label>
                            <input type="text" name="m_motherhomenumber" placeholder="Enter Home Number" required>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="m_mobilenumber" placeholder="Enter Mobile Number" required>
                        </div>                        
                        <div class="input-field">
                            <label>Member of Victory? (YES/NO)</label>
                            <input type="text" name="m_memberofvictory" placeholder="Member of Victory?" required>
                        </div> 
                        <div class="input-field">
                            <label>If Yes, How long</label>
                            <input type="text" name="m_howlong" placeholder="If Yes, How long" required>
                        </div>
                        <div class="input-field">
                            <label>If No, Church Attended</label>
                            <input type="text" name="m_churchattended" placeholder="If No, Church Attended" required>
                        </div>
                    </div>
                </div>
                
                <div class="venue">
                    <span class="title">Dedication Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Venue</label>
                            <input type="text" name="venue" placeholder="Enter Venue" required>
                        </div>
                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" name="m_date" placeholder="Date" required>
                        </div>                        
                        <div class="input-field">
                            <label>Time</label>
                            <input type="time" name="v_time" placeholder="Time" required>
                        </div>
                        <div class="input-field">
                            <label>Expected Number of Guests</label>
                            <input type="text" name="guests" placeholder="Enter Expected Number of Guests" required>
                        </div>                        
                    </div>
                </div>
                
                <button class="nextBtn" type="submit">
                    <span class="btnText">Submit</span>
                    <i class="uil uil-navigator"></i>
                </button>  
            </div>                    
        </form>
    </div>
</body>
</html>
