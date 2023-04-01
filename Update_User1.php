<?php
if(empty($_POST['code'])){header("Location:Update_User.php");
} 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Modifiez vos coordonnées</title>
</head>
<body>
<?php
include('connexion.php');
$idcom=connexpdo('magasine','myparam');
if(!isset($_POST['modif'])) 
{
$code=(integer)$_POST['code']; 
// Requête SQL
$requete="SELECT * FROM user WHERE iduser='$code' "; 
$result=$idcom->prepare($requete);

$result->execute();
$coord=$result->fetch(PDO::FETCH_NUM);
echo "<form action= \"". $_SERVER['PHP_SELF']."\" method=\"post\"enctype=
\"application/x-www-form-urlencoded\">";
echo "<fieldset>";
echo "<legend><b>Modifiez vos coordonnées</b></legend>";
echo "<table>";
echo "<tr><td>Login : </td><td><input type=\"text\" name=\"login\" size=\"40\"maxlength=\"30\" value=\"$coord[1]\"/> </td></tr>";
echo "<tr><td>pass : </td><td><input type=\"text\" name=\"pass\" size=\"40\"
maxlength=\"30\" value=\"$coord[2]\"/></td></tr>";
echo "<tr><td>Role : </td><td><input type=\"text\" name=\"Role\" size=\"40\"
maxlength=\"60\" value=\"$coord[3]\"/></td></tr>";
echo "<tr><td><input type=\"reset\" value=\"Effacer\"></td> <td><input type=
\"submit\" name=\"modif\" value=\"Enregistrer\"></td></tr></table>";
echo "</fieldset>";
echo "<input type=\"hidden\" name=\"code\" value=\"$code\"/>"; 
echo "</form>";
$result->closeCursor();
$idcom=null;
}
elseif(isset($_POST['login'])&& isset($_POST['pass'])&& isset($_POST['Role'])) 
{
// ENREGISTREMENT
$login=$idcom->quote($_POST['login']);
$pass=$idcom->quote($_POST['pass']); 
$Role=$idcom->quote($_POST['Role']);
$code=(integer)$_POST['code'];
// Requête SQL
//$requete="UPDATE client SET nom=$nom,prenom=$prenom,adresse=$adresse,ville=$ville,mail=$mail,age=$age WHERE id_client=$code"; 

//$result=$idcom->exec($requete);
$retour=$idcom->prepare("UPDATE user SET Login=$login,pass=$pass,Role=$Role where iduser=$code");

$retour->bindColumn(':login', $login ); 
$retour->bindColumn(':pass', $pass); 
$retour->bindColumn(':Role', $Role);

$retour->execute();

}
?>
</body>
</html>
