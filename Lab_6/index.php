<?php
    require 'assets/partials/_functions.php';
    $conn = db_connect();    

    if(!$conn) 
        die("Connection Failed");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket Bookings</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- CSS -->
    <?php 
        require 'assets/styles/styles.php'
    ?>

</head>
<body>
   
    <header>
        <nav>
            <div>
                    <a href="#" class="nav-item nav-logo">Company</a>
                    <!-- <a href="#" class="nav-item">Gallery</a> -->
            </div>

            <div>
                <a href="#" class="nav-item">Home</a>
                <a href="#" class="login nav-item" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt" style="margin-right: 0.4rem;"></i>Login</a>
                <a  href="#" data-bs-toggle="modal" data-bs-target="#signupModal" class="login nav-item" ><i class="fas fa-sign-in-alt" style="margin-right: 0.4rem;"></i>Registration</a>
            </div>
        </nav>
    </header>
    <!-- Login Modal -->
    <?php require 'assets/partials/_loginModal.php'; 
    require 'admin/signup.php'; 
    ?>
    

    <section id="home">
        <div id="route-search-form">
            <h1>Bus Ticket Booking System</h1>

            <p class="text-center">Welcome to Bus Ticket Booking System. Login now to manage bus tickets and much more.</p> 
        </div>
    </section>
    <div id="block">



        
        <footer>
        <p>
                        <i class="far fa-copyright"></i> <?php echo date('Y');?> - Bus Ticket Booking System | by Anika
                        </p>
        </footer>
    </div>
    
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>