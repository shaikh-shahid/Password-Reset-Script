<?php
	session_start();
	$id=$_SESSION['resetid'];
?>
<html>
<head>
<title>Password reset Demonstration</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
		var url= window.location.href;
		var n = url.indexOf("id=");
		if(n!=0)
		{
			var id=url.substr(60,url.length);
			var actual_id="<?php echo $id;?>";
			if(id==actual_id)
			{
				window.location.href="takepassword.php";
			}
			else
			{
				document.write("OOOps some problem is here :/");
			}
		}
});
</script>
</head>
<body>
</body>
</html>