<?php
    session_start();    /// resume the session
    if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'])
    {
        // logout procedure
        session_unset();    // remove all the variable --> khali kar mem
        session_destroy();  
    }
    header("Location: home1.html");
?>