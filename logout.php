<?php
    # Delete any saved $_SESSION variables
    session_unset();
    
    # Destroy the active session
    session_destroy();

    # Redirect the user to the home page
    header("Location: index.php");
?>