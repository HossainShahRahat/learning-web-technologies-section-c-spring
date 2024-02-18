<html>
	<head>
		<title>Lab taks 4 - LOGIN</title>
	</head>
<style>
label{
	display:inline-block;
	width:100px;
	height: 30px;
	margin-right:30px;
	text-align:left;
}

input{
}

fieldset{
	width:300px;
	margin:0px auto;
}
</style>

	<body>
	
<?php
$Username = $Password = "";
$UsernameErr = $PasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username = test_input($_POST["Username"]);
  $Password = test_input($_POST["Password"]);
  
   if (empty($_POST["Username"])) {
    $UsernameErr = "Username is required";
  }else {
    $Username = test_input($_POST["Username"]);
  }
   if (empty($_POST["Password"])) {
    $PasswordErr = "Password is required";
  }else {
    $Password = test_input($_POST["Password"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

		<form method="POST"  style="width:30%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<fieldset><legend>LOGIN</legend>
			<label>User Name: </label><input type="text" name="Username" value="" Placeholder="Enter your Username"/>
			<span>* <?php echo $UsernameErr; ?></span>
			<br>
			<label>Password : </label><input type="password" name="Password" value="" Placeholder="Enter your Password"/>
			<span>* <?php echo $PasswordErr; ?></span><br>
			<hr width="100%">
			<input type="checkbox" value="" Placeholder="Enter your Password"/> Remember Me<br><br>
			<input type="button" name="submit" value="Submit"/> 
			<a href=""><u>Forgot Password?</u></a><br>
		</fieldset>
		</form>
	</body>
</html>