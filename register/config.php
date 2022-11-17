<?php
// Informations d'identification
// constante en PHP
define('DB_SERVER', 'localhost');
define('DB_EMAIL', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'contact');
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_EMAIL, DB_PASSWORD, DB_NAME);
// Vérifier la connexion
if($conn === false){
die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
