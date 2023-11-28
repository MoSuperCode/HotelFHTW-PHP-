
<form  action="login.php" method="post">
                <label for="email" >Email</label>
                <input type="email" name="email">
                <label for="password" >Passwort</label>
                <input type="password" name="pwd">
                <input type="submit" name="login" value="login">
              </form>
              <?php 
session_start();


if (!isset($_SESSION["email"])) {

        echo("<p>Noch kein Konto? Hier <a href='./register.php'>registrieren.</a></p>");
    }
 elseif (isset($_SESSION["registered"]) && isset($_POST["email"]))  {

    if ($_POST["email"] === $_SESSION["email"] && $_POST["pwd"] === $_SESSION["pwd"]) {
        $_SESSION["logged_in"] = true;
        header("Location: ./index.php");
        exit();
    } else {
        echo("Falsche Email oder Password. Bitte erneut eingeben!");
    }
}
if (isset($_SESSION["logged_in"])) {
    header("Location: ./index.php");
        exit();
}


?>