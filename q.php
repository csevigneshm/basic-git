<?php
  $conn = mysqli_connect("localhost", "root","", "Office");
  $sql="SELECT * FROM persons";
  $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<section>
        <table>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>City</th>
                
            </tr>
            
            <?php  
                while($rows = mysqli_fetch_array($result))
                {
             ?>
            <tr>
                
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['City'];?></td>
               
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
<p>User ID

<?php
  
  $sql="SELECT * FROM persons";
  $result = mysqli_query($conn,$sql);
?>
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


Update Name to : <input id="name" type="text" name="name" />
<br/><br/>
Update City to : <input id="city" type="text" name="City" />
<br/>
<br/>
<button onclick="june()" >Update</button>
<script>
  
  
function june()
  {
  var id=$("#id").val();
  var name=$("#name").val();
  var city=$("#city").val();

  if(id,name,city!='')
     $.ajax(
     {
     type:"POST",
     url: "r.php",
     data:'user='+name+'&town='+city+'&num='+id,

     success: function(resp)
       {

      alert(resp);
    
       }
     });
 };

</script>


</body>

</html>
