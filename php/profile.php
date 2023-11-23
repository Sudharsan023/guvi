<?php

$con = mysqli_connect("localhost", "root", "", "reg");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$userName = mysqli_real_escape_string($con, $userName);

$sql = "SELECT * FROM registration WHERE UserName = '$userName'";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("Error in the query: " . mysqli_error($con));
}


while ($row = mysqli_fetch_assoc($result)) {
    
    echo $row['UserName'] . "<br>";
}

mysqli_free_result($result);
mysqli_close($con);
?>