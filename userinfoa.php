<?php

$connection =  mysqli_connect('localhost','root');

mysqli_select_db($connection,"reviews");

$Name = $_POST['Name'];
$email = $_POST['email'];
$Comment= $_POST['Comment'];

$query = "INSERT INTO `Commments`(`Name`,`email`,`Comment`) VALUES ('$Name','$email','$Comment') ";

mysqli_query($connection,$query);

echo "MESSAGE HAS BEEN SENT TO BloomInBowl";

?>