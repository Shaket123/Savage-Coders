
<?php 
session_start();
$conn=mysqli_connect("localhost","root","","market")or die("connection not established");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="ref.css">
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
<center>
	<div class="main">
<br><br><br><h3> Your referal code is <strong><u><?php echo $_SESSION['userid']; ?></u></strong></h3><br><br>

</div>
<p><u><b> Note:</b></u> Refer your code to friend and get paid contents free for 1 week </p>
</center>
</body>
</html>