<form name="register" action="register.php" method="post">
        <label for="Anrede">Anrede:</label><br />
        <select name="anrede" id="anrede">
          <option value="Herr">Herr</option>
          <option value="Frau">Frau</option>
        </select>
        <br />
        <label for="vorname">Vorname:</label><br />
        <input
          type="text"
          placeholder="Vorname"
          id="vorname"
          name="vorname"
          required
        /><br />
        <label for="nachname">Nachname:</label><br />
        <input
          type="text"
          placeholder="Nachname"
          id="nachname"
          name="nachname"
          required
        /><br />
        <label for="email">E-Mail-Adresse:</label><br />
        <input
          type="text"
          placeholder="E-Mail-Adresse"
          id="email"
          name="email"
          required
        /><br />
        <label for="username">Username:</label><br />
        <input
          type="text"
          placeholder="Username"
          id="username"
          name="username"
          required
        /><br />
        <label for="passwort">Passwort:</label><br />
        <input
          type="password"
          placeholder="Passwort"
          id="passwort"
          name="passwort"
          required
        /><br />
        <label for="pbestätigen">Passwort bestätigen:</label><br />
        <input
          type="password"
          placeholder="Passwort bestätigen"
          id="passwortbest"
          name="passwortbest"
          required
        /><br />
        <input type="submit" value="Registrieren" />
      </form>
      <?php 
     if($_SERVER["REQUEST_METHOD"] == "POST") {
      $anrede = $_POST["anrede"];
      $vorname = $_POST["vorname"];
      $nachname = $_POST["nachname"];
      $email = $_POST["email"];
      $username = $_POST["username"];
      $password = $_POST["passwort"];
      $passwordbest = $_POST["passwortbest"];
      
      $errorMessages = array(); // Array zur Speicherung von Validierungsfehlern
  
      // Validierung der Anrede
      if (empty($anrede)) {
          $errorMessages[] = "Anrede ist erforderlich.";
      }
  
      // Validierung des Vornamens
      if (empty($vorname)) {
          $errorMessages[] = "Vorname ist erforderlich.";
      }
  
      // Validierung des Nachnamens
      if (empty($nachname)) {
          $errorMessages[] = "Nachname ist erforderlich.";
      }
  
      // Validierung der E-Mail-Adresse
     
  if (empty($email)) {
      $errorMessages[] = "E-Mail-Adresse ist erforderlich.";
  }
  
      // Validierung des Benutzernamens
      if (empty($username)) {
          $errorMessages[] = "Benutzername ist erforderlich.";
      }
  
      // Validierung des Passworts
      if (empty($password)) {
          $errorMessages[] = "Passwort ist erforderlich.";
      } elseif (strlen($password) < 6) {
          $errorMessages[] = "Das Passwort muss mindestens 6 Zeichen lang sein.";
      }
  
      // Überprüfung, ob Passwort und Passwortbestätigung übereinstimmen
      if ($password !== $passwordbest) {
          $errorMessages[] = "Die Passwörter stimmen nicht überein.";
      }
  
      // Wenn Validierungsfehler aufgetreten sind, diese anzeigen
      if (!empty($errorMessages)) {
          foreach ($errorMessages as $errorMessage) {
              echo $errorMessage . "<br>";
          }
      } else {
          // Wenn keine Validierungsfehler vorliegen, zeige die eingegebenen Daten an
          echo "Anrede: $anrede <br>
                Vorname: $vorname <br>
                Nachname: $nachname <br>
                Email: $email <br>
                Username: $username <br>
                Passwort: $password <br>
                Bestätigung: $passwordbest";
      }
  }
  

      ?>