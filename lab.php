<?php

echo "<h1>Your Information</h1>";


$first=$_POST['first'];
$last=$_POST['last'];
$dob=$_POST['DOB'];
$gender=$_POST['gender'];
$email=$_POST['E-mail'];
$city=$_POST['city'];
$faculty=$_POST['Faculty'];





echo "Your First Name: " .$first. "<br>";
echo "Your Last Name: " .$last. "<br>";
echo "Your Email Address: " .$email. "<br>";
echo "Your Birthday: " .$dob. "<br>";
echo "Your Gender: " .$gender. "<br>";
echo "Your City: " .$city. "<br>";
echo "Your Faculty: " .$faculty. "<br>";
//echo "Gender: ".($gender == 'M' ? 'Male':'Female')."<br>";
 






?>