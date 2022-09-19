<?php 
    require "config/config.php";
    require 'includes/form_handlers/selected_handler.php';
	require 'includes/form_handlers/team_handler.php';
    // require 'includes/form_handlers/project_handler.php';
    include("includes/classes/Post.php");    


    $th="";
    $_SESSION['selected_theme'] = 'Healthcare';
    if(isset($_POST['theme_submit'])){
        $th = $_POST['admin_project_theme'];
        $_SESSION['selected_theme'] = $th;
    }
    

    if (isset($_SESSION['admin_name'])) {
        $userLoggedIn = $_SESSION['admin_name'];
        $user_details_query = mysqli_query($con, "SELECT * FROM admin WHERE admin_name ='$userLoggedIn'");
        $user = mysqli_fetch_array($user_details_query);
        $name = ucfirst(strtolower($user['admin_name']));
    }
    else {
        header("Location: admin_login.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/backgrounds/eshwar_favicon.png">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body style=''>

    <div class="container-fluid" id="wrapper2">
        <a href="index.php"><button id="click2"><span><i class="fa fa-arrow-left fa-lg"></i></span>HOME</button></a>
        
        <div class="container" id="team_container">
            <div class="container" id="team_div2">
                <div id="select_id">
                    <form action='admin.php' method='POST'>
                        <div class="row">
                            <div class="column col-sm-8 col-lg-10" id="project_se">
                                <select class='form-select form-select-md' id='theme2' name='admin_project_theme' aria-label='Default select example'>
                                    <option selected ><?php 
                                            if(isset($_SESSION['selected_theme'])){
                                                echo $_SESSION['selected_theme'];
                                            }
                                        ?></option>
                                    <option value='Healthcare'>Healthcare</option>
                                    <option value='Agriculture'>Agriculture</option>
                                    <option value='Environment'>Environment</option>
                                    <option value='Manufacturing and Automation'>Open innovation</option>
                                </select>
                                <!-- <p>theme : <?php echo $_SESSION['selected_theme'];  ?></p> -->
                            </div>
                            <div class="column col-lg-2 col-sm-4">
                                <input type="submit" class="click4" name="theme_submit" value="Go">
                            </div>
                        </div>
                    </form>
                </div>   


                <?php
                    $post = new Post($con);
                    $post->loadPostsFriends($_SESSION['selected_theme']);
                ?>			
            </div>
        
        </div>
	</div>

    <?php
        // require "config/config.php";
        include "upload.php";

        // fetch files
        $sql = "SELECT filesname FROM files";
        $result = mysqli_query($con, $sql);
        ?>
    <div style='background-color:white;padding: 30px;border-radius: 10px;' class="container" id='team-container'>
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 well">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <legend style='text-align:center;font-size:1.2em;margin-bottom:20px;'>Select File  Upload:</legend>
                <div style='text-align:center;font-size:1.2em;    font-family: 'FontAwesome';' class="form-group">
                    <input type="file" name="file1" />
                </div>
                <div style='margin: 10px auto;text-align: center;'class="form-group">
                    <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
                </div>
                <?php if(isset($_GET['st'])) { ?>
                    <div class="alert alert-danger text-center">
                    <?php if ($_GET['st'] == 'success') {
                            echo "File Uploaded Successfully!";
                        }
                        else
                        {
                            echo 'Invalid File Extension!';
                        } ?>
                    </div>
                <?php } ?>
            </form>
            </div>
        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>