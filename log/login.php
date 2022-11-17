<?php


    $servname = "localhost"; $dbname = "exoup"; $user = "root"; $pass = "";
 $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);

  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connexion SERVEUR Réussi !!!";

    $email = $_POST['email'];
    $mdp = $_POST['mdp'];


    $sql = "SELECT * FROM register WHERE email = '$email' ";
    $result = $dbco->prepare($sql);
    $result->execute();


        $data = $result->fetch(PDO::FETCH_ASSOC);
        var_dump($result->rowCount());
        if (password_verify($mdp, $data["mdp"]))
        {
            echo"<h1>connexion ok</h1>";
            session_start();
            $_SESSION['email'] = $email;
        }
    else {
        echo" adresse mail ou le mot de passe invalide";
    }

// if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
//     $email = $_POST['email'];
//     $mdp = $_POST['mdp'];
//     $mdp = password_hash($mdp, PASSWORD_DEFAULT);
//     // $verify = password_verify($mdp);
//     var_dump($email);
//     var_dump($mdp);
 
//     $sth = $dbco->prepare('SELECT * FROM users WHERE email = :email');
//     $sth->bindValue('email', $email);
//     $sth->execute([
//                     ':email' => $email,
//                   ]);
//     $res = $sth->fetch(PDO::FETCH_ASSOC);
    
//     var_dump($res);
    
//     if ($res) {
//         $mdp = $res['mdp'];
//         if (password_verify($mdp)) {
//             echo "Connexion réussie !";
//         } else {
//             echo "Identifiants invalides";
//         }
//     } else {
//         echo "Identifiants invalides";
//     }
// }


 
// if (!empty($_POST['email']) && !empty($_POST['password'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];
 
//     var_dump($email);
//     var_dump($password);
 
//     $q = $db->prepare('SELECT * FROM users WHERE email = :email');
//     $q->bindValue('email', $email);
//     $q->execute();
//     $res = $q->fetch(PDO::FETCH_ASSOC);
    
//     var_dump($res);
    
//     if ($res) {
//         $passwordHash = $res['password'];
//         if (password_verify($password, $passwordHash)) {
//             echo "Connexion réussie !";
//         } else {
//             echo "Identifiants invalides";
//         }
//     } else {
//         echo "Identifiants invalides";
//     }
// }