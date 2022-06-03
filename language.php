<?php
require('connection.php');

$language_name='';
$label='';
$cv_id='';

if(isset($_POST['submit'])){
    $language_name=mysqli_real_escape_string($con,$_POST['language_name']);
    $label=mysqli_real_escape_string($con,$_POST['label']);
    $cv_id=mysqli_real_escape_string($con,$_POST['cv_id']);

    $insert="INSERT INTO language(language_name,label,cv_id)VALUES('$language_name','$label','$cv_id')";
    mysqli_query($con,$insert);
}
?>