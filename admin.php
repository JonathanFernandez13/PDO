<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  TABLEAU ADMIN </title>
</head>
<body>
<h3 class="title-formulaire mt-5 mb-5">Connexion</h3>
                   <?php if (isset($_GET["add"]) && $_GET["add"] === 1) : ?>
                    <div class="alert alert-success">Connect Successfully.</div>
                    <?php  echo "CA MARCHE!!!"; ?>
                <?php elseif (isset($_GET["add"]) &&  $_GET["add"] == 0) :  ?>
                    <div class="alert alert-danger">Invalid Field ERROR!!! </div>
                <?php endif; ?> 
<form method="POST" action="verif-admin.php" id="myForm">
                    <div class="row mb-4">
                        <div class="col-md-5">
                            <div class="form-outline">
                                <input type="text"  name="email" id="email" class="form-control bg-light" placeholder="Mail" />
                                <span id="errorMail"></span>
                                <label class="form-label" for="email"></label>
                            </div>
                        </div>
                        <div class="col-md-5 md">
                            <div class="form-outline">
                                <input type="password" name="password" id="password" class="form-control bg-light" placeholder="Password" />
                                <span id="errorPassword"></span>
                                <label class="form-label" for="password"></label>
                            </div>
                        </div>
                        <input type="submit" value=" Envoyer" class="btn btn-dark btn-block mb-4" />
                    </div>
</form>
</body>
</html>