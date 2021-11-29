<?php

$conn = mysqli_connect("localhost", "root","", "Office");

   if (!$conn) 
   {
    die("Connection failed: " . mysqli_connect_error());

    }

$userid=$_POST['user'];
$amt=$_POST['cost'];
$date=$_POST['dates'];

$sql = "INSERT INTO amt (user_id,amt,date_time) VALUES ($userid,$amt,'$date')";
$result=mysqli_query($conn,$sql);
echo "added";

?>   
