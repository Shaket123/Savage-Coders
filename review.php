<?php 
session_start();
$conn=mysqli_connect("localhost","root","","market")or die("connection not established");
?>
<html>
<head>
  <link rel="stylesheet" href="loginstyle.css">
  <title>Review</title>
</head>

<body>
    <div id="navbar"> 
        <a href="home.html">Home</a>
        <a href="referal.php">Referal Code</a>
        <a href="#about">About</a>
        <a href="contact.html">Contact</a>
          <a href="login.html">Sign Out</a>
      </div>


  <div class="main">
    <p class="sign" align="center">Review</p>
    <form class="form1" action="review.php" method="POST">
      <select class="un "  name="pname">
        <?php 
$select="select * from prod";
$run=mysqli_query($conn,$select);
while ($row=mysqli_fetch_array($run)){
?>
<option value="<?php echo$row['pname'].$row['pver'];?>"><?php echo$row['pname'].$row['pver'];?></option>
<?php } ?>
      </select><br>
<div align="center">
      <input type="radio" name="rate" value="1">1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="radio" name="rate" value="2">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="rate" value="3">3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="radio" name="rate" value="4">4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="rate" value="5">5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <br>
      <!-- <input class="pass" type="text" align="center" placeholder="Review" name="pass"> -->
      <textarea class="pass"  name="prev" required rows="5" placeholder="Review"></textarea>
      <input class="submit" type="submit" align="center" placeholder="Submit" name="submit">
            
                
    </div>
</form></div>
<?php 
if(isset($_POST['submit'])){
$query=" insert into review values ('". $_SESSION['userid']."' ,'".$_POST['pname']."' ,'".$_POST['prev']."' ,'".$_POST['rate']."');";
$run=mysqli_query($conn,$query);

if(isset($run)){
echo "<script>alert('Successful');</script>";
echo "<script>window.location.href='./home.html';</script>";
}else{
echo "<script>alert('Try again something went wrong ');</script>";
echo "<script>window.location.href='./review.php';</script>";
}

}

?>     
</body>
</html>