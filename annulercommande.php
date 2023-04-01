<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form align='center' method="$_POST">
        <h1>nous vous remercions de la confiance que vous accordez à nos</h1>
        <p>Votre supression est effectuée </p><br>
        <br>
         <a href="voirpanier.php"><input  type='button'value='visitez votre panier'></a>
    </form>
</body>
</html>
<?php
include('connexion.php');
$idcom=connexpdo('magasine','myparam');
 //if(isset($_POST['valider']))
 {  
    $i=$_GET['ide'];
    $result=$idcom->prepare("DELETE FROM panier WHERE  id_panier=:i");
    $result->bindValue(':i',$i,PDO::PARAM_INT);
    $result->execute();
    
 }
?>