<?php
$servname = "localhost"; $dbname = "contact"; $user = "root"; $pass = "";
try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sth appartient à la classe PDOStatement

    
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];


$sth = $dbco->prepare("UPDATE contact SET nom = '$nom', prenom = '$prenom', email = '$email', tel = '$tel', sujet = '$sujet', message = '$message'  WHERE id= $id"); 

$sth->execute([
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':email' => $email,
    ':tel' => $tel,
    ':sujet' => $sujet,
    ':message' => $message
    ]);
    echo "MODIFICATION REUSSI";
    header("location:users.php");
//  $results = $sth->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    echo "Erreur ça marche pas du tout!!! : " . $e->getMessage();
}
 ?>
