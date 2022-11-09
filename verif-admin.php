<?php
$link = mysqli_connect("localhost", "root", "", "contact");
//JE VERIFIE MA CONNECTION A MA BDD(base de donné)
if(mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
}

/*$nom =  $_POST["nom"];
$prenom = $_POST["prenom"];
$sql = "INSERT INTO utilisateurs ( nom, prenom ) VALUES ('$nom', '$prenom')";



 
if(empty($nom) || empty($prenom)) {
    echo "le formulaire est imcomplet";
    }else{
    $result = mysqli_query($link, $sql);
    echo "bienvenue";
    }*/
    

#while($row = mysqli_fetch_assoc($result)){
    #var_dump($row);
#}
    /*$name = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];*/
    $email = $_POST["email"];
    $password = $_POST["password"];
 var_dump($_POST);
    $sqli = "SELECT * FROM'admin'";
    if (empty($email) || empty($password)){
        header("location: admin.php?add=0");
    }else{
        if(mysqli_query($link, $sqli)){
            header("location: admin.php?add=1");
        }else{

        }
    }
 #if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["mail"]) || empty($_POST["tel"]) || empty($_POST["sujet"]) || empty($_POST["message"])){
    #echo "error message not sent!";
#}else{
    #echo "message sent with success";
#}*/
#?>