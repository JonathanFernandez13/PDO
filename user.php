<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>  TABLEAU USER</title>
</head>
<body>
<?php 
 
 $servname = "localhost"; $dbname = "contact"; $user = "root"; $pass = "";$link = mysqli_connect("localhost", "root", "", "contact");
 
  try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sth appartient à la classe PDOStatement
    htmlspecialchars($id = $_GET['id'], ENT_QUOTES);
    $sth = $dbco->prepare("SELECT * FROM contact WHERE id = $id ");
    $sth->execute(); 
    $results = $sth->fetch(PDO::FETCH_ASSOC);
}    
catch(PDOException $e){
    echo "Erreur ça marche pas du tout!!! : " . $e->getMessage();
}
?>
    <h1 class="text-center">Update User</h1>
        <form class="form_user mt-5" method="POST" action="update-user.php">
            <input type="hidden" name="id" value="<?php echo $results['id']; ?>">
            <div class="form-group">
                <label for="nom">NOM</label>
                <input type="text" name="nom" class="" value="<?php echo htmlspecialchars($results['nom'], ENT_QUOTES);?>">
            </div>
            <div class="form-group">
                <label for="prenom">PRENOM</label>
                <input type="text" name="prenom" class="" value="<?php echo htmlspecialchars($results['prenom'], ENT_QUOTES);?>">
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email" name="email" class="" value="<?php echo htmlspecialchars($results['email'], ENT_QUOTES);?>">
            </div>
            <div class="form-group">
                <label for="tel">TEL</label>
                <input type="number" name="tel" class="" value="<?php echo htmlspecialchars($results['tel'], ENT_QUOTES);?>">
            </div>
            <div class="form-group">
                <label for="sujet">SUJET</label>
                <input type="text" name="sujet" class="" value="<?php echo htmlspecialchars($results['sujet'], ENT_QUOTES);?>">
            </div>
            <div class="form-group">
                <label for="message">MESSAGE</label>
                <input type="text" name="message" class="" value="<?php echo htmlspecialchars($results['message'], ENT_QUOTES);?>">
            </div>
            <div>
                <button class="btn btn-success" type="submit">
                   Envoyer
                </button>
            </div>
            
        </form>
<?php

  