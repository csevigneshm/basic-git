 <?php
 echo "Welcome";

$conn = mysqli_connect("localhost", "root","", "Office");

   if (!$conn) 
   {
    die("Connection failed: " . mysqli_connect_error());

    }

$name=$_POST['user'];


echo $sql = "INSERT INTO New (name) VALUES ('$name')";
$result=mysqli_query($conn,$sql);


?>    