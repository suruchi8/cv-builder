<?php
require('connection.php');
$job_title='';
$organization='';
$location='';
$start_date='';
$end_date='';
$description='';
$cv_id='';


if(isset($_POST['submit'])){
    $job_title=mysqli_real_escape_string($con,$_POST['job_title']);
    $organization=mysqli_real_escape_string($con,$_POST['organization']);
    $location=mysqli_real_escape_string($con,$_POST['location']);
    $start_date=mysqli_real_escape_string($con,$_POST['start_date']);
    $end_date=mysqli_real_escape_string($con,$_POST['end_date']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $cv_id=mysqli_real_escape_string($con,$_POST['cv_id']);

    $insert= "INSERT INTO experience(job_title,organization,location,start_date,end_date,description,cv_id) VALUES('$job_title','$organization','$location','$start_date','$end_date','$description','$cv_id')";

    mysqli_query($con,$insert);
}
?>