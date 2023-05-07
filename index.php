<?php
$servername = "localhost"; //serveur
$username = "root";             //identifiant
$password = "";                 //mot de passe
$dbname = "voitures";               //nom de la base de données

$conn = new mysqli($servername, $username, $password, $dbname);  //connexion à MySQL

$sql = "SELECT * FROM carpark"; //Requete SQL, selection de id, prenom, nom et email

$result = $conn->query($sql); //Execution de la requete SQL
?>
<html>
<head><title>PHP</title></head>
<body>
<form action="insertion.php" method="post">
<fieldset>
<legend>Insertion dans la base de donn&eacute;es</legend>
<table>
<tr>
   <td>Code Voiture</td>
   <td><input type="text" name="code" required></td>
</tr>

<tr>
   <td>Modèle</td>
   <td><input type="text" name="modele" required></td>
</tr> 

<tr>
  <label for="pet-select">Carburant :</label>

<select name="carburant" id="pet-select">
    <option value="">--Please Choisir Carburant--</option>
    <option value="essence">Essence</option>
    <option value="diesel">Diesel</option>
    <option value="gpl">G.P.L</option>
    <option value="electrique">Electrique</option>
</select>

</tr>
 
<tr>
	<td><input type="submit" value="Insertion"></td>
	<td><input type="reset" value="Reinitialiser"></td>
</tr>	
</table>
</fieldset>
</form>
<!--//////////////////////////////////////////////////////////////////////-->
<form action="supprimer.php" method="post">
<fieldset>
<legend>Suppression d'une ligne dans la base de donnees</legend>
<table>
<tr>
   <td>Code</td>
   <td>
   <select name="idsuppression">
   <?php
   if ($result->num_rows > 0) {  //Si le nombre des lignes est plus grand que 0 (s'il y a des lignes)
	
	while($row = $result->fetch_assoc()) {  //Récupérer des résultats sous forme de tableau associatif

		echo "<option>"	;
		echo $row["code"]; //meme nom du champ existant dans la base de données
	}
		echo"</option>";

}

	else {
		echo "0 results";
}

$conn->close();
?>
   </select>
   </td>
</tr>

<tr>
	<td><input type="submit" value="Suppression"></td>
	<td><input type="reset" value="Reinitialiser"></td>
</tr>	
</table>
</fieldset>
</form>
<!--//////////////////////////////////////////////////////////////////////-->
<form action="modifier.php" method="post">
<fieldset>
<legend>Modification d'une ligne dans la base de donn&eacute;es</legend>
<table>
<tr>
   <td>ID</td>
   <td><input type="text" name="idmodification" required></td>
</tr>
<tr>
   <td>Code Voiture</td>
   <td><input type="text" name="code" required></td>
</tr>

<tr>
   <td>Modèle</td>
   <td><input type="text" name="modele" required></td>
</tr> 

<tr>
  <label for="pet-select">Carburant :</label>

<select name="carburant" id="pet-select">
    <option value="">--Please Choisir Carburant--</option>
    <option value="essence">Essence</option>
    <option value="diesel">Diesel</option>
    <option value="gpl">G.P.L</option>
    <option value="electrique">Electrique</option>
</select>

<tr>
	<td><input type="submit" value="Modifier"></td>
	<td><input type="reset" value="Reinitialiser"></td>
</tr>	
</table>
</fieldset>
</form>

<!-- ALTER TABLE utilisateurs AUTO_INCREMENT=1;  pour commencer par id=1 --> 