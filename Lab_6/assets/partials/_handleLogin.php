<?php
    session_start();
    require '_functions.php';
    $conn = db_connect();
    // Get Current date, time
$current_time = time();
$current_date = date("Y-m-d H:i:s", $current_time);

// Set Cookie expiration for 1 month
$cookie_expiration_time = $current_time + (30 * 24 * 60 * 60);  // for 1 month


    if(!$conn)
        die("Oh Shoot!! Connection Failed");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (!empty($_POST["remember"])) {
            echo "rem ok";
            setcookie("remember", $username, $cookie_expiration_time);
        }else{
            echo "rem not ok";
            unset ($_COOKIE['remember']);
        }   

        $sql = "SELECT * FROM `users` WHERE user_name='$username';";
        $result = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_assoc($result)){
            $hash = $row['user_password'];
            if(password_verify($password, $hash))
            {
                // Login Sucessfull
                session_start();
                $_SESSION["loggedIn"] = true;
                $_SESSION["user_id"] = $row["user_id"];

                header("location: ../../admin/dashboard.php");
                exit;
            }
            
            // Login failure
            $error = true;
            header("location: index.php?error=$error");
        }
    }
?>