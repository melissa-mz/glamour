<?php
require_once __DIR__ . '/config.php';
if (!isset($page_title)) { $page_title = "Glamour Clinic — Dr. Draoui Sadjia"; }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $page_title; ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

<header id="mainHeader">
  <!-- LOGO EN IMAGE -->
  <a href="index.php" class="logo-link">
    <img src="images/logo.jpg" alt="Glamour Clinic" class="logo-img">
  </a>

  <!-- BOUTON HAMBURGER -->
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <nav id="mainNav">
    <ul>
      <li><a href="index.php#about">Accueil</a></li>
      <li><a href="botox.php">Botox</a></li>
      <li><a href="filler.php">Filler</a></li>
      <li><a href="lasers.php">Lasers</a></li>
      <li><a href="skincare.php">Skincare</a></li>
      <li><a href="index.php#location">Nous trouver</a></li>
    </ul>
  </nav>
</header>

<script>
  // --- MENU HAMBURGER AVEC FERMETURE AMÉLIORÉE ---
  const hamburger = document.getElementById('hamburger');
  const mainNav = document.getElementById('mainNav');

  // Ouvrir / fermer avec le bouton hamburger
  hamburger.addEventListener('click', function(e) {
    e.stopPropagation(); // Empêche la fermeture intempestive
    mainNav.classList.toggle('open');
  });

  // Fermer quand on clique sur un lien du menu
  document.querySelectorAll('#mainNav a').forEach(function(link) {
    link.addEventListener('click', function() {
      mainNav.classList.remove('open');
    });
  });

  // Fermer quand on clique à l'extérieur du menu (sur l'overlay)
  mainNav.addEventListener('click', function(e) {
    // Si le clic est sur le fond (et non sur le panneau lui-même)
    if (e.target === mainNav) {
      mainNav.classList.remove('open');
    }
  });

  // Fermer avec la touche Échap
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && mainNav.classList.contains('open')) {
      mainNav.classList.remove('open');
    }
  });
</script>