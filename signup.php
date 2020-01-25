<?php 
session_start();
$conn=mysqli_connect("localhost","root","","market")or die("connection not established");

if(isset($_POST['submit'])){
$userid=$_POST['userid'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$mpass=md5($pass);
if($cpass!=$pass){
echo "<script>alert('Confirm does not match');</script>";
echo "<script>window.location.href='./signup.html';</script>";
}
else{
$query1=" select * from signup where userid='$userid';";
$run1=mysqli_query($conn,$query1);
$no=mysqli_num_rows($run1);
if($no==0){
$query=" insert into signup(name,pass,userid,socialid) values ('$email','$mpass','$userid','$cpass');";
$run=mysqli_query($conn,$query);
echo "<script>alert('Signup Successful');</script>";
echo "<script>window.location.href='./login.html';</script>";
}else{
  echo "<script>alert('Username already exist');</script>";
echo "<script>window.location.href='./signup.html';</script>";
}
}

}

?>