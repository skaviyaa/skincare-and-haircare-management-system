<?php
$db=mysqli_connect("localhost","root","","project1");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$service=$_POST['service'];
$datetime=$_POST['datetime'];
$number=$_POST['number'];
$sql="insert into appointment(name,email,service,datetime,number)values('$name','$email','$service','$datetime',$number)";
$result=mysqli_query($db,$sql);
if($result){
 header("Location:suc.html");
}
else{
die(mysqli_error($db));
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="sstyle.css">
<title>picing</title>
</head>
<body>
<header>
<nav>
<ul>
<li><a href="home.html">HOME</a></li>
<li><a href="">OUR SERVICE</a>
<ul class="service">
<li><a href="haircare.html">Haircare</a></li>
<li><a href="skincare.html">Skincare</a></li>
</ul>
</li>
<li><a href="aboutus.html">ABOUT</a></li>
<li><a href="pricing.php">PRICING</a></li>

<li><a href="alog.php">ADMIN</a></li>
</ul>
</nav>
<div id="banner">
<img src="images/logo.png" class="logo">
<div class="banner-text">

<h1 class="title">Services-pricing</h1>
<hr>
</div>
</div>
</header>
<section>
<table>
<tr>
<th><p>Sno</th>
<th>Service Name</th>
<th>Pricing for Men</th>
<th>Pricing for Women</th></p>
</tr>

<tr>
<td>1</td>
<td>Hair cut</td>
<td>250</td>
<td>500</td>
</tr>
<tr>
<td>2</td>
<td>Beard trim / shave</td>
<td>120</td>
<td>--</td>
</tr>
<tr>
<td>3</td>
<td>Hair colour</td>
<td>1000</td>
<td>1500</td>
</tr>
<tr>
<td>4</td>
<td>Head Massage</td>
<td>800</td>
<td>1050</td>
</tr>

<tr>
<td>5</td>
<td>Hair Straightening or Smoothening</td>
<td>4000</td>
<td>4550</td>
</tr>
<tr>
<td>6</td>
<td>Hair Extension</td>
<td>--</td>
<td>5000</td>
</tr>
<tr>
<td>7</td>
<td>Skin Facial</td>
<td>1200</td>
<td>1500</td>
</tr>
<tr>
<td>8</td>
<td>Detan Face</td>
<td>1500</td>
<td>2500</td>
</tr>
<tr>
<td>9</td>
<td>Under Eye treatment</td>
<td>700</td>
<td>700</td>
</tr>
<td>10</td>
<td>Bridal Makeup</td>
<td>--</td>
<td>10000</td>
</tr>
<td>11</td>
<td>Mehandi Design</td>
<td>--</td>
<td>3000</td>
</tr>
<td>12</td>
<td>Eyebrow Threading</td>
<td>600</td>
<td>600</td>
</tr>
</table>
</section>
<section>
<div class="form">
<h1><center>APPOINTMENT</center></h1>
<form method="post" action="#">
<input type="text" name="name" placeholder="NAME" required/>
<input type="email" name="email" placeholder="EMAIL" required/>
<input list="service" name="service" placeholder="SERVICES" required/>
<datalist id="service">
<option value="haircut"/>
<option value="Beard trim / shave"/>
<option value="Hair colour"/>
<option value="Head Massage"/>
<option value="Hair Straightening or Smoothening"/>
<option value="Hair Extension"/>
<option value="Skin Facial"/>
<option value="Detan Face"/>
<option value="Under Eye treatment"/>
<option value="Mehandi design"/>
<option value="Bridal Makeup"/>
<option value="EyeBrow Threading"/>



</datalist>
<input type="datetime-local" name="datetime" placeholder="DATE&TIME" required/>
<input type="text" name="number" placeholder="NUMBER" required/>
<input type="submit" class="btn" name="submit" value="MAKE APPOINTMENT">

</div>
</section>
</body>
</html>

