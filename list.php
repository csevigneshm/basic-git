<!DOCTYPE html>
<html>
<head>
	<title>list</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<p>User ID
  
  <?php
  $conn = mysqli_connect("localhost", "root","", "Office");
   
  $sql="SELECT id FROM Employees";
  $result = mysqli_query($conn,$sql);

   
  ?>

<select id="id" >
  <?php
 
  while($row = mysqli_fetch_assoc($result)) {
    $num= $row["id"]; 
  ?>
<option value="<?php echo $num?>" > <?php echo $num; ?> 
</option>

   <?php
   }
   ?>

</select>
</p>

   
  
  <p>amount<p/>
  <input id="amt" type="number" name="amount">
  <p>date and time<p/>
  <input id="date" type="datetime-local" name="date"><br><br>
  <input id="btn" type="submit" name="submit" value="Add" onclick="june()">
  <p id="ans"></p>



<script>
  
	
  function june()
  {
  var userid=$("#id").val();
  var amt=$("#amt").val();
  var date=$("#date").val();
 

	if(userid,amt,date!='')
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
  };

</script>


</body>
</html>