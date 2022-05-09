
<!DOCTYPE html>
<html>
<head>
  <title>Sign up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" >
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password1" id ="pwd1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password2" id="pwd2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" id="sbmt" name="submit" onclick="return Validate()">Save</button>
  	</div>
  	<p>
  		Already a member? <a href="loginform.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("pwd1").value;
        var confirmPassword = document.getElementById("pwd2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#sbmt").click(function () {
            var password = $("#pwd1").val();
            var confirmPassword = $("#pwd2").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script> -->