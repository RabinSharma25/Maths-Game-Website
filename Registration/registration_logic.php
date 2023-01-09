
<?php
echo "welcome to the login page";
include("../connection.php");
if(isset($_POST['register-btn'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    // $email =$_POST['mail'];

    $sql = "insert into loginregistration values('$username','$password')";
    if(mysqli_query($conn, $sql)){
        echo "<p>New row added successfully!</p>"; 
        header("Location:/Maths-Game-Website/Login/login_page.php");
        echo "<script>alert('please login to play the game')</script>;" ;
    }else{
        echo "ERROR: Unable to execute $sql" . mysql_error($link);   
    }

}


?>