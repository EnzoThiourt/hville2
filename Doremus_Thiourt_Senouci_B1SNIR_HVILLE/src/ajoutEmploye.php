<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Hville</title>
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="header">
    <br><br><br><br><br><br><br>
    <div class="inner-header flex">
      <?php
      if (isset($_POST['id_post']) && isset($_POST['nom_employe']) && isset($_POST['prenom_employe'])) {
        $id_post = $_POST['id_post'];
        $nom_employe = $_POST['nom_employe'];
        $prenom_employe = $_POST['prenom_employe'];

        $User = "AdminHville";
        $Passwd = "P@ssword";
        $dsn = "mysql:host=localhost;dbname=Hville";
        try {
          $db = new PDO($dsn, $User, $Passwd);
        } catch (PDOException $e) {
          echo "<P> La base de données n'est pas accessible ! </p>";
        }

        $prenom_employe = $db->quote($prenom_employe);
        $nom_employe = $db->quote($nom_employe);
        $id_post = $db->quote($id_post);

        $requete = "INSERT INTO `hville`.`employes` (`id_employe`, `id_post`, `nom_employe`, `prenom_employe`) 
VALUES (NULL, $id_post, $nom_employe, $prenom_employe);";
        echo "<h2>Votre employé a bien été ajouter.</h2>";
        $res = $db->query($requete);
        if ($res == false) {
          echo "<P>requete echouée, veuillez réessayé.</p>";
        }
      }
      ?>
    </div>
    <div>
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
    <p>Pour accéder aux formulaires, veuillez cliquez sur l'hôpital. <a href="../formulaire.php">&#127973</a></p>
    <p>Pour accéder aux tableaux, veuillez cliquez sur l'ambulance. <a href="../index.php">&#128657</a> </p>
  </div>
</body>

</html>