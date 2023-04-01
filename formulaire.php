
<?php
session_start();
?>
<?php
echo"<!DOCTYPE html>";
echo"<html lang=en>";
echo"<head>;
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>
    
</head>";
echo"<body>";
    echo"<h1 align=center>Vos coordonnées</h1>";
echo"<div class=\"album py-5 bg-light\">";
    echo"<div class=\"container\">";
      echo"<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">";
      echo"<form method=post action=commande.php>";
  echo"<div class=\"mb-3\">";
    echo"<label for=\"exampleInputEmail1\" class=\"form-label\">nom</label>";
    echo"<input type=\"name\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" name=\"nom\" required value= $_SESSION[nom]>";
  echo"</div>";

  echo"<div class=mb-3>";
    echo"<label for=exampleInputPassword1 class=form-label>prenom</label>";
    echo"<input type=text class=form-control id=exampleInputPassword1 required value= $_SESSION[prenom]>";
  echo"</div>
  <div class=mb-3>
    <label for=exampleInputPassword1 class=form-label>Age</label>
    <input type=number class=form-control id=exampleInputPassword1 required value= $_SESSION[age]>
  </div>
  <div class=mb-3>
    <label for=exampleInputPassword1 class=form-label>Adresse</label>
    <input type=text class=form-control id=exampleInputPassword1 required name=adresse value= $_SESSION[adresse]>
  </div>
  <div class=mb-3>
    <label for=exampleInputPassword1 class=form-label>Ville</label>
    <input type=text class=form-control id=exampleInputPassword1 required name=ville value= $_SESSION[ville]>
  </div>
  <div class=mb-3>
    <label for=exampleInputPassword1 class=form-label>email</label>
    <input type=text class=form-control id=exampleInputPassword1 required name=mail value= $_SESSION[mail]>
  </div>
  <div>
  <td><input type=reset value=Effacer></td>
   <td><input type=submit value=Envoyer></td>
  </div>
</form>
      </div>
    </div>
</div>    
</body>
</html>";
//$i=$_GET['identifiant'];
//header('Location: commande.php?identifiant='.$i);
$_SESSION['identifiant']=$_GET['identifiant'];
  ?>