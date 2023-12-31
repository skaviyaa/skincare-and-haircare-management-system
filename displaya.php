
<html>
<head>
<title>Displaya</title>
<style>
body{
	background:linear-gradient(rgba(0,0,0,0.4),#1a0a0a),url(images/pic-3.png);
	background-size:cover;
}
table{
width:80%;
box-shadow:--1px 12px 12px -6px rgba(0,0,0,0.5);
}
table,td,th{
margin-top:5%;
margin-left:10%;
padding:10px;
border:1px solid lightgray;
border-collapse:collapse;
text-align:center;
}
td{
font-size:8px;
color:white;
font-family:Arial;
}
th{
line-height:50px;
font-size:10px;
color:white;
font-family:cursive;
font-weight:bold;
}
th,p{
	font-size:15px;
	color:white;
	
}
a{
	margin-left:600px;
	text-align:center;
	color:white;
	font-weight:bold;
	}
</style>
</head>
<body>
<table class="table">
<thead>
<tr>
<th><p>Name</th>
<th>Email</th>
<th>Service</th>
<th>Date & Time</th>
<th> Contact Number</p></th>
</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","project1");
$sql="select *from appointment";
$result=mysqli_query($con,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
$name=$row['name'];
$email=$row['email'];
$service=$row['service'];
$datetime=$row['datetime'];
$number=$row['number'];
echo'<tr>
<th>'.$name.'</th>
<th>'.$email.'</th>
<th>'.$service.'</th>
<th>'.$datetime.'</th>
<th>'.$number.'</th>
</tr>';
}
}
?>
<a href="home.html">Back To Home</a>
</body>

</html>