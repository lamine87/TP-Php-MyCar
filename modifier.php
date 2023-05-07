<?php
$servername = "localhost";      //serveur
$username = "root";             //identifiant
$password = "";                 //mot de passe
$dbname = "voitures";               //nom de la base de données

$conn = new mysqli($servername, $username, $password, $dbname); //connexion à MySQL

$sql = "UPDATE carpark
        SET code = '".$_POST["code"]."', modele = '".$_POST["modele"]."', carburant = '".$_POST["carburant"]."' 
		WHERE id ='".$_POST["idmodification"]."'";  //Requete SQL

if ($conn->query($sql) == TRUE) {  //Execution de la requete SQL
    echo("<script>alert('Modification du ligne avec succès!')</script>");
    echo("<script>window.location = 'index.php';</script>");
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  //Fermeture de la connexion
?> 