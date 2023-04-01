<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>DELETE</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend><b>DELETE</b></legend>
<table><tbody>
<tr>
<td>id_client: </td>
<td><input type="text" name="id_client" size="20" maxlength="10"/></td> 
</tr>
<tr>
<td>DELETE : </td>
<td><input type="submit" value="DELETE"/></td>
</tr>
</tbody></table>
</fieldset>
</form>
</body>
</html>
<?php

include('connexion.php');
$idcom=connexpdo('magasine','myparam');

if(!isset($_POST['codeUtilisateur']))
$id_client=($_POST['id_client']);
{
    
   
    $result=$idcom->prepare("DELETE FROM user WHERE  iduser= :id_client");
    $result->bindValue(':id_client',$id_client,PDO::PARAM_INT);
    $result->execute();

    
   
}
?>