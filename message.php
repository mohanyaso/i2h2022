<?php 
    require "config/config.php";
    require 'includes/form_handlers/team_handler.php';
    require 'includes/form_handlers/project_handler.php';

    if (isset($_SESSION['project_name'])) {
        $project_title = $_SESSION['project_name'];
        $first_member = $_SESSION['first_name'];
        $project_details_query = mysqli_query($con, "SELECT * FROM team_members WHERE project_title ='$project_title' AND first_member_name = '$first_member'");
        $project_details = mysqli_fetch_array($project_details_query);
        $project_theme = $_SESSION['project_theme'];
        $project_name = ucfirst(strtolower($project_details['project_title']));
        $project_desc = $_SESSION['project_des'];
        $leader = $_SESSION['leader_name'];
        $mentor = $_SESSION['mentor_name'];
        $first_member = $_SESSION['first_name'];
        $second_member = $_SESSION['second_name'];
        $third_member = $_SESSION['third_name'];
        session_destroy();
        session_start();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="icon" href="assets/images/backgrounds/eshwar_favicon.png">
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
            <h1 class="success" style='color:#5f2780'>Project Submitted!</h1>
        </div>
        <div class="column col-md-12 col-sm-12">
            <h2 class="abstract">Project Abstract</h2>
            <br>
            <hr style='color:#5f2780'>
            <br>
            <div class='row'>
                <div class='column col-lg-12 col-md-12 col-sm-12'>
                    <div class="row">
                            <div class="column col-sm-6 col-lg-6">
                                <div class="column col-sm-6 col-lg-6">
                                <h4 style='color:#5f2780'>Team Leader:</h4>
                                <br>
                                <p style='color:#5f2780'>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $leader ?> </p>
                            </div>
                            <div class="column col-sm-6 col-lg-6">
                                <h4 style='color:#5f2780'>Team Mentor:</h4>
                                <br>
                                <p style='color:#5f2780'>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $mentor ?></p>
                            </div>

                        </div>

                        <div class="column col-sm-6 col-lg-6">
                            <h4 style='color:#5f2780'>Team Members:</h4>
                            <br>
                            <p style="color:#5f2780;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $first_member ?></p>
                            
                            <p style="color:#5f2780;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $second_member ?></p>
                            
                            <p style="color:#5f2780;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $third_member ?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <hr style='color:#5f2780'>
            <br>
            <h4 style='color:#5f2780'>Project theme: </h4><p style='color:#5f2780'><?php echo $project_theme; ?></p>
            <br>
            <h4 style='color:#5f2780'>Project title: </h4><p style='color:#5f2780'><?php  echo $project_name; ?></p>
            <br>
            <br>
            <!-- <p style="color:white;"><?php echo $project_desc; ?></p> -->
            <br>
            <a href="index.php" id="btn_id"><button class="btn" id="home_btn">Home</button></a>
        </div>
    </div>


</body>
</html>