<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php

$servname = "localhost"; $dbname = "exoup"; $user = "root"; $pass = "";

try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecxion établie";
}
catch(PDOException $e){
    echo "Erreur ça marche pas du tout!!! : " . $e->getMessage();
}

$email = $_POST["email"];
$mdp = $_POST['mdp'];
$mdp = password_hash($mdp, PASSWORD_DEFAULT);
// var_dump($hashed_mdp);
var_dump($mdp);

$sth = $dbco->prepare("INSERT INTO register (email, mdp) VALUES (:email, :mdp)");

$sth->execute([
            ':email' => $email,
            ':mdp' => $mdp,
            ]);

if ( empty($email) || empty($mdp)){
    header("location:register-form.php?add=0");
}else{
        echo "<div class='sucess'>
                <h3>Vous êtes inscrit avec succès.</h3>
                <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
              </div>";
    }
    
?>