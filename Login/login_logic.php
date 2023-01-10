<?php
echo "welcome to the login page";
include("../connection.php");
if(isset($_POST['login-btn'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from loginregistration where username='$username' and password ='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count ==1){

header("Location:../Game-Page/indexed.html");
        echo "right";
    }
    else{
        echo '<script>
        window.location.href ="login_page.php";
        alert("Login failed. Invalid username or password !!!");
        </script>';
    }

}


?>
