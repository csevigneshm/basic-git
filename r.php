<?php 
$conn = mysqli_connect("localhost", "root","", "Office");
$id=$_POST['num'];
$name = $_POST['user'];
$city = $_POST['town'];

$upd = mysqli_query($conn,"UPDATE persons SET Name = '$name', City = '$city' WHERE id = $id ");


if($upd)
{
   
     
    echo "record updated successfully";	
}
else
{
    echo "Error updating record"; 
}
?>