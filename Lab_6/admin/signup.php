

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
            <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
        <!-- External CSS -->
        <?php 
   
        require 'assets/styles/signup.php';
        $page="signup";
    ?>
    </head>
<body>



    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


            <section id="add-admin">
                <div>
                    <div id="signupForm">
                        <h2>Registration</h2>
                        <form action="assets/partials/_handleSignup.php" method="POST">
                            <div>
                                <input type="text" name="firstName" placeholder="First Name*">
                                <input type="text" name="lastName" placeholder="Last Name*" required>
                            </div>
                            <div>
                                <input type="text" name="username" placeholder="Username*" required>
                            </div>
                            <div>
                                <input id="password" type="password" name="password" placeholder="Password*" required>
                                <span id="passwordErr" class="error"></span>
                            </div>
                            <div>
                                <input id="confPassword" type="password" name="confPassword" placeholder="Confirm Password*" required>
                                <span id="confPassErr" class="error"></span>
                            </div>
                            <button id="signup-btn" type="submit" name="signup">PROCEED</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    <script src="../assets/scripts/admin_signup.js">
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



       
</body>
</html>