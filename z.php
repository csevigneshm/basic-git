<?php
  $conn = mysqli_connect("localhost", "root","", "Office");
  $sql="SELECT * FROM persons";
  $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Delete</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<p>User ID
<select id="id" >
  <?php
  while($row = mysqli_fetch_assoc($result)) {
    $num= $row["id"];
    $n=$row["Name"] ;
  ?>
<option value="<?php echo $num;?>" > <?php echo $num; ?> 
</option>

   <?php
   }
   ?>

</select>
</p>
<button id="btn" onclick="june()">DELETE</button>


<script>

function june(){

  var select=$("#id").val();
  

  if(select!='')

  $.ajax(
     {
     type:"POST",
     url: "x.php",
     data:'user='+select,

     success: function(resp)
       {

      alert(resp);
    
       }
     });

}




</script>





</body>
</html>