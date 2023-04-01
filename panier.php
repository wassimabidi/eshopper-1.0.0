<?php
include("connexion.php");
$idcom=connexpdo('magasine','myparam');
$id=$_GET['id'];


$result=$idcom->prepare("SELECT * FROM article where id_article=$id"); 
$requete=$idcom->prepare("SELECT img FROM article where id_article=$id"); 


$result->bindColumn(':id_article',$id);
$requete->bindColumn(':id_article',$id);
$result->execute();
$requete->execute();
 
$nb=$result->rowCount();
$ligne=$result->fetch(PDO::FETCH_ASSOC); 
$va=$requete->fetch(PDO::FETCH_ASSOC); 
$titres=array_keys($ligne);
$ligne=array_values($ligne);
echo "<h1>votre panier</h1>";
echo "<table border=\"1\"> <tr>";
foreach($titres as $val)
{
echo "<th>", htmlentities($val) ,"</th>";
}

// Affichage des valeurs du tableau
do
{
echo "<tr>";
foreach($va as $donnees)
{
//echo "<td>",$donnees,"</td>";
echo "<td>",$ligne[0],"</td>";
echo "<td>",$ligne[1],"</td>";
echo "<td>",$ligne[2],"</td>";
echo"<td>",$ligne[3],"</td>";
echo "<td><img src=$donnees alt=$donnees width=100px></td>";

}
echo "</tr>";
echo "<a href=commande.php?id=$ligne[0]><input type=button value=passer_une_commande></a>";
}
while($ligne=$result->fetch(PDO::FETCH_NUM));

echo "</table>";
echo "<form action=supprimerproduit.php>";
echo "<a href=rechercher.php><input type=button value=rechercher_un_produit></a>";
echo "</form>";
//$result->closeCursor();
$idcom=null;

?>


