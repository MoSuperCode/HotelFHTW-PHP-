
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel FHTW 🏨</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./faq.php">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./impressum.php">Impressum</a>
        </li>
        <?php if(!isset($_SESSION["logged_in"])) {
            echo'<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Registrieren/Login
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./register.php">Registrieren</a></li>
              <li><a class="dropdown-item" href="./login.php">Login</a></li>
            </ul>
          </li>';
        } else {
          echo '
          <li><a class="nav-link" href="./profile.php">Profile</a></li>
          <li><a class="nav-link" href="./logout.php">Logout</a></li>';
        }
         ?>
        
      </ul>
    </div>
  </div>
</nav>'
