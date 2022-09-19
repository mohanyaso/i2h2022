<?php 
    require "config/config.php";
    require "includes/form_handlers/register_handler.php";
    require "includes/form_handlers/login_handler.php";
    require "includes/form_handlers/admin_handler.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
    <link rel="stylesheet" type="text/css" href="styling.css">
    <link rel="icon" href="assets/images/backgrounds/eshwar_favicon.png">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <script src="assets/js/register.js"></script>
</head>
<body>
    
    <div style='background-color:#dd6785;' class="container c1">
        <div  style='background-color:white;border-radius:50px;padding:50px 20px 50px 20px;' class="login_box"> 
            <div id="first">
                <form action="admin_login.php" method="POST">
                    <input type="text" class='ali' name="admin_name" placeholder="Username" value="<?php 
                        if(isset($_SESSION['admin_name'])){
                            echo $_SESSION['admin_name'];
                        }
                    ?>" required>
                    <br>
                    <input type="password" class='ali' name="admin_password" placeholder="Password" value="" required>
                    <br>
                    <?php if(in_array("Name or Password was incorrect<br>",$error_array)) echo "Email or Password was incorrect<br>"; ?>
                    <br>
                    <input  style='background-color:#5f2780;color:white;width:auto'class="log_btn" type="submit" name="admin_login_button" value="Login">
                    <br>
                </form>
            </div>
        </div>
    </div>


</body>
</html>