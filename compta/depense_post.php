<?php

$host = 'localhost';
$dbname = 'compta';
$username = 'root';
$password = '';

if(isset($_POST['insert'])){

  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }

  // récupérer les valeurs 
  $date = $_POST['date'];
  $fournisseur = $_POST['fournisseur'];
  $montant = $_POST['montant'];
  $commentaire = $_POST['commentaire'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `depense`(`date`, `fournisseur`, `montant`, `commentaire` ) VALUES (:date,:fournisseur,:montant,:commentaire)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":date"=>$date,":fournisseur"=>$fournisseur,":montant"=>$montant,":commentaire"=>$commentaire));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>