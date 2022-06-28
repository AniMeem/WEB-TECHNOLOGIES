<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<style>

</style>
<div><?php include 'header.php';?></div>
<body>
<fieldset> <legend> LOGIN </legend>
<form action="welcome.php" method="post">
	Username:
	<input type="text" name="uname" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>">
	<br>
	Password:
	<input type="password" name="pass" value="<?php  if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>">
	<br>
	<input id="remember" type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>> <label for="remember">Remember Me</label>
	<br>
	<a href ="forgot.php"> Forget password </a><br>
	<a href="dash.php">Submit</a>


</form>
</fieldset>
</div>
<?php include 'footer.php';?>
</body>
</html>




