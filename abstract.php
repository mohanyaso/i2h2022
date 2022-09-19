<?php 
    require "config/config.php";
    require 'includes/form_handlers/team_handler.php';
    require 'includes/form_handlers/project_handler.php';

    if (isset($_SESSION['error'])) {
        $error_message = "*Name must contain atleast 5 characters<br>*Use different email";
    }
        
    else{
        $error_message = "";
    }
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/backgrounds/eshwar_favicon.png">
    <title>Registeration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/project.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid" id="wrapper">

    <div class="container" id="team_container">
        <h2 id="register">Project Abstract</h2>
        <!-- <h5 id="error_message"><?php echo $error_message; ?></h5> -->
        <hr>

        <div class="container-fluid" id="team_div">

            </div class=" container-fluid project_details_div">
            
                <div class="container-fluid project_details">
                    
                        <br>

                        <div class='row' style='margin-left: auto;margin-right: auto;width: 90%;'>
                            <form action="abstract.php" method="POST">
                                <div class='row'>
                                    <div style='padding:0;margin-top:5px;'class='col-12 col-lg-10'>   
                                        <select onchange='load_new_content()'class="form-select form-select-md" style='width:100%;padding:5px;' id="theme" name="project_theme" aria-label="Default select example" required>
                                            <option value='<?php echo $_SESSION['theme_s_for_ps']; ?>'selected><?php echo $_SESSION['theme_s_for_ps']; ?></option>
                                            <option value="Healthcare">Healthcare</option>
                                            <option value="Agriculture">Agriculture</option>
                                            <option value="Environment">Environment</option>
                                            <option value="Open innovation">Open innovation</option>
                                        </select>
                                    </div>
                                
                                    <div style='padding:0;height:100%;padding-top:0;' class='col-12 col-lg-2' style='margin-top:5px;'>
                                        <input style='width: 100%;background-color: #5f2780;color: white;padding: 5px;margin-top: 5px;height: 100%;' id="sub_btn" type="submit" name="theme_submit" value="Proceed">                  
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        
                        <br>
                    <form action="abstract.php" method="POST"> 
                        <?php echo $list_to_display; ?>
                        <input style='padding:10px;font-size:1.1em;width:90%;' type="text" name="project_name" id="project_title"  placeholder="Project Title" value = "<?php 
                                if(isset($_SESSION['project_name'])){
                                    echo $_SESSION['project_name'];
                                }
                            ?>" >
                        <br>
                        <textarea style='padding:10px;font-size:1.1em;width:90%;' name="project_des" id="project_des" placeholder="Abstract (include end to end solution) *200 words max" reqiured></textarea>
                        <br>
                        <div class='row'>

                            <div class='column col-lg-6 col-6' style='margin-left:auto'>
                                <input style='width:auto;float:right;padding: 0 5%;' id="sub_btn" type="submit" name="project_submit" value="Submit">
                            </div>

                            <div class='column col-lg-6 col-6'>
                            <input style='width:auto;float:left;background-color: #5f2780;color: white;padding: 0 5%;' id="sub_btn" type="submit" name="back_btn" value="Back">

                            </div>

                        </div>
                        <!-- <input style='width:25%;' id="sub_btn" type="submit" name="project_submit" value="Submit">
                        <br>
                        <a href="index.php"><input style='width:25%;background-color:#5f2780;color:white;' id="sub_btn2" name ="back_btn" value="Back"></a> -->
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

    

</body>
</html>