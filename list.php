<!DOCTYPE html>
<html>
<head>
	<title>list</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<form id="form">
<p>Id
  
  <?php
  $conn = mysqli_connect("localhost", "root","", "Office");
   if (!$conn) 
   {
    die("Connection failed: " . mysqli_connect_error());
   }
  $sql="SELECT id FROM Employees";
  $result = mysqli_query($conn,$sql);

   if (mysqli_num_rows($result) > 0) 
   {
  ?>

<select id="id">
  <?php
 
  while($row = mysqli_fetch_assoc($result)) {
    $num= $row["id"]; 
  ?>
<option value="<?php echo $num?>" > <?php echo $num; ?> 
</option>

   <?php
   }
  ?>
</p>
</select>


   <?php
}
else{
    echo "No result found";
}
?>
  <p>User ID</p>
  <input id="userid" type="name" name="userid">
  <p>amount<p/>
  <input id="amt" type="number" name="amount">
  <p>date and time<p/>
  <input id="date" type="datetime-local" name="date"><br><br>
  <input id="btn" type="submit" name="submit" value="Add">
  <p id="ans"></p>
</form>

<script>
$(document).ready(function()
{
	
  $("#form").submit(function(e)
  {
  var userid=$("#userid").val();
	var amt=$("#amt").val();
	var date=$("#date").val();

	if(id,amt,date!='')
     $.ajax(
     {
  	 type:"POST",
  	 url: "twoo.php",
  	 data:'user='+userid+'&cost='+amt+'&dates='+date,

  	 success: function(resp)
  	   {

  		alert(resp);
    
       }
     });
  e.preventDefault();
  });
});
</script>


</body>
</html>