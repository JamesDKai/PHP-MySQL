<?php
    // clear all session variables
    session_unset();

    // destroy the session
    session_destroy();

    echo "You've been logged out!";

    // To Verify If Session Has Been Cleared
    print_r($_SESSION);
 ?>
