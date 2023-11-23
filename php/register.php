<?php 
$name = $_POST['Name'];
$username = $_POST['UserName'];
$password = $_POST['Password'];
$age = $_POST['Age'];
$dob = $_POST['Dob'];
$contact = $_POST['Contact'];
$con = mysqli_connect("localhost","root","","reg");
$sql = "INSERT INTO registration(Name,UserName,Password,Age,Dob,Contact) values('$name','$username','$password','$age','$dob','$contact')";
$r = mysqli_query($con,$sql);
if($r){
    echo "succesfully Logged";
}
else{
    echo "Denied";
}
?>