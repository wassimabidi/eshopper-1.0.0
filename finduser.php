<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Saisissez vos coordonnees</title>
</head>
<body>
<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="application/x-www-form-urlencoded">
<fieldset>
<legend><b>S'authentifier</b></legend>
<table>
</td></tr>
<tr><td>Login : </td><td><input type="text" name="login" size="40" maxlength="30"
/></td></tr>
<tr><td>pass : </td><td><input type="text" name="pass" size="40" maxlength="30"/>
</td></tr>
<tr>
<td><input type="submit" value="rechercher"></td>
</tr>
</table>
</fieldset>
</form>
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
echo "<p> Utilisateur existe</p>";
}
}

echo "<h3>Connexion compléter !</h3>";
?>
</body>
</html>
