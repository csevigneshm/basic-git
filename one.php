<?php

$conn = mysqli_connect("localhost", "root","", "Office");

   if (!$conn) 
   {
    die("Connection failed: " . mysqli_connect_error());

    }


$city=$_POST['town'];
$name=$_POST['user'];

echo $sql = "INSERT INTO Employees (name,city) VALUES ('$name','$city')";
$result=mysqli_query($conn,$sql);


?>   
