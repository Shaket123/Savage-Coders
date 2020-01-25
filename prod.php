<?php 
session_start();
$conn=mysqli_connect("localhost","root","","market")or die("connection not established");

if(isset($_POST['submit'])){
echo "Hi";
$query=" insert into prod values ('".$_POST['pname']."' ,'".$_POST['pver']."' ,'".$_POST['pmoto']."' ,'".$_POST['mname']."' ,'".$_POST['ptype']."' ,'".$_POST['pdesc']."');";
$run=mysqli_query($conn,$query);
if(isset($run)){
echo "<script>alert('Successful');</script>";
echo "<script>window.location.href='./home.html';</script>";
}else{
echo "<script>alert('Try again something went wrong ');</script>";
echo "<script>window.location.href='./addproduct.html';</script>";
}
}

?>