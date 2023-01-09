<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to the registration page noob </h1>
    <div id ="form" class="register-container" >
        <h1>Registration Form</h1>
        <form name="form"  method="POST" action="registration_logic.php">
        <label >Create a valid Username</label>
        <br>
        <input type="text" id ="user" name="user" >
        <br>
        <br>
        <label for="">Enter your email address</label>
        <br>
        <input type="email" id="mail" name="mail">
        <br>
        <br>
        <label for="">create a password</label>
        <br>
        <input type="password" id="pass" name="pass">
        <br><br>
        <label >Confirm Password</label>
        <br>
        <input type="password" id="pass" name="pass">
        <br>
        <br>
        <input type="submit" name="register-btn" id="register" value ="Register" >
        </form>
       </div> 
</body>
</html>