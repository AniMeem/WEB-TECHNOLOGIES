<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PICTURE</title>
</head>
<?php include 'nav2.php';?>
  <style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>

<body>

<fieldtype> 
    <legend>PROFILE PICTURE</legend>

<img src="img_avatar.png" alt="Avatar" class="avatar">

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</fieldtype>
<?php include 'footer.php';?>
</body>
</html>
