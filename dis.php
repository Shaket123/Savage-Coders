<?php 
session_start();
$conn=mysqli_connect("localhost","root","","market")or die("connection not established");
?>
<html>
<head>
<title>Home</title>
<link href="style.css" type="text/css" rel="stylesheet" >
<link href="homestyle.css" type="text/css" rel="stylesheet" >

</head>
<body>
<div id="navbar">

  <a href="home.html">Home</a>
  <a href="referal.php">Referal Code</a>
  <a href="#about">About</a>
  <a href="contact.html">Contact</a>
  <a href="login.html">Sign Out</a>
</div>
<br>
<br>
<br><br><center>
<?php 
$select="select * from prod";
$run=mysqli_query($conn,$select);
while ($row=mysqli_fetch_array($run)){

		?>
	<table class="table1" >
		<tbody><tr>
			<td>App Name :</td>
			<td><?php echo $row['pname']; ?></td>
			
		</tr>
			<tr>
			<td>Versions No. :</td>
			<td><?php echo $row['pver']; ?></td>
		
		</tr>
		<tr>
			<td>Basic function of App:</td>
			<td><?php echo $row['pmoto']; ?></td>
		</tr>
		<tr><td>Manufacturer Name :</td>
			<td><?php echo $row['mname']; ?></td>
		</tr>
		<tr>
			<td>Type :</td>
			<td><?php echo $row['ptype']; ?></td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><?php echo $row['pdesc']; ?></td>
		</tr>

</tbody></table>
<br>
<table border="red" style="text-align: center;">
	<tr><td bgcolor="yellow">Username</td ><td bgcolor="yellow"> Ratings</td><td bgcolor="yellow">Review</td></tr>
<?php
$i=0;
$select="select * from review where pname='".$row['pname'].$row['pver']."'";
$run1=mysqli_query($conn,$select);
while ($rows=mysqli_fetch_array($run1)){
?>
<tr><td><?php echo $rows['userid']; ?></td><td><?php echo $rows['rate']; ?></td><td><?php echo $rows['prev']; ?></td></tr>
<?php
$i++;
if($i==3){
	break;
 } 
} ?>
</table>
<br>
<?php } ?>
</center>
</body>

</html>