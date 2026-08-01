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
  <div class="logo">GLAMOUR <span>CLINIC</span></div>

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
      <li class="has-dropdown">
        <a href="filler.php">Filler
          <svg class="caret" width="10" height="10" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="dropdown">
          <a href="filler.php#filler-levres">Filler lèvres</a>
          <a href="filler.php#filler-cernes">Filler cernes</a>
          <a href="filler.php#filler-sillons">Filler sillons nasogéniens</a>
          <a href="filler.php#filler-menton">Filler menton</a>
          <a href="filler.php#filler-jawline">Filler jaw line</a>
        </div>
      </li>
      <li class="has-dropdown">
        <a href="lasers.php">Lasers
          <svg class="caret" width="10" height="10" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="dropdown">
          <a href="lasers.php#lasers-epilatoires">Lasers Épilatoires</a>
          <a href="lasers.php#lasers-co2">Lasers CO2</a>
        </div>
      </li>
      <li class="has-dropdown">
        <a href="skincare.php">Skincare
          <svg class="caret" width="10" height="10" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="dropdown">
          <a href="skincare.php#skincare-exosomes">Exosomes</a>
          <a href="skincare.php#skincare-nctf">NCTF</a>
          <a href="skincare.php#skincare-skinbooster">Skinbooster</a>
          <a href="skincare.php#skincare-peelings">Peelings</a>
          <a href="skincare.php#skincare-prp">PRP</a>
          <a href="skincare.php#skincare-hydrafacial">Hydrafacial</a>
          <a href="skincare.php#skincare-hifu">HIFU</a>
          <a href="skincare.php#skincare-skinscrubber">Skin Scrubber</a>
        </div>
      </li>
      <li><a href="index.php#location">Nous trouver</a></li>
    </ul>
  </nav>
</header>

<script>
  // --- MENU HAMBURGER (uniquement le menu mobile ici) ---
  const hamburger = document.getElementById('hamburger');
  const mainNav = document.getElementById('mainNav');

  hamburger.addEventListener('click', () => {
    mainNav.classList.toggle('open');
  });

  // Fermer le menu quand on clique sur un lien
  document.querySelectorAll('#mainNav a').forEach(link => {
    link.addEventListener('click', () => {
      mainNav.classList.remove('open');
    });
  });

  // Gestion des sous-menus (dropdowns) sur mobile
  document.querySelectorAll('.has-dropdown > a').forEach(dropdownLink => {
    dropdownLink.addEventListener('click', function(e) {
      if (window.innerWidth <= 900) {
        e.preventDefault();
        this.parentElement.classList.toggle('open');
      }
    });
  });
  
</script>