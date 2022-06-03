<?php
require('connection.php');


$school='';
$degree='';
$city='';
$startdate='';
$graduate_date='';
$description='';
$cv_id='';

if(isset($_POST['submit'])){
    $school=mysqli_real_escape_string($con,$_POST['school']);
    $degree=mysqli_real_escape_string($con,$_POST['degree']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $startdate=mysqli_real_escape_string($con,$_POST['startdate']);
    $graduate_date=mysqli_real_escape_string($con,$_POST['graduate_date']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $cv_id=mysqli_real_escape_string($con,$_POST['cv_id']);

    $insert="INSERT INTO education(school,degree,city,startdate,graduate_date,description,cv_id) VALUES('$school','$degree','$city','$startdate','$graduate_date','$description','$cv_id')";
    mysqli_query($con,$insert);
}
?>