<html>
<head>
<title>Password reset Demonstration</title>
</head>
<body>
<h3>Type your new password</h3>
<input  type="password" id="change_password" size=40>
<input type="button" id="submit" value="Change Password">
<span id="msg"><h3>Hey Your password is changed, you can use this password to update the mysql table, enjoy</span>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#msg").hide();
$("#submit").click(function(){
$("#msg").show();
});
});
</script>
</html>