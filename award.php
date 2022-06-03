<?php
require('connection.php');

$award_title='';
$organization='';
$location='';
$received_year='';
$description='';
$cv_id='';


if(isset($_POST['submit'])){
    $award_title=mysqli_real_escape_string($con,$_POST['award_title']);
    $organization=mysqli_real_escape_string($con,$_POST['organization']);
    $location=mysqli_real_escape_string($con,$_POST['location']);
    $received_year=mysqli_real_escape_string($con,$_POST['received_year']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $cv_id=mysqli_real_escape_string($con,$_POST['cv_id']);
}

?>