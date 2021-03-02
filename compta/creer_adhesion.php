<!DOCTYPE html>
<html>
  <head>
    <title>Créer une adhsion</title>
  </head>
  <body>
    <form action="adhesion_post.php" method="post">
      <p>ID :<input type="text" name="id"></p>
      <p>DATE :<input type="text" name="date"></p>
      <p>ADHERENT :<input type="text" name="adherent"></p>
      <p>MONTANT :<input type="number" name="montant"></p>
      <p>COMMENTAIRE :<input type="text" name="commentaire"></p>
      <p><input type="submit" name="insert" value="Créer"></p>
    </form>
    <a href="index.php">Retour</a>
  </body>
</html>