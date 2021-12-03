<?php 
$conn = mysqli_connect("localhost", "root","", "Office");
$id = $_POST['user'];
$del = mysqli_query($conn,"delete from persons where id = '$id'");


if($del)
{
   
     
    echo "record deleted successfully";	
}
else
{
    echo "Error deleting record"; 
}
?>