<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<style>

header {
background-color: #999;
padding: 80px;
text-align: left;
font-size: 30px;
color: green;

}
nav {
  float: left;
  width: 30%;
  height: 300px;
  background: #ccc;
  padding: 20px;
}



</style>
<header>
<h2>X Company</h2>
<?php include 'nav.php';?>
</header>


<nav>
    <ul>
      <li><a href="dash.php">Dashboard</a></li>
      <li><a href="profile.php">View Profile</a></li>
      <li><a href="edit.php">Edit Profile</a></li>
      <li><a href="picture.php">Change Profile Picture</a></li>
      <li><a href="change.php">Change Password</a></li>
      <li><a href="home.php">Log 0ut</a></li>
    </ul>
  </nav>
<body>
   <fieldset>
    <legend>CHANGE PASSWORD</legend>
Current Password:
<input type="text" name="cpassword" value="<?php if (!preg_match("/(abc@1234)/",$cpassword)) {echo "Current password not matched";}?>">
<br>
New Password:
<input type="text" name="npassword" value="<?php if ($CurrentPassword==$NewPassword) {echo "New password can't match with current password";}?>">
	<br>
    Retype New Password:
<input type="text" name="rpassword" value="<?php if (!$NewPassword==$RetypeNewPassword) {echo "New Password must match with the Retyped Password";}?>">
	<br>
    <input type="submit" name="submit" value="Submit">

</fieldset>
</form>
</div>
<?php include 'footer.php';?>
</body>
</html>