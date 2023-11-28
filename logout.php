<?php 
session_start();

// Logout-Logik
if(isset($_SESSION["logged_in"])) {
    // Entferne alle Session-Variablen
    session_unset();
    
    // Zerstöre die Session
    session_destroy();
}

// Weiterleitung zur Login-Seite nach dem Logout
header("Location: index.php");
exit();
?>