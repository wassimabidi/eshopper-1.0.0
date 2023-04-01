<?php
include("connexion.php");
$idcom=connexpdo('magasine','myparam');
$result=$idcom->query("SELECT * FROM message_contact");
//*****Liaison des résultats à des variables
$result->bindColumn('prenom', $prenom);
$result->bindColumn('nom', $nom);
$result->bindColumn('email', $email);
$result->bindColumn('tele', $tele);
$result->bindColumn('sujet', $sujet);
$result->bindColumn('Message', $Message);
//*****Affichage
$dt=time();
echo "<div><h1>Welcome Mr L'administrateur</h1>";
echo "<div><h3>Il y a ", $result->rowCount() ,"contacts le ".date( "d/m/Y H:i:s ", $dt)."<br>";
echo "<br>";
echo "<table border=1px>";
echo "<tr>";
echo "<th>nom</th>";
echo "<th>prenom</th>";
echo "<th>email</th>";
echo "<th>tele</th>";
echo "<th>sujet</th>";
echo "<th>Message</th>";
echo "</tr>";
while($ligne=$result->fetch(PDO::FETCH_BOUND))
{

echo "<tr>";

echo "<td>$nom</td>";
echo "<td>$prenom</td>";
echo "<td>$email</td>";
echo "<td>$tele</td>";
echo "<td>$sujet</td>";
echo "<td>$Message</td>";
echo "<td><input type=button value=lu id=\"lu\"></td>";
echo "<td><input type=button value=nonlu id=\"nonlu\"><td>";
echo "</tr>";

}

echo "</table>";
echo "</div>";

$result->closeCursor();
$idcom=null;



?>