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
    <h1 align="center">Connexion</h1>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="application/x-www-form-urlencoded">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">login</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de pass</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required name="pass">
  </div>
  <div>
  <button type="submit" name="valider">Submit</button>
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


if(!empty($_POST['login'])&& !empty($_POST['pass'])) 
{
$login=$idcom->quote($_POST['login']); 
$pass=$idcom->quote($_POST['pass']); 
$result=$idcom->prepare("SELECT * FROM user WHERE lower(login)=$login AND lower(pass)=$pass"); 
$result->bindValue(':login',$login,PDO::PARAM_STR);
$result->bindValue(':pass',$pass,PDO::PARAM_STR);
$result->execute();
$nombre=$result->rowCount();


if($nombre==0)
{
echo "<h3>login n'existe pas</h3>";
exit;
}

else
{ 
  $ligne=$result->fetch(PDO::FETCH_ASSOC); // Tableau associatif
   $ligne=array_values($ligne);
     
   if ($ligne[3]=='Utilisateur')
       { /*echo "<h1>welcome Mr l'administrateur</h1>";
        echo "<a href=voscontact.php>Voir les contact </a> <br>";
        echo "<a href=Update_User.php>mettre à jour un utilisateur </a> <br>";
        echo "<a href=supprimeruser.php>supprimer un utilisateur </a> <br>";
        echo "<a href=finduser.php>chercher un uitlisateur </a> <br>";
        echo "<a href=chercherarticle.php>chercher un article </a> <br>";
        echo "<a href=ajouteruser.php>ajouter un utilisateur </a> <br>";*/
       header('location:index.php'); 
      }
      else
      {
        header('location:admin.php');
        
      }

    
}
}
?>
