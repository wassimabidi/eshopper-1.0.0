<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</head>
<body>
    <h1 align="center">Register</h1>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nom</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">prenom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" required name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Age</label>
    <input type="number" class="form-control" id="exampleInputPassword1" required name="age">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="exampleInputPassword1" required name="adresse">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ville</label>
    <input type="text" class="form-control" id="exampleInputPassword1" required name="ville">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" required name="mail">
  </div>
  <div>
  <td><input type="reset" value="Effacer"></td>
   <td><input type="submit" value="Envoyer"></td>
  </div>
</form>
      </div>
    </div>
</div>    
</body>
</html>
<?php
include("connexion.php");
$idcom=connexpdo('magasine','myparam');
if(!empty($_POST['nom'])&& !empty($_POST['adresse'])&& !empty($_POST['ville'])) 
{
    $retour = $idcom->prepare("INSERT INTO client (nom,prenom,age,adresse,ville,mail) VALUES (:nom,:prenom,:age,:adresse,:ville,:mail)");
    $retour->bindParam(':nom', $_POST['nom'],PDO::PARAM_STR); // parametre de sortie 
    $retour->bindParam(':prenom', $_POST['prenom'],PDO::PARAM_STR);
    $retour->bindParam(':age', $_POST['age'],PDO::PARAM_INT);
    $retour->bindParam(':adresse', $_POST['adresse'],PDO::PARAM_STR);
    $retour->bindParam(':ville', $_POST['ville'],PDO::PARAM_STR);
    $retour->bindParam(':mail', $_POST['mail'],PDO::PARAM_STR);
    $retour->execute();

    
$nblignes=1; 
if($nblignes!=1) 
{
$mess_erreur=$idcom->errorInfo();
echo "Insertion impossible, code", $idcom->errorCode(),$mess_erreur[2];
echo "<script type=\"text/javascript\">
alert('Erreur : ".$idcom->errorCode()."')</script>";
}
else
{
echo "<script type=\"text/javascript\">
alert('Vous êtes enregistré. Votre numéro de client est :
". $idcom->lastInsertId()."')</script>"; 
$idcom=null;
}
}
else {echo "<h3>Formulaire à compléter !</h3>";}
?>
