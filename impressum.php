<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Impressum - Hotel-FHTW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header>
    <?php 
 include("navbar.php")
 ?>
    </header>

    <main>
      <h1>Hotel FHTW - Impressum</h1>
      <section class="img">
        <figure>
          <img src="./img/mo_nasr.png" alt="Bild von Mo" />
          <figcaption>
            <b>
              Gesellschafter 1:<br />
              Mohamed Nasr
            </b>
          </figcaption>
        </figure>
        <figure>
          <img src="./img/mago_gabraliyev.png" alt="Bild von Magomed" />
          <figcaption>
            <b>
              Gesellschafter 2: <br />
              Magomed Gabraliyev
            </b>
          </figcaption>
        </figure>
      </section>
      <section class="impressum">
        <h3>
          Informationspflicht laut §5 E-Commerce Gesetz, §14
          Unternehmensgesetzbuch, <br />
          §63 Gewerbeordnung und Offenlegungspflicht laut §25 Mediengesetz.
        </h3>
        <ul>
          <li>Firmawortlaut: Hotel FHTW GmbH</li>
          <li>Unternehmensgegenstand: Hotellerie</li>
          <li>UID-Nummer: ATU12345678</li>
          <li>Firmenbuchnummer: 123456a</li>
          <li>Firmenbuchgericht: Wien</li>
          <li>Firmensitz: 1200 Wien</li>
          <li>Kontaktdaten:</li>
          <ul>
            <li>Telefonnumer: 0676 613 7208</li>
            <li>
              Email:
              <a href="mailto:if23b071@technikum-wien.at"
                >Hotel-FHTW@service.at</a
              >
            </li>
          </ul>
          <li>Mitgliedschaften bei der WKO:</li>
          <ul>
            <li>Mitglied der WKÖ</li>
            <li>Mitglied der Landesregierung</li>
            <li>Mitglied der Bundesinnung Hotellerie</li>
          </ul>
          <li>Anwendbare Rechtsvorschriften und Zugang dazu:</li>
          <ul>
            <li>
              Berufsrecht: <a href="http://www.ris.bka.gv.at">Gewerbeordnung</a>
            </li>
          </ul>
          <li>Verleihungsstaat: Befähigungsprüfung abgelegt in Österreich</li>
          <li>Angaben zur Online-Streitbeilegung:</li>
          <p>
            Verbraucher haben die Möglichkeit, Beschwerden an die
            Online-Streitbeilegungsplattform der EU zu richten:
            <a href="http://ec.europa.eu/odr">http://ec.europa.eu/odr</a>
          </p>
          <p>
            Sie können allfällige Beschwerden auch an die oben angegebene
            E-Mail-Adresse richten.
          </p>
        </ul>
      </section>
    </main>
    <footer></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  

  </body>
</html>
