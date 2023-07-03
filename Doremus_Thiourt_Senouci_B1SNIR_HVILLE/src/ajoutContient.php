<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hville</title>
</head>
<body>
<?php
if(isset($_POST['id_salle']) && isset($_POST['id_service']) && isset($_POST['id_employe'])){
$id_post = $_POST['id_salle'];
$nom_employe = $_POST['id_service'];
$prenom_employe = $_POST['id_employe'];

$User = "AdminHville";
$Passwd="P@ssword";
$dsn="mysql:host=localhost;dbname=Hville";
try{
$db = new PDO($dsn,$User,$Passwd);
} catch(PDOException $e){
 echo "<P> La base de données n'est pas accessible ! </p>";
}

$id_salle= $db->quote($id_salle); 
$id_service= $db->quote($id_service);
$id_employe= $db->quote($id_employe);

$requete = "INSERT INTO `hville`.`contient` (`id_service`, `id_salle`, `id_employe`) 
VALUES ($id_service, $id_salle, $id_employe);";
echo "informations enregistrées";
?>
<a href="../index.php">
    <button>Cliquez ici pour retourner à la page d'accueil.</button>
  </a>
<?php
$res = $db->query($requete);
if($res == false){
 echo "<p>requete echouée, veuillez réessayé.</p>";
}
}
?>
</body>
</html>