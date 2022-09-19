<?php
require "config/config.php";
require "upload.php";

// fetch files
$sql = "SELECT filesname FROM files";
$result = mysqli_query($con, $sql);

$test = mysqli_query($con,"SELECT * from files");
$num = mysqli_num_rows($test);
$display = "";

if($num == 0) {
    $display .= 'Results will be out soon';
}
?>


<!DOCTYPE html>
<html style='background-color: #dd6785;'>
<head>
    <link rel="icon" href="assets/images/backgrounds/eshwar_favicon.png">
    <title>Results</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body style='height:100%;'>
<br/>







    <div  id='second' style='padding: 50px;margin-top: 10%;background: white;width: fit-content;margin: 10% auto;border-radius: 20px;' class="container">
        
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <?php if($display == ""){ ?>
                <table style='margin:0 auto;' class="table table-striped table-hover">
                    <thead style='margin-bottom:10px;'>
                        <tr>
                            <th style='font-size:1.2em;padding-left:20px;'>S.no</th>
                            <th style='font-size:1.2em;padding-left:20px;'>File Name</th>
                            <th style='font-size:1.2em;padding-left:20px;'>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td style='font-size:1.2em;padding-left:20px;'><?php echo $i++; ?></td>
                        <td style='font-size:1.2em;padding-left:20px;'><?php echo $row['filesname']; ?></td>
                        <td style='font-size:1.2em;padding-left:20px;'><a href="uploads/<?php echo $row['filesname']; ?>" download>Download</td>
                    </tr>
                    <?php } 
                    }
                    else{
                    ?><h1 style='color:#4b3666;font-family:san-serif'>Results will be out soon!</h1>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>