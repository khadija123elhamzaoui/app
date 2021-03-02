<!DOCTYPE html>
<html>
  <head>
    <title>Créer un don</title>
  </head>
  <body>
    <form action="depense_post.php" method="post">
      <p>DATE :<input type="text" name="date"></p>
      <p>FOURNISSEUR :<input type="text" name="fournisseur"></p>
      <p>MONTANT :<input type="number" name="montant"></p>
      <p>COMMENTAIRE :<input type="text" name="commentaire"></p>
      <p><input type="submit" name="insert" value="Créer"></p>
    </form>
    <a href="index.php">Retour</a>
  </body>
</html>