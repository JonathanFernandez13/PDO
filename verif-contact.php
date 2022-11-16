<!-- <
$nom = 'Fernandez';
$prenom = 'Jonathan';
$message = 'c\'est la D !!';
$var="User', nom='jojo";
$a=new PDO("mysql:host=localhost;dbname=contact;","root","");
$b=$a->prepare("INSERT INTO pdo VALUES user=:var");
$b->bindParam(":var",$var);
$b->execute();
var_dump($b); -->

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = "localhost"; $dbname = "contact"; $user = "root"; $pass = "";
      
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $sujet= $_POST['sujet'];
                $message = $_POST['message'];
               
              
                //$sth appartient à la classe PDOStatement
                $sth = $dbco->prepare("
                    INSERT INTO contact(nom, prenom, email, tel, sujet, message) VALUES (:nom, :prenom, :email, :tel, :sujet, :message)");
                $sth->execute([':nom' => $nom,
                                ':prenom' => $prenom,
                                ':email' => $email,
                                ':tel' => $tel,
                                ':sujet' => $sujet,
                                ':message' => $message,
                                ]);
                echo "Entrée ajoutée dans la table";
                header("location:users.php");
            }
                  
            catch(PDOException $e){
                echo "Erreur ça marche pas du tout!!! : " . $e->getMessage();
            }
        ?>
    </body>
</html>


<!--  
// if(empty($nom) || empty($prenom)) {
//     echo "le formulaire est imcomplet";
//     }else{
//     $result = mysqli_query($link, $sql);
//     echo "bienvenue";
//     }
    

#while($row = mysqli_fetch_assoc($result)){
    #var_dump($row);
#}
//     $mail = $_POST["email"];
//     $password = $_POST['password'];
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
// var_dump($hashed_password);

//     $sqli = "INSERT INTO user (`mail`, `password`) VALUES ('$mail',  '$hashed_password')";

//     var_dump($_POST);

//     if ( empty($mail) || empty($password)){
//         header("location:fomr-user.php?add=0");
//     }else{
//         if($result = mysqli_query($link, $sqli)){
//             header("location:fomr-user.php?add=1");
//         }else{

//         }
//     } -->

//     <?php 

// $var="User', email='test";
//
// $a=new PDO("mysql:host=localhost;dbname=database;","root","");
// permet de faire la connexion a ma BDD

// $b=$a->prepare("UPDATE users SET user=:var");
//prepare ma requete sql aant de la faire executer

// $b->bindParam(":var",$var);
//On va pouvoir d’abord appeler les méthodes bindParam() ou bindValue() pour respectivement
// lier des variables ou des valeurs à nos marqueurs puis ensuite exécuter execute().

// $b->execute();
//  permet d'executer une requete preparer
// ?>
 <!-- #if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["mail"]) || empty($_POST["tel"]) || empty($_POST["sujet"]) || empty($_POST["message"])){
    #echo "error message not sent!";
#}else{
    #echo "message sent with success";
#}*/
#?> -->