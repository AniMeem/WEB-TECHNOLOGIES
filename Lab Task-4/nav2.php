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
padding: 50px;
text-align: left;
font-size: 10px;
color: green;

}
nav {
  float: left;
  width: 30%;
  height: 50px;
  background: #ccc;
  padding: 10px;
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
 
</body>
</html>
