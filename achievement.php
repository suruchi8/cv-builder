<?php
require('connection.php');
$title='';
$description='';
$cv_id='';


if(isset($_POST['submit'])){
    $title=mysqli_real_escape_string($con,$_POST['title']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $cv_id=mysqli_real_escape_string($con,$_POST['cv_id']);

    $insert= "INSERT INTO achievement(title,description,cv_id) VALUES('$title','$description','$cv_id')";
    mysqli_query($con,$insert);
}

?>