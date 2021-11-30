<?php

$conn = mysqli_connect("localhost", "root","", "Office");

   if (!$conn) 
   {
    die("Connection failed: " . mysqli_connect_error());

    }

// $id=$_POST['user'];
// $amt=$_POST['cost'];
// $date=$_POST['dates'];

// // $sql = "INSERT INTO amt (id,amt,date_time) VALUES ($id,$amt,'$date')";
// $result=mysqli_query($conn,$sql);


?>   
