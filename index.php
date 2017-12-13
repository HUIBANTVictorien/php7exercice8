<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>exercice 7 partie 7 php</title>
</head>
<body>
  <p><?php
  if (isset($_POST['civility']) && ($_POST['lastname']) && ($_POST['firstname']) && isset($_FILES['myFile'])) {
    $infosfichier = pathinfo($_FILES['myFile']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('pdf');
    if (in_array($extension_upload, $extensions_autorisees))
    {
      echo 'Bonjour ' . $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . '. Votre fichier est : ' . $_FILES['myFile']['name'];
      $infosfichier = pathinfo($_FILES['myFile']['name']);
    } else {
      echo 'Ce fichier n\'est pas un fichier PDF !'; ?> <a href="index.php">Retour</a> <?php
    }
  } else {
    ?>
    <form class="form" action="index.php" method="post" enctype="multipart/form-data">
      <select class="civility" name="civility">
        <option value="Monsieur" name="Monsieur">Monsieur</option>
        <option value="Madame" name="Madame">Madame</option>
      </select>
      <input type="lastname" name="lastname" placeholder="Nom">
      <input type="firstname" name="firstname" placeholder="Prénom">
      <input type="file" name="myFile">
      <button type="submit" name="validate">Valider</button>
    </form>
  <?php }
  ?>
</p>
</body>
</html>
