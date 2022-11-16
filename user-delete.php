<?php
$servname = "localhost"; $dbname = "contact"; $user = "root"; $pass = "";
try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sth appartient à la classe PDOStatement
    $id = $_GET['id'];
    $sth = $dbco->prepare("DELETE FROM contact WHERE id= $id");
    $sth->execute(); 
    header("location:users.php");
}    
catch(PDOException $e){
    echo "Erreur ça marche pas du tout!!! : " . $e->getMessage();
}
?>