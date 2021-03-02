<?php
  $host = 'localhost';
  $dbname = 'compta';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM adhesion";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<!DOCTYPE html>
<html>
<head>Afficher la liste des adhésions</head>
<body>
 <h1>Liste des adhésions</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Date</th>
       <th>Adhérent</th>
       <th>Montant</th>
       <th>Commentaire</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['date']); ?></td>
       <td><?php echo htmlspecialchars($row['adherent']); ?></td>
       <td><?php echo htmlspecialchars($row['montant']); ?></td>
       <td><?php echo htmlspecialchars($row['commentaire']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
 <a href="index.php">Retour</a>
</body>
</html>