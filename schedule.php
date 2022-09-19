<?php 
    require "config/config.php";
    require 'includes/form_handlers/team_handler.php';
    require 'includes/form_handlers/project_handler.php';
?>



<!DOCTYPE html>
<html style="background:#dd6785;"lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Schedule</title>
        <link rel="icon" href="assets/images/backgrounds/eshwar_favicon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body style="background:#dd6785;">

        <div class="container" style='padding:30px;border-radius:20px;' id="team_container">
        
                <div class="row">
                    <div class='column col-12 col-lg-12'>
                        <img class="img-fluid" id="srilogo"src="https://icaccs.sece.ac.in/wp-content/uploads/2019/12/logo.png" alt="">
                        <a href="index.php" style='float:right;'><button id="click2" style='padding:10px;'><span><i class="fa fa-arrow-left fa-lg"></i></span>Back</button></a>

                    </div>
                </div>
                    <center>
                        <h1 style='font-size:2em;color:#5f2780;'class="hackathon_title">SCHEDULE</h1>
                    </center>

                    <div style='border: 1px solid grey;padding:2%;border-radius:10px;'>
                    
                        <div class='row' id='table_heading' style='margin-top:20px;'>
                            <div class='column col-2 col-lg-2' style='text-align:center;'>
                                <p style='font-weight:700;font-size:1.3em;'>S.No</p>
                            </div>
                            <div class='column col-4 col-lg-4' style='text-align:center;'>
                                <p style='font-weight:700;font-size:1.3em;'>Tentative Date</p>
                            </div>
                            <div class='column col-6 col-lg-6' style='text-align:center;'>
                                <p style='font-weight:700;font-size:1.3em;'>Schedule of Events</p>
                                
                            </div>
                        </div>

                        <hr>

                        <div class='row' id='table_col-1' style='margin-top:20px;'>
                            <div class='column col-2 col-lg-2' style='text-align:center;'>
                                1
                            </div>
                            <div class='column col-4 col-lg-4' style='text-align:center;'>
                                13-9-2022
                            </div>
                            <div class='column col-6 col-lg-6' style='text-align:center;'>
                                Registration opens
                            </div>
                        </div>

                        <hr>

                        <div class='row' id='table_col-1' style='margin-top:20px;'>
                            <div class='column col-2 col-lg-2' style='text-align:center;'>
                                2
                            </div>
                            <div class='column col-4 col-lg-4' style='text-align:center;'>
                                6-10-2022
                            </div>
                            <div class='column col-6 col-lg-6' style='text-align:center;'>
                                Phase 1 - Submission of Abstracts & Registration closes (12PM)
                            </div>
                        </div>
                        <hr>

                        <div class='row' id='table_col-1' style='margin-top:20px;'>
                            <div class='column col-2 col-lg-2' style='text-align:center;'>
                                3
                            </div>
                            <div class='column col-4 col-lg-4' style='text-align:center;'>
                                8-10-2022
                            </div>
                            <div class='column col-6 col-lg-6' style='text-align:center;'>
                                Announcement of Phase 1 results
                            </div>
                        </div>

                        <hr>

                        <div class='row' id='table_col-1' style='margin-top:20px;'>
                            <div class='column col-2 col-lg-2' style='text-align:center;'>
                                4
                            </div>
                            <div class='column col-4 col-lg-4' style='text-align:center;'>
                                10-10-2022
                            </div>
                            <div class='column col-6 col-lg-6' style='text-align:center;'>
                                Phase 2 - Online Presentation by shortlisted participants & Evaluation by Juries
                            </div>
                        </div>
                        <hr>
                        <div class='row' id='table_col-1' style='margin-top:20px;'>
                            <div class='column col-2 col-lg-2' style='text-align:center;'>
                                5
                            </div>
                            <div class='column col-4 col-lg-4' style='text-align:center;'>
                                14-10-2022
                            </div>
                            <div class='column col-6 col-lg-6' style='text-align:center;'>
                                Announcement of Phase - 2 results    
                            </div>
                        </div>
                        <hr>
                        <div class='row' id='table_col-1' style='margin-top:20px;'>
                            <div class='column col-2 col-lg-2' style='text-align:center;'>
                                6
                            </div>
                            <div class='column col-4 col-lg-4' style='text-align:center;'>
                                Nov 4th & 5th 2022
                            </div>
                            <div class='column col-6 col-lg-6' style='text-align:center;'>
                                Phase 3 - 36 hour Hackathon
                            </div>
                        </div>
                        <br>
                    </div>
         </div>

    
        
    </body>
</html>