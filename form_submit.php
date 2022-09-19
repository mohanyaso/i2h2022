<?php 
    require "config/config.php";
    require 'includes/form_handlers/team_handler.php';
    require 'includes/form_handlers/project_handler.php';

    if (isset($_SESSION['leader_name'])){
        $first_member = $_SESSION['first_name'];
        $first_org = $_SESSION['first_org'];
        $member_details_query = mysqli_query($con, "SELECT * FROM team_members WHERE first_member_name = '$first_member'");
        $project_details = mysqli_fetch_array($member_details_query);
        $team_id = $project_details['access_id'];
        $leader = $_SESSION['leader_name'];
        $mentor = $_SESSION['mentor_name'];
        $first_member = $_SESSION['first_name'];
        $second_member = $_SESSION['second_name'];
        $third_member = $_SESSION['third_name'];
        $fourth_member = $_SESSION['fourth_name'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/backgrounds/eshwar_favicon.png">
    <title>Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <div class="container-fluid" id="wrapper">
    <div class="container" id="team_container">

    <div class="container" id="team_div">
        <div class="column col-md-12col-sm-12">
            <h1 class="success">Registration Successful!</h1>
        </div>
        <div class="column col-md-12 col-sm-12">
            <br>
            <h2 class="abstract2">Team Details</h2>
            <br>
            <hr>
            <br>
            <div class='row'>
                <div class='column col-lg-12 col-md-12 col-sm-12'>
                    <div class="row">
                            <div class="column col-sm-6 col-lg-6">
                                <div class="column col-sm-6 col-lg-6">
                                <h4>Team ID:</h4>
                                <br>
                                <p class="form_id">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $team_id ?></p>
                            
                                <h4>Team Leader:</h4>
                                <br>
                                <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $leader ?> </p>
                            </div>
                            <div class="column col-sm-6 col-lg-6">
                                <h4>Team Mentor:</h4>
                                <br>
                                <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $mentor ?></p>
            
                                
                            </div>


                    </div>

                        <div class="column col-sm-6 col-lg-6">
                            <h4>Team Members:</h4>
                            <br>
                            <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $first_member ?></p>
                            
                            <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $second_member ?></p>
                            
                            <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $third_member ?></p>
                        
                            <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $fourth_member ?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <hr>
            <br>
            <div class="row">
            <div class="column col-sm-12 col-md-12 col-12 col-lg-6">
                <a href="abstract.php"><input type="submit" name="project_submit" class="ppa" value="Proceed to submit project abstract"></a>
            </div>
            <div class="column col-sm-12 col-md-12 col-12 col-lg-6">
                <a href="index.php"  class="ppa"id="btn_id"><input type="submit" name="project_submit" class="ppa" value="HOME"></a>
            </div>
            </div>
        </div>
    </div>


</body>
</html>