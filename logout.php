<?php

session_start();
// Destroy session
// session_destroy();
if(session_destroy()) {
    // Redirecting To Home Page
    header("Location:index.php");
}
