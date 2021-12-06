<?php
include_once("y.php");
$fetchdata=new DB();
$qry="Employees";
$fetch=$fetchdata->exec_query($qry);
$data=$fetchdata->fetch_next($fetch);

?>


<!DOCTYPE html>
<html>
<head>
  <title>Update</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background: linear-gradient(to left,lightyellow,lightblue)" >

    

<!-- <section>
       <table>  
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
            </tr>
      

        <?php foreach($data as $key => $val)
        {
            $id = $val['id'];
            $name= $val['Name'];
            $city=$val['City'];
            
        ?>  
           
            <tr>
                <th><?php echo $id;?></th>
                <td><?php echo $name;?></td>
                <td><?php echo $city;?></td>
            </tr>
        <?php
        }
        ?>
        </table>
</section>
  -->
   
<p> Choose User ID
<select id="id" >
  <?php
  foreach ($data as $key => $value) {
    $num=$value['id'];
    $user=$value['Name'];
    $town=$value['City'];
  ?>
<option name="<?php echo $num; ?> " > <?php echo $num; ?> 
</option>
   <?php
   }
   ?>
</select>
</p>



Update Name to : <input id="name" type="text" name="name" value=""/>
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
     url: "c.php",
     data:'user='+name+'&town='+city+'&num='+id,

     success: function(resp)
       {


      alert(resp);
    
       }
     });
 };
$('#id').change(function(){
  var id=$("#id").val();
  var name=$("#name").val();
  var city=$("#city").val();
$.ajax(
     {
     type:"POST",
     url: "o.php",
     data:'user='+name+'&town='+city+'&num='+id,

     success: function()
       {

         $('#name').val($name);

          
       }
     });


});
$('#id').change(function(){
var b = $(this).val();
$('#city').val(b);
});



</script>


</body>

</html>
