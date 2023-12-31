<?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select *from adminlogin where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if($result){
$num=mysqli_num_rows($result);
if($num>0){
$login=1;
header('location:adminp.html');
}else{
echo "<script>alert('Invalid UserName or Password')</script>";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="log.css">
<title>LogIn</title>
</head>
<body>
<div class="log">
<div class="form-box">
<h2>WELCOME</h2>
<div class="button-box">
<div id="btn"></div>
<button type="button" class="toggle-btn" onclick="login()">Admin LogIn</button>
</div>

<form id="login" class="input-group" method="post">
<input type="text" name="username" class="input-field" placeholder="username" required>
<input type="password" name="password" class="input-field" placeholder="Enter password" required>
<button type="submit" name="submit" class="submit-btn">LogIn</button>
</form>
<script>
var x=document.getElementById("login");
var y=document.getElementById("register");
var z=document.getElementById("btn");
function login(){
x.style.left="50px";
y.style.left="450px";
z.style.left="0";
}
</script>
</body>
</html>


