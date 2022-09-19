<?php 
    require "config/config.php";
    require 'includes/form_handlers/team_handler.php';
    require 'includes/form_handlers/project_handler.php';

    // if (isset($_SESSION['error'])) {
    //     $error_message = "*Name must contain atleast 5 characters<br>*Use different email";
    // }
        
    // else{
    //     $error_message = "";
    // }


?>



<!DOCTYPE html>
<html style="background:#dd6785;"lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registeration form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="icon" href="assets/images/backgrounds/eshwar_favicon.png">
    </head>
    <body style="background:#dd6785;">
            
            <div class="container" id="team_container">
                <div class="row">
                    <div class='column col-12 col-lg-12'>
                        <img class="img-fluid" id="srilogo"src="https://icaccs.sece.ac.in/wp-content/uploads/2019/12/logo.png" alt="">
                    </div>
                </div>
                <br>
                    <h2 id="register" style='color:#5f2780;'><?php echo $display; ?></h2>
                    <!-- <h5 id="error_message"><?php echo $error_message; ?></h5> -->
                    <hr style="color:black;">

                    <div class="container" id="team_div">

                        <div class="row" id="leader_mentor">
                            <div class="column col-md-12 col-xl-6 col-12" id="leader">
                                <br>
                                
                                <form action="form.php" method="POST">
                                <p class="form_p">Enter the details of <span style='font-weight:600;'>Leader</span><p>
                                <input type="text" class="form_inputs" name="leader_name" placeholder="Name" value="<?php 
                                    if(isset($_SESSION['leader_name'])){
                                        echo $_SESSION['leader_name'];
                                    }
                                ?>">
                                <br>
                                <input type="email" class="form_inputs" name="leader_email" placeholder="Email" value="<?php 
                                    if(isset($_SESSION['leader_email'])){
                                        echo $_SESSION['leader_email'];
                                    }
                                ?>">
                                <br>
                                <input type="tel" class="form_inputs" name="leader_phone" placeholder="Mobile number" value="<?php 
                                    if(isset($_SESSION['leader_phone'])){
                                        echo $_SESSION['leader_phone'];
                                    }
                                ?>">
                                <br>
                                <input type="text"  class="form_inputs"name="leader_org" placeholder="Organization" value="<?php 
                                    if(isset($_SESSION['leader_org'])){
                                        echo $_SESSION['leader_org'];
                                    }
                                ?>">
                                <br>
                                <div class='row' id="leader_row">
                                    <div class="column col-6 col-lg-6 col-sm-6 year">
                                        <select class="form-select form-select-md year_input" name="leader_year" aria-label="Default select example">
                                            <option selected>Year</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                
                                    <div class="column col-6 col-lg-6 col-sm-6">
                                        <input type="text" class="depart" name="leader_dep" placeholder="Department" value="<?php 
                                            if(isset($_SESSION['leader_dep'])){
                                                echo $_SESSION['leader_dep'];
                                            }
                                        ?>">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="column col-md-12 col-xl-6 col-12" id="mentor">
                                <br>
                                <p class="form_p">Enter the details of <span style='font-weight:600;'>Mentor</span><p>
                                <input type="text" name="mentor_name"class="form_inputs" placeholder="Name" value="<?php 
                                    if(isset($_SESSION['mentor_name'])){
                                        echo $_SESSION['mentor_name'];
                                    }
                                ?>">
                                <br>
                                <input type="email" name="mentor_email"class="form_inputs" placeholder="Email" value="<?php 
                                    if(isset($_SESSION['mentor_email'])){
                                        echo $_SESSION['mentor_email'];
                                    }
                                ?>">
                                
                                <br>
                                <input type="tel" name="mentor_phone"class="form_inputs" placeholder="Mobile number" value="<?php 
                                    if(isset($_SESSION['mentor_phone'])){
                                        echo $_SESSION['mentor_phone'];
                                    }
                                ?>">
                                <br>
                                <input type="text" name="mentor_org" class="form_inputs" placeholder="Organization" value="<?php 
                                    if(isset($_SESSION['mentor_org'])){
                                        echo $_SESSION['mentor_org'];
                                    }
                                ?>">
                                <div class='row' id="mentor_row">
                                    <div class="column col-6 col-lg-6 col-sm-6 year">
                                        <select class="form-select form-select-md year_input" name="mentor_des" aria-label="Default select example">
                                            <option selected>Designation</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Assistant Professor">Assistant Professor</option>
                                            <option value="Associative Professor">Associative Professor</option>
                                        </select>
                                    </div>
                                    <div class="column col-6 col-lg-6 col-sm-6">
                                        <input type="text" name="mentor_dep" class="depart" placeholder="Department" value="<?php 
                                            if(isset($_SESSION['mentor_dep'])){
                                                echo $_SESSION['mentor_dep'];
                                            }?>">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row" id="first_second">
                            <div class="column col-md-12 col-12 col-xl-4" id="first_member">
                                <br>
                                <p class="form_p">Enter the details of <span style='font-weight:600;'>Member 1</span><p>
                                <form action="form.php" method="POST">
                                <input type="text" name="first_name" class="form_inputs"placeholder="Name" value="<?php 
                                    if(isset($_SESSION['first_name'])){
                                        echo $_SESSION['first_name'];
                                    }
                                ?>">
                                <br>
                                <input type="email" name="first_email" class="form_inputs" placeholder="Email" value="<?php 
                                    if(isset($_SESSION['first_email'])){
                                        echo $_SESSION['first_email'];
                                    }
                                ?>">
                                <br>
                                <input type="tel" name="first_phone" class="form_inputs" placeholder="Mobile number" value="<?php 
                                    if(isset($_SESSION['first_phone'])){
                                        echo $_SESSION['first_phone'];
                                    }
                                ?>">
                                <br>
                                <input type="text" name="first_org" class="form_inputs" placeholder="Organization" value="<?php 
                                    if(isset($_SESSION['first_org'])){
                                        echo $_SESSION['first_org'];
                                    }
                                ?>">
                                <br>
                                <div class='row'>
                                    <div class="column col-6 col-lg-6 col-sm-6 year">
                                        <select class="form-select form-select-md year_input" name="first_year" aria-label="Default select example">
                                            <option selected>Year</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                
                                    <div class="column col-6 col-lg-6 col-sm-6">
                                        <input type="text" class="depart" name="first_dep" placeholder="Department" value="<?php 
                                            if(isset($_SESSION['first_dep'])){
                                                echo $_SESSION['first_dep'];
                                            }
                                        ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="column col-md-12 col-12 col-xl-4" id="second_member">
                                <br>
                                <p class="form_p">Enter the details of <span style='font-weight:600;'>Member 2</span><p>
                                <input type="text" name="second_name"  class="form_inputs" placeholder="Name" value="<?php 
                                    if(isset($_SESSION['second_name'])){
                                        echo $_SESSION['second_name'];
                                    }
                                ?>">
                                <br>
                                <input type="email" name="second_email" class="form_inputs" placeholder="Email" value="<?php 
                                    if(isset($_SESSION['second_email'])){
                                        echo $_SESSION['second_email'];
                                    }
                                ?>">
                                
                                <br>
                                <input type="tel" name="second_phone"class="form_inputs" placeholder="Mobile number" value="<?php 
                                    if(isset($_SESSION['second_phone'])){
                                        echo $_SESSION['second_phone'];
                                    }
                                ?>">
                                <br>
                                <input type="text" name="second_org" class="form_inputs" placeholder="Organization" value="<?php 
                                    if(isset($_SESSION['second_org'])){
                                        echo $_SESSION['second_org'];
                                    }
                                ?>">
                                <br>
                                <div class='row'>
                                    <div class="column col-6 col-lg-6 col-sm-6 year">
                                        <select class="form-select form-select-md year_input" name="second_year" aria-label="Default select example">
                                            <option selected>Year</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                
                                    <div class="column col-6 col-lg-6 col-sm-6">
                                        <input type="text" name="second_dep" class="depart" placeholder="Department" value="<?php 
                                            if(isset($_SESSION['second_dep'])){
                                                echo $_SESSION['second_dep'];
                                            }
                                        ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="column col-md-12 col-12 col-xl-4" id="third_member">
                                <br>
                                <p class="form_p">Enter the details of <span style='font-weight:600;'>Member 3</span><p>
                                <form action="form.php" method="POST">
                                <input type="text" name="third_name" class="form_inputs" placeholder="Name" value="<?php 
                                    if(isset($_SESSION['third_name'])){
                                        echo $_SESSION['third_name'];
                                    }
                                ?>">
                                <br>
                                <input type="email" name="third_email" class="form_inputs" placeholder="Email" value="<?php 
                                    if(isset($_SESSION['third_email'])){
                                        echo $_SESSION['third_email'];
                                    }
                                ?>">
                                <br>
                                <input type="tel" name="third_phone" class="form_inputs" placeholder="Mobile number" value="<?php 
                                    if(isset($_SESSION['third_phone'])){
                                        echo $_SESSION['third_phone'];
                                    }
                                ?>">
                                <br>
                                <input type="text" name="third_org" class="form_inputs" placeholder="Organization" value="<?php 
                                    if(isset($_SESSION['third_org'])){
                                        echo $_SESSION['third_org'];
                                    }
                                ?>">
                                <br>
                                <div class='row'>
                                    <div class="column col-6 col-lg-6 col-sm-6 year">
                                        <select class="form-select form-select-md year_input" name="third_year" aria-label="Default select example">
                                            <option selected>Year</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                
                                    <div class="column col-6 col-lg-6 col-sm-6">
                                        <input type="text" name="third_dep" class="depart" placeholder="Department" value="<?php 
                                            if(isset($_SESSION['third_dep'])){
                                                echo $_SESSION['third_dep'];
                                            }
                                        ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row" id="third_fourth">
                            <div class="column col-md-6 col-sm-12" id="third_member">
                                <br>
                                <p class="form_p">Enter the details of <span style='font-weight:600;'>Member 3</span><p>
                                <form action="form.php" method="POST">
                                <input type="text" name="third_name" class="form_inputs" placeholder="Name" value="<?php 
                                    if(isset($_SESSION['third_name'])){
                                        echo $_SESSION['third_name'];
                                    }
                                ?>">
                                <br>
                                <input type="email" name="third_email" class="form_inputs" placeholder="Email" value="<?php 
                                    if(isset($_SESSION['third_email'])){
                                        echo $_SESSION['third_email'];
                                    }
                                ?>">
                                <br>
                                <input type="tel" name="third_phone" class="form_inputs" placeholder="Mobile number" value="<?php 
                                    if(isset($_SESSION['third_phone'])){
                                        echo $_SESSION['third_phone'];
                                    }
                                ?>">
                                <br>
                                <input type="text" name="third_org" class="form_inputs" placeholder="Organization" value="<?php 
                                    if(isset($_SESSION['third_org'])){
                                        echo $_SESSION['third_org'];
                                    }
                                ?>">
                                <br>
                                <div class='row'>
                                    <div class="column col-6 col-lg-6 col-sm-6 year">
                                        <select class="form-select form-select-md year_input" name="third_year" aria-label="Default select example">
                                            <option selected>Year</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                
                                    <div class="column col-6 col-lg-6 col-sm-6">
                                        <input type="text" name="third_dep" class="depart" placeholder="Department" value="<?php 
                                            if(isset($_SESSION['third_dep'])){
                                                echo $_SESSION['third_dep'];
                                            }
                                        ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="column col-md-6 col-sm-12" id="fourth_member">
                                <br>
                                <p class="form_p">Enter the details of member 4<p>
                                <input type="text" class="form_inputs" name="fourth_name" placeholder="Name" value="<?php 
                                    if(isset($_SESSION['fourth_name'])){
                                        echo $_SESSION['fourth_name'];
                                    }
                                ?>">
                                
                                <br>
                                <input type="email" class="form_inputs" name="fourth_email" placeholder="Email" value="<?php 
                                    if(isset($_SESSION['fourth_email'])){
                                        echo $_SESSION['fourth_email'];
                                    }
                                ?>">
                                <br>
                                
                                <input type="tel" class="form_inputs" name="fourth_phone" placeholder="Mobile number" value="<?php 
                                    if(isset($_SESSION['fourth_phone'])){
                                        echo $_SESSION['fourth_phone'];
                                    }
                                ?>">
                                <br>
                                <input type="text" class="form_inputs" name="fourth_org" placeholder="Organization" value="<?php 
                                    if(isset($_SESSION['fourth_org'])){
                                        echo $_SESSION['fourth_org'];
                                    }
                                ?>">
                                
                                <div class='row'>
                                    <div class="column col-6 col-lg-6 col-sm-6 year">
                                        <select class="form-select form-select-md year_input" name="fourth_year" aria-label="Default select example">
                                            <option selected>Year</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                
                                    <div class="column col-6 col-lg-6 col-sm-6">
                                        <input type="text" name="fourth_dep" class="depart" placeholder="Department" value="<?php 
                                            if(isset($_SESSION['fourth_dep'])){
                                                echo $_SESSION['fourth_dep'];
                                            }
                                        ?>">
                                    </div>
                                </div>
                                <br>
                                
                            </div>
                        </div>
                             -->
                            <div class="row">
                                <div class="column col-sm-12 col-md-12 col-12 col-lg-12">
                                    <a href="form_submit.php" class="ppa_a"><input <?php echo $closed; ?> type="submit" name="member_submit" id="ppa" value="Submit "></a>
                                    <a href="index.php" class="ppa_a"><input dsiabled type="submit" name="cancel_submit" id="ppa" value="Cancel "></a>

                                </div>
                                
                            </div>
                        </form>
                        <hr style="color:black;">
                        <br>
                        <p style="color:#5f2780;font-family=san-serif;font-size:1em">* One student cannot register for more than one team </p>
                        <!-- <p style="color:#5f2780;font-family=san-serif;font-size:1em">* Name must contain atleast 5 characters</p> -->
                        
                    </div>  

                </div>

            

    </body>
</html>