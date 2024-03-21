<?php
   ob_start();
    session_start();
     ob_end_clean();
    if(isset($_SESSION["username"])){
    echo "SELAMAT DATANG BARUDAK CODING";
    echo "<a href='logout.php'>Logout</a>";
    }else{
        echo header("location:login.php");
    }
?> 