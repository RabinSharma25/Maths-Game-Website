<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>login</title>
</head>
<body> 
    <main>
 
        <div class="container py-5">
            <div class="col-8 m-auto"> 
                <h3 class="mb-4">Welcome back! Log In</h3>

                <?php
                    require('../connection.php');
                    // When form submitted
                    if (isset($_POST['username'])) {

                        $username = $_REQUEST['username'];
                        $password = $_REQUEST['password'];

                       
                        // Check user is exist in the database
                        $query    = "SELECT * FROM `users` WHERE username='$username'
                                    AND  password='$password'";

                        $result = mysqli_query($con, $query) or die(mysql_error());
                        $rows = mysqli_num_rows($result);

                        if ($rows == 1) {
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);         
                            header("Location: ../game/index.php");
                        } else {
                            echo "<div class='form'>
                                    <div class='alert alert-danger'>Incorrect Email/password. Please try again</div><br/>
                                    <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
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
                            <input type="submit" value="Log In" class="btn btn-primary px-5" /> 
                        </div>  
                    </div>

                    <small><a href="#">Forgot your Password</a></small> <br> 
                    <small>New to MathGame? <a href="../auth/register.php"> Create an account </a> instead.</small> <br>
                     
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