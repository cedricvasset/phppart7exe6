<?php
if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['civility']) && preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_POST['firstname']) && preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_POST['lastname'])){
  echo 'Vous êtes ' . $_POST['civility'] . ' ' . $_POST['lastname'] . ' et votre prénom est: ' . $_POST['firstname'];
}else{
echo document.getElementById("formulaire").style.display = "block";
 }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part7 exe6</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <form id ="formulaire" action="index.php" method="POST" >
    <label for="civility">Civilité</label>
    <select name = "civility" id="civility" class="form-control" >
      <option value=""></option>
      <option value="Madame">Madame</option>
      <option value="Monsieur">Monsieur</option>
    </select>

    <div class="form-group">
      <label class="col-form-label" for="lastname">Nom</label>
      <input  id="lastname" name="lastname" type="text" class="form-control" placeholder="Nom" id="inputDefault" />
    </div>
    <div class="form-group">
      <label class="col-form-label" for="firstname">Prénom</label>
      <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Prénom" id="inputDefault" />
    </div>
    <button type="submit" name="submit"class="btn btn-success">soumettre</button>
  </form>
      <p><a href="index.php">retour</a></p>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
