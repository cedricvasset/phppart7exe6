<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part7 exe5v2</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <form action="index.php" method="POST" enctype="multipart/form-data">

    <?php
    if(!empty($_POST['civility'])){
      ?>
      <p>Civilité : <?= $_POST['civility']; ?></p>
    <?php }elseif (isset($_POST['civility'])) {
      ?>
        <label for="civility">Civilité</label>
        <select name = "civility" id="civility" class="form-control" >
          <option value=""></option>
          <option value="Madame">Madame</option>
          <option value="Monsieur">Monsieur</option>
        </select>
    <p><?= 'merci de choisir un genre.)'?></p>
      <?php
    }
    else{?>
      <label for="civility">Civilité</label>
      <select name = "civility" id="civility" class="form-control" >
        <option value=""></option>
        <option value="Madame">Madame</option>
        <option value="Monsieur">Monsieur</option>
      </select>
    <?php }


    if(isset($_POST['lastname']) && !empty($_POST['lastname']) && preg_match(('/^[a-zéèàêâùïüëA-Z-\']+$/'), $_POST['lastname'])){
      $lastname = 'votre nom est: ' . $_POST['lastname'];
    }elseif(isset($_POST['lastname']) && !empty($_POST['lastname']) && !preg_match(('/^[a-zéèàêâùïüëA-Z-\']+$/'), $_POST['lastname'])){
      ?>
      <div class="form-group">
        <label class="col-form-label" for="lastname">nom</label>
        <input id="lastname" name="lastname" type="text" class="form-control" placeholder="nom"  />
      </div>
      <?php
      $lastname = 'merci d\'utiliser les caractères autorisés';
    }elseif(isset($_POST['lastname']) && empty($_POST['lastname'])){
      ?>
      <div class="form-group">
        <label class="col-form-label" for="lastname">nom</label>
        <input id="lastname" name="lastname" type="text" class="form-control" placeholder="nom"  />
      </div>
      <?php
      $lastname = 'merci de remplir le champ nom.';
    }else{ ?>
      <div class="form-group">
        <label class="col-form-label" for="lastname">nom</label>
        <input id="lastname" name="lastname" type="text" class="form-control" placeholder="nom"  />
      </div>
    <?php }?>
    <p><?= $lastname ?></p>

    <?php
    if (isset($_POST['firstname']) && !empty($_POST['firstname']) && preg_match(('/^[a-zéèàêâùïüëA-Z-\']+$/'), $_POST['firstname'])){
      $firstname = 'votre prénom est: ' . $_POST['firstname'];
    }elseif(isset($_POST['firstname']) && !empty($_POST['firstname']) && !preg_match(('/^[a-zéèàêâùïüëA-Z-\']+$/'), $_POST['firstname'])){
      ?>
      <div class="form-group">
        <label class="col-form-label" for="firstname">Prénom</label>
        <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Prénom"  />
      </div>
      <?php
      $firstname = 'merci d\'utiliser les caractères autorisés';
    }elseif(isset($_POST['firstname']) && empty($_POST['firstname'])){
      ?>
      <div class="form-group">
        <label class="col-form-label" for="firstname">Prénom</label>
        <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Prénom" />
      </div>
      <?php
      $firstname = 'merci de remplir le champ Prénom.';
    }else{ ?>
      <div class="form-group">
        <label class="col-form-label" for="firstname">Prénom</label>
        <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Prénom" />
      </div>
    <?php }?>
    <p><?= $firstname ?></p>

    <button type="submit" name="submit" class="btn btn-success">soumettre</button>
  </form>
  <p><a href="index.php">retour</a></p>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
