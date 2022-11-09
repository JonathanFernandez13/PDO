<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>USERS</title>
</head>
<body>
<?php 
    $servname = "localhost"; $dbname = "contact"; $user = "root"; $pass = "";$link = mysqli_connect("localhost", "root", "", "contact");
 
  try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    //$sth appartient à la classe PDOStatement
    $sth = $dbco->prepare("SELECT * FROM contact");
    $sth->execute(); 
    $results = $sth->fetchAll(PDO::FETCH_ASSOC);
}    
catch(PDOException $e){
    echo "Erreur ça marche pas du tout!!! : " . $e->getMessage();
}
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TEL</th>
      <th scope="col">SUJET</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">DELETE</th>  
    </tr>
  </thead>
  
  <tbody class="">
  <?php foreach ($results as $result) : ?>
    <tr>
      <td scope="row"><?php echo $result['id']  ?></td>
      <td scope="row"><a class="text-success" href="user.php?id=<?= $result['id'] ?>"><?php echo $result['nom']?></a></td>
      <td scope="row"><?php echo $result['prenom']?></td>
      <td scope="row"><?php echo $result['email']?></td>
      <td scope="row"><?php echo $result['tel']?></td>
      <td scope="row"><?php echo $result['sujet']?></td>
      <td scope="row"><?php echo $result['message']?></td>
      <td scope="col">
        <button class="btn btn-danger">
            <a  class="text-dark"href="user-delete.php?id=<?= $result['id'] ?> "> DELETE</a>
        </button>
      </td>
      </tr>
<?php endforeach ?>
  </tbody>
  </table>

  </body>
</html>