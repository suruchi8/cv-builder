<?php
require('connection.php');
$cv_id='';
$firstname='';
$lastname='';
$image='';
$designation='';
$address='';
$city='';
$email='';
$phone='';
$summary='';


if(isset($_POST['submit'])){
    $cv_id=mysqli_real_escape_string($con,$_POST['cv_id']);
    $firstname=mysqli_real_escape_string($con,$_POST['firstname']);
    $lastname=mysqli_real_escape_string($con,$_POST['lastname']);
    $image=mysqli_real_escape_string($con,$_POST['image']);
    $designation=mysqli_real_escape_string($con,$_POST['designation']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $summary=mysqli_real_escape_string($con,$_POST['summary']);
   
    $insert = "INSERT INTO about(firstname,lastname,image,designation,address,city email,phone,summary,cv_id) VALUES('$firstname','$lastname','$image','$designation','$address','$city','$email','$phone','$summary')";
    mysqli_query($con, $insert);
   
}

?>