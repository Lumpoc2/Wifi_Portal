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
    <title>Funeral - Victory </title> 
</head>
<body>
    <div class="container">
        <header>Funeral - Victory Pagadian City</header>
        <form action="funeralsaved" method="POST">
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
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Personal Information</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Name of Deceased</label>
                            <input type="text" name="name_of_deceased" placeholder="Enter Name of Deceased" required>
                        </div>

                        <div class="input-field">
                            <label>Cause of Death</label>
                            <input type="text" name="cause_of_death" placeholder="Enter Cause of Death" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="text" name="age" placeholder="Enter Age" required>
                        </div>

                        <div class="input-field">
                            <label>Member of Victory? (YES/NO)</label>
                            <input type="text" name="member_of_victory" placeholder="Member of Victory?" required>
                        </div>

                        <div class="input-field">
                            <label><b>Name of Spouse or Immediate Family Member</b></label>
                            <input type="text" name="name_of_spouse" placeholder="Enter Name of Spouse or Immediate Family Member" required>
                        </div>

                        <div class="input-field">
                            <label>Relation to the Deceased</label>
                            <input type="text" name="relation_to_the_deceased" placeholder="Enter Relation to the Deceased" required>
                        </div>
                        <div class="input-field">
                            <label>Home number</label>
                            <input type="text" name="home_number" placeholder="Enter Home number" required>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="mobile_number" placeholder="Enter Home number" required>
                        </div>
                        <div class="input-field">
                            <label>Name of Small Group Leader of the Deceased</label>
                            <input type="text" name="name_of_small_group" placeholder="Enter Home number" required>
                        </div>
                        <div class="input-field">
                            <label>Home number of Small Group Leader of the Deceased</label>
                            <input type="text" name="home_number_of_small" placeholder="Enter Home number" required>
                        </div>
                        <div class="input-field">
                            <label>Mobile number of Small Group Leader of the Deceased</label>
                            <input type="text" name="mobile_number_of_small" placeholder="Enter Home number" required>
                        </div>
                        <div class="input-field">
                    </div>
                        <span class="title">Funeral Details</span>
                        <div class="fields">
                        <div class="input-field">
                            <label>Venue</label>
                            <input type="text" name="venue" placeholder="Enter Name of Deceased" required>
                        </div>

                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" name="v_date" placeholder="Enter Cause of Death" required>
                        </div>

                        <div class="input-field">
                            <label>Time</label>
                            <input type="time" name="time" placeholder="Enter Age" required>
                        </div>

                        <div class="input-field">
                            <label>Expected Number of Guests</label>
                            <input type="text" name="expected_number_of_guests" placeholder="Enter Expected Number of Guests" required>
                        </div>

                        <div class="input-field">
                            <label>Religion of the Family</label>
                            <input type="text" name="religion_of_the_family" placeholder="Enter Religion of the Family" required>
                        </div>
                        <div class="input-field">                           
                        </div>
                    </div>
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

    <script src="script.js"></script>
</body>
</html>