<?php
$con=mysqli_connect('localhost','root','','project1');
if($con){
echo "";
}else{
die(mysqli_error($con));
}
?>