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
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Counseling - Victory </title> 
</head>
<body>
    <div class="container">
        <header>Counseling - Victory Pagadian City</header>
        <form action="counselingsave" method="POST">
            <div class="form first">
                <div class="details personal">
                    <a href="home"><p style="text-align: right; color:red;">Back to home</p></a><br>
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
                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" name="occupation" placeholder="Enter Occupation" required>
                        </div>
                        <div class="input-field">
                            <label>Nature of Problem</label>
                            <input type="text" name="nature_of_problem" placeholder="Enter Nature of Problem" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Personal Information</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Name of Counselee</label>
                            <input type="text" name="name_of_counselee" placeholder="Enter Name of Counselee" required>
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
                            <label>Previous Counseling? (YES/NO)</label>
                            <input type="text" name="previous_counseling" placeholder="If No, Church Attended?" required>
                        </div>
                       
                    </div>
                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                   
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Brief Summary of Situation</Summary></span>
                    <div class="fields">
                        <div class="input-field">
                            <textarea name="summary_of_situation" id="asd" cols="3" rows="5" class="ta10em" required></textarea>
                        </div>    
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Pastor's recommendations</span>

                    <div class="fields">
                    <div class="input-field"> 
                            <textarea name="pastor_recommendations" id="asd" cols="3" rows="5" class="ta10em" required></textarea>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>