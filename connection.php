<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    // $con = mysqli_connect("sql208.liveblog365.com","lblog_33351065","r9ytezdmg9p", "lblog_33351065_game_db");
    $con = mysqli_connect("localhost","root","", "test");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   
?>