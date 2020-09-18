<?php
$name=$_POST['yname'];
$email=$_POST['yemail'];
$sub=$_POST['subject'];
$masg=$_POST['message'];

address=mysqli_connect('localhost','root','','24012020');

echo("your details are<br>".$email." <br>  ". $phone."  <br>  ".$password);

$insert="INSERT INTO user_cred SET name='$name' ,email='$email' ,subject='$sub', Messages='$masg'";
$address->query($insert);

echo($name.$email.$sub.$masg);

?>