<?php
$servname = "localhost"; $dbname = "exoup"; $user = "root"; $pass = "";

 try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);

    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexio Réussi !!!";
 }  
 catch(PDOException $e){
    echo "Erreur ça marche pas du tout!!! : " . $e->getMessage();
}
 

$email = $_POST["email"];
$mdp = $_POST['mdp'];
$mdp = password_hash($mdp, PASSWORD_DEFAULT);
 
    var_dump($email);
    var_dump($mdp);
 
    $sth = $dbco->prepare("INSERT INTO register (email, mdp) VALUES (:email, :mdp)");

    $sth->execute([
                    ':email' => $email,
                    ':mdp' => $mdp,
                 ]);
 
                 if ( empty($email) || empty($mdp)){
                    echo"Erreur Enregistrement Échoué !!!";
                }else{
                        echo "Enregistrement Réussi BG";
                     }                    