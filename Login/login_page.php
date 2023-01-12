
<html>
    <head>
        
        <title>Maths Game</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <section id="">
        <!-- nav  bar -->
        <!-- title.... will include play button also which will redirect to login or register page  -->
<h1>Test you competitive maths skills here </h1>

       <div id ="form" class="login-container" >
        <h1>Login Form</h1>
        <form name="form"  method="POST" action="login_logic.php">
        <label >Username</label>
        <input type="text" id ="user" name="user" >
        <br>
        <br>
        <label >Password</label>
        <input type="password" id="pass" name="pass">
        <br>
        <br>
        <input type="submit" name="login-btn" id="login" value ="Login" >
        </form>
       </div> 
    </body>
</html>