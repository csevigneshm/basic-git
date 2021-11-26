<!DOCTYPE html>
<html>
<head>
<title>ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body >
Name:
    <input id="name" type="text" name="name">
    <input id="btn" type="submit" name="submit" value="go" onclick="june()" >
<script>


	function june()
	{
		
		var name=$("#name").val();
		if(name!='')
		{
			$.ajax({
				type:"POST",
				url:"next.php",
				data:'user='+name,
				success:function (resp) 
				{
					alert(resp+name);
				}});
			console.log(name);
		}
	};

</script>

</body>
</html>