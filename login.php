<?php 
session_start();
$conn=mysqli_connect("localhost","root","","market")or die("connection not established");

if(isset($_POST['submit'])){
$userid=$_POST['userid'];
 $_SESSION['userid'] = $userid;
$pass=$_POST['pass'];

$pass=md5($pass);
$query="select * from signup where userid='$userid'and pass='$pass' ";

$run=mysqli_query($conn,$query);
$no=mysqli_num_rows($run);
if($no!=0)
{

      echo "<script>alert('Login Successful !!!');</script>";
      echo "<script>window.location.href='./home.html';</script>";
}else{

      echo "<script>alert('Invalid Username or password');</script>";
       echo "<script>window.location.href='./login.html';</script>";
}

}

?>




