<html>
	<head>
		<title>Lab taks 4 - REGISTRATION</title>
	</head>
<style>
label{
	display:inline-block;
	width:200px;
	height: 30px;
	margin-right:30px;
	text-align:left;
}

input{
}

fieldset{
	width:500px;
	margin:0px auto;
}
</style>
	<body>
		<form style="width:30%" action="">
		<fieldset><legend>REGISTRATION</legend>
			<label>Name: </label><input type="text" value="" Placeholder="Enter your Name"/><br>
			<hr width="100%">
			<label>Email: </label><input type="text" value="" Placeholder="Enter your E-mail"/><br>
			<hr width="100%">
			<label>User Name: </label><input type="text" value="" Placeholder="Enter your Username"/><br>
			<hr width="100%">
			<label>Password : </label><input type="password" value="" Placeholder="Enter your Password"/><br>
			<hr width="100%">
			<label>Confirm Password : </label><input type="password" value="" Placeholder="Re-enter your Password"/><br>
			<hr width="100%">
			<fieldset>
			<legend>Gender</legend>
			<input type="radio" id="Male" name="Gender" value="Male"> Male
			<input type="radio" id="Female" name="Gender" value="Female">Female
			<input type="radio" id="Other" name="Gender" value="Other"> Other
			</fieldset>
			<hr width="100%">
			<fieldset>
			<legend>Date of Birth</legend>
			<input type="text" size="2" value=""/>/
			<input type="text" size="2" value=""/>/
			<input type="text" size="4" value=""/>
			<label>(dd/mm/yyyy)</label>
			</fieldset>
			<hr width="100%">
			<input type="button" value="Submit"/> <input type="button" value="Reset"/> 
		</fieldset>
		</form>
	</body>
</html>