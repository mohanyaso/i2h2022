<?php 
    require "config/config.php";
    require 'includes/form_handlers/team_handler.php';
    require 'includes/handlers/problem_statements_insert_handler.php';

?>



<!DOCTYPE html>
<html style="background:#dd6785;"lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Problem Statement</title>
        <link rel="icon" href="assets/images/backgrounds/eshwar_favicon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <link rel="stylesheet" type="text/css" href="assets/css/problem_statements_styles.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body style="background:#dd6785;">
    
            <div class='container' id='statement_container'>
            <!-- <a href="index.php"><button id="click2" style='margin: 3% 0 0 3%;'><span><i class="fa fa-arrow-left fa-lg"></i></span>HOME</button></a> -->
            <div class="row" style='padding:3%;'>
                    <div class='column col-12 col-lg-12'>
                        <img class="img-fluid" id="srilogo"src="https://icaccs.sece.ac.in/wp-content/uploads/2019/12/logo.png" alt="">
                        <a href="index.php" style='float:right;'><button id="click2" style='padding:10px;'><span><i class="fa fa-arrow-left fa-lg"></i></span>Back</button></a>

                    </div>
                </div>
                <div class="container-fluid" id="ps_wrapper">
                <h2 style='padding-bottom:5px;border-bottom: 1px solid grey;' id="problem_st">Problem Statements</h2>
                <!-- <hr> -->
                <br>

                <div class="container" id="ps_container">
                        <div id="problem_statements">
                            <form action='problem_statements.php' method='POST'>
                                <div class="row">
                                    <div style='padding:0;'class="column col-8 col-lg-10" id="project_se">
                                        <select style='border:2px solid #5f2780;' class='form-select form-select-md' id='ps_select' name='project_theme_selected' aria-label='Default select example'>
                                            <option value='<?php echo $_SESSION['theme_s_for_ps2']; ?>' selected ><?php echo $_SESSION['theme_s_for_ps2']; ?></option>
                                            <option value='Healthcare'>Healthcare</option>
                                            <option value='Agriculture'>Agriculture</option>
                                            <option value='Environment'>Environment</option>
                                        </select>
                                    </div>
                                    <div style='padding:0;' class="column col-lg-2 col-4">
                                        <input type="submit" class="ps_search_btn" name="problem_submit" value="Search">
                                    </div>
                                </div>
                            </form>
                        </div>   
                </div>

                <div class='container-fluid' >
                    <?php if(!$problem_statement_to_display == ''){echo $str;} ?>
                </div>
            
                </div>
            </div>
            
    </body>
</html>