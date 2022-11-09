<?php 

$link = mysqli_connect("localhost", "root", "", "contact");

$sqli = "SELECT * FROM `contact`";

$result = mysqli_query($link, $sqli);

/*while ($row = mysqli_fetch_assoc($result)){
    var_dump($row);
}*/
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">MAIL</th>
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_assoc($result)) : ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row["id"] ?> </th>
      <th scope="row"><?php echo $row["nom"] ?> </th>
      <th scope="row"><?php echo $row["prenom"] ?> </th>
      <th scope="row"><?php echo $row["mail"] ?> </th>
    </tr>

  </tbody>
  <?php endwhile ?>
</table>