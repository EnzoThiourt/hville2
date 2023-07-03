<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Hville</title>
  <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header">
  <div class="inner-header flex">
  <h2>Formulaire pour ajouter un employé : </h2>
    <?php
    require 'template/formulaireEmploye.php';
    ?>
    <h2>Formulaire pour remplir les informations nécessaires : </h2>
    <?php
    require 'template/formulaireContient.php';
    ?>
</div>
  <iv>
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
  viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
  <defs>
  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
  </defs>
  <g class="parallax">
  <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
  <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
  <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
  <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
  </g>
  </svg>
  </div>
  </div>
  <div class="content flex">
  <p>Pour accéder aux formulaires, veuillez cliquez sur l'hôpital. <a href="formulaire.php">&#127973</a> </p>
  </div>
</body>
</html>