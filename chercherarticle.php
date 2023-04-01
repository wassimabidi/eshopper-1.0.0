<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Rechercher un article dans le magasin</title>
</head>
<body>
<form action= "<?php echo $_SERVER['PHP_SELF']?>" method="post"
enctype="application/x-www-form-urlencoded">
<fieldset>
<legend><b>Rechercher un article en magasin</b></legend>
<table>
<tbody>
<tr> <td>Mot-clé : </td>
<td><input type="text" name="motcle" size="40" maxlength="40" /></td>
</tr>
<tr>
<td>Dans la catégorie : </td>
<td>
<select name="categorie">
<option value="tous">Tous</option>
<option value="dress">dress</option>
<option value="Accessoires">Accessoires</option>
<option value="bags">bags</option>
<option value="Shirts">Shirts</option>
</select>
</td>
</tr>
<tr>
<td>Trier par : </td>
<td>
<select name="tri">
<option value="prix">Prix</option>
<option value="categorie">Catégorie</option>
<option value="id_article">Code</option>
</select>
</td>
</tr>
<tr><td>En ordre : </td>
<td>Croissant<input type="radio" name="ordre" value="ASC" checked="checked"/>
Décroissant<input type="radio" name="ordre" value="DESC" />
</td> </tr>
<tr><td>Envoyer</td><td><input type="submit" name="" value="OK"/></td> </tr>
</tbody>
</table>
</fieldset>
</form>
<?php
if(!empty($_POST ['motcle'])) 
{
include("connexion.php");
$motcle=strtolower($_POST ['motcle']); 
$categorie=($_POST ['categorie']); 
$ordre=($_POST ['ordre']); 
$tri=($_POST ['tri']); 
// Requête SQL
$reqcategorie=($_POST['categorie']=="tous")?"":"AND categorie='$categorie'";  
$idcom=connexpdo('magasine','myparam');
$result=$idcom->prepare("SELECT id_article AS 'Code article',desgin AS 'Description',prix,categorie AS 'Catégorie' FROM article WHERE lower(desgin)LIKE'%$motcle%'".$reqcategorie."ORDER BY $tri $ordre");
//$result=$idcom->prepare("SELECT id_article AS 'Code article',desgin AS 'Description',prix,categorie AS 'Catégorie' FROM article WHERE lower(desgin)LIKE'%:motcle%'".$reqcategorie."ORDER BY $tri $ordre");
//$result->bindColumn(':motcle',$motcle);
$result->bindColumn('id_client',$id_client);
$result->bindColumn('nom', $nom); 
$result->bindColumn('prenom', $prenom); 
$result->bindColumn('adresse', $adresse);
$result->bindColumn('ville', $ville);
$result->bindColumn('mail', $age);
$result->bindColumn('age', $age);
$result->execute();
//$result=$idcom->query($requete); 
if(!$result) 
{
echo "Lecture impossible";
}
else
{
$nbcol=$result->columnCount();
$nbart=$result->rowCount();
if($nbart==0)
{
echo "<h3>Il n'y a aucun article correspondant au mot-clé : $motcle</h3>";
exit;
}
$ligne=$result->fetch(PDO::FETCH_ASSOC); // Tableau associatif
$titres=array_keys($ligne);
$ligne=array_values($ligne);
// print_r($titres);
echo "<h3>Il y a $nbart articles correspondant au mot-clé : $motcle</h3>";
// Affichage des titres du tableau
echo "<table border=\"1\"> <tr>";
foreach($titres as $val)
{
echo "<th>", htmlentities($val) ,"</th>";
}
echo "</tr>";
// Affichage des valeurs du tableau
do
{
echo "<tr>";
foreach($ligne as $donnees)
{
echo "<td>",$donnees,"</td>";
}
echo "</tr>";
}
while($ligne=$result->fetch(PDO::FETCH_NUM));
}
echo "</table>";
//$result->closeCursor();
$idcom=null;
}
?>
</body>
</html>