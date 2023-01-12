<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">



    <title>Create new Account - My Lib</title>
</head>
<body> 
    <main>
        <!-- User Signup Form Starts Here -->
        <div class="container py-5">
            <div class="col-8 m-auto">
            
                <h3 class="mb-1">Create new Account</h3>
                <p class="text-muted">Fill up the following fields and get going.</p>
                <hr>
            
                <?php
                    require('../connection.php');
                    // When form submitted
                    if (isset($_POST['username'])) {

                        $username = $_REQUEST['username'];
                        $password = $_REQUEST['password'];

                       
                        // Check user is exist in the database
                        $query    = "INSERT into `users` (username, password) values('$username', '$password')";

                        $result   = mysqli_query($con, $query);

                        if ($result) {
                            echo "<div class='form'>
                                  <div class='alert alert-success'>You are registered successfully. Proceed to login</div><br/>
                                  <p class='link'>Click here to <a href='login.php'>Login</a>.</p>
                                  </div>";
                        } else {
                            echo "<div class='form'>
                                  <div class='alert alert-danger'>Required fields are missing. Please try again.</div><br/>
                                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                                  </div>";
                        }
                    } else {
                ?>
                <form class="form-controls" method="POST" validate>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Username *</small>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username" /> 
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Password *</small>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" /> 
                        </div>  
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <input type="submit" value="Register" class="btn btn-primary px-5" /> 
                        </div>  
                    </div>

                    <small>have an account? <a href="../auth/login.php"> login </a> instead.</small> <br>
                     
                </form>
                <?php
                    }
                ?>
            </div>
        </div>
        
    </main>

    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>