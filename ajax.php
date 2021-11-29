<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>


Welcome Back!!!!
<form id="form">
  
  <p>Name<p/><input id="name" type="text" name="name">
  <p>City<p/><input id="city" type="text" name="city"><br><br>
  <input id="btn" type="submit" name="submit" value="Add">
  <p id="ans"></p>
</form>


<script>
$(document).ready(function()
{
	
  $("#form").submit(function(e)
  {
  	
	var name=$("#name").val();
	var city=$("#city").val();

	if(name,city!='')
     $.ajax(
     {
  	 type:"POST",
  	 url: "one.php",
  	 data:'user='+name+'&town='+city,

  	 success: function(resp)
  	   {

  		alert("added");
    
       }
     });
  e.preventDefault();
  });
});
</script>


</html>