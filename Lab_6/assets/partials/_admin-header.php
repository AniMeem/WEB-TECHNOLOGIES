<?php

    require '_functions.php';
    $conn = db_connect();


    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result))
    {
        $user_fullname = $row["user_fullname"];
        $user_name = $row["user_name"];
    }
?>

    <main id="container">
        <div id="sidebar">
            <h4>
                <!-- <i class="fas fa-bus"></i> -->
             Company</h4>
            <div>
                <img class="adminDp" src="../assets/img/userav-min.png" height="125px" alt="Admin Profile Pic">

            </div>
            <ul id="options">
                <li class="option <?php if($page=='dashboard'){ echo 'active';}?>"> 
                    <a href="./dashboard.php">
                    <!-- <i class="fas fa-tachometer-alt"></i> -->
                     Dashboard
                    </a>
                </li>
                
               
                <li class="option <?php if($page=='view_profile'){ echo 'active';}?>">
                    <a href="./view_profile.php">
                    <!-- <i class="fas fa-bus"></i>  -->
                    View Profile
                    </a>
                </li>
                <li class="option <?php if($page=='edit_profile'){ echo 'active';}?>">
                    <a href="./edit_profile.php">
                    <!-- <i class="fas fa-road"></i>  -->
                    Edit Profile    
                    </a>
                </li>
                
                <li class="option <?php if($page=='change_password'){ echo 'active';}?>">
                    <a href="./change_password.php">
                    <!-- <i class="fas fa-users"></i>  -->
                    Change Password
                    </a>
                </li>
                
                <!-- <i class="fas fa-user-lock"></i>  -->
                <!-- <li class="option <?php if($page=='signup'){ echo 'active';}?>">
                    <a href="./signup.php">
                    
                    Registration        
                    </a>
                </li> -->
            </ul>
        </div>
        <div id="main-content">
            <section id="welcome">
                <ul>
                    <li class="welcome-item">Welcome, 
                        <span id="USER">
                            <?php 
                                echo $user_fullname;
                            ?>
                        </span>
                    </li>
                    <li class="welcome-item">
                        <button id="logout" class="btn-sm">
                            <a href="../assets/partials/_logout.php">LOGOUT</a>
                        </button>
                    </li>
                </ul>
                <hr/>
            </section>