<?php
$con = mysqli_connect("localhost","root","","hackathon");
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = "SELECT id FROM files";
            $result = mysqli_query($con, $sql);
            $num = mysqli_fetch_array($result);
            if ($num > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO files(filesname, created) VALUES('$filename', '$created')";
            mysqli_query($con, $sql);
            $_SESSION['display_result'] = 'yes';
            header("Location: result.php");
        }
        else
        {
            header("Location: result.php");
        }
    }
    else
        header("Location: filesupload.php");
}
?>