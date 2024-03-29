<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Hotel-FHTW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <header> <?php include("navbar.php") ?></header>
    
    <main>

        <?php
if (empty($_SESSION["email"])) {
    header("Location: ./login.php");
    exit();
} else {
    echo "<h1>Profile Page</h1> 
    <p>Email: " . $_SESSION['email']. "</p>
    <p>Name: ". $_SESSION["fname"]. " " .$_SESSION["lname"]. "</p>
    <p>Username: ". $_SESSION["uname"] ."</p>
    ";
}
?>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  

</body>
</html>