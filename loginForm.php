<?php 
session_start(); // Session starten

// Funktion zum Setzen der Fehlermeldung
function setErrorMessage($message) {
    $_SESSION['error_message'] = $message;
}

// Überprüfen der Login-Daten
function checkLogin($email, $password) {
    $fakeEmail = "test@example.com"; // Test-E-Mail
    $fakePassword = "testpassword"; // Test-Passwort

    if ($email == $fakeEmail && $password == $fakePassword) {
        $_SESSION['user'] = $email; // Speichern der Benutzerinformation in der Session
        return true;
    }
    return false;
}

// Wenn das Formular abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $enteredEmail = strtolower($_POST["email"]);
    $enteredPassword = $_POST["password"];

    if (checkLogin($enteredEmail, $enteredPassword)) {
        header("Location: index.php"); // Weiterleitung zur Willkommensseite nach erfolgreichem Login
        exit();
    } else {
        setErrorMessage("Falsche Anmeldeinformationen. Bitte versuche es erneut.");
    }
}

// Überprüfen, ob eine Fehlermeldung vorhanden ist
if (isset($_SESSION['error_message'])) {
    echo "<p>{$_SESSION['error_message']}</p>";
    unset($_SESSION['error_message']); // Fehlermeldung entfernen, damit sie nicht mehr angezeigt wird
}
?>

<form action="" method="post">
                <label for="email" name="email">Email</label>
                <input type="email">
                <label for="password" name="password">Passwort</label>
                <input type="password">
                <input type="submit" name="login" value="login">
              </form>
          