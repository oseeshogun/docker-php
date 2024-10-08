<?php
if (session_id() == '') {
  session_start(); // Start the session if it hasn't been started
}
$isLoggedIn = isset($_SESSION['user_id']);
?>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <div class="navbar-brand">
        <img class="text-light" src="style/144.png" width="50px"><span class="text-white">Restaurant Kin Délicieux</span>
      </div>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-light"></span>
      </button>
      <div class="flex-grow"></div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light accueil" aria-current="page" href="/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light apropos" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light commande" href="commande.php">Passer une commande</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light apropos" href="contact.php">Contactez-nous</a>
          </li>
          <?php if ($isLoggedIn): ?>
            <a class="nav-link text-light apropos" href="list_commande.php">Liste des commandes</a>
          <?php endif; ?>
          <li class="nav-item">
            <?php if ($isLoggedIn): ?>
              <a class="nav-link text-light apropos" href="logout.php">Se déconnecter</a>
            <?php else: ?>
              <a class="nav-link text-light apropos" href="connexion.php">Connexion</a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<script src="js/bootstrap.js">

</script>