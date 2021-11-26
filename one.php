<?php

$conn = mysqli_connect("localhost", "root","", "Office");

   if (!$conn) 
   {
    die("Connection failed: " . mysqli_connect_error());

    }

$name=$_POST['user'];
$city=$_POST['town'];

echo $sql = "INSERT INTO Employees (name,city) VALUES ('$name','$city')";
$result=mysqli_query($conn,$sql);


?>   
