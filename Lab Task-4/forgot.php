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
<?php include 'header.php';?>
<body>
<fieldset> <legend> FORGOT PASSWORD </legend>
<form action="welcome.php" method="post">
	Enter Email:
	<input type="text" name="uname" value="<?php if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(   
                     'e-mail'          =>     $_POST["email"],  
                    
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>This E-mail is valid</p>";  
                }  
           }  
           else  
           {  
                $error = 'E-mail does not exists';  
           }  ?>">
	<br>
	
	<input type="submit" name="submit" value="Submit">

</form>
</fieldset>
</div>
<?php include 'footer.php';?>
</body>
</html>