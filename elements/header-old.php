<?php include_once "function.php" ?>
<?php $name_url = explode("/", $_SERVER['SCRIPT_NAME']) ;?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if ($name_url[2] === "index.php") : ?>
        <link rel="stylesheet" href="css/style.css">
    <?php elseif ($name_url[2] === "activite.php") : ?>
        <link rel="stylesheet" href="css/activite.css">
    <?php else : ?>
        <link rel="stylesheet" href="css/contact.css">
    <?php endif ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title> <?= isset($title) ? $title : "FITNESS"  ?> </title>
</head>

<body>
    <header>
        <!--NAV START-->
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top nav-fixed ">
            <a class="navbar-brand text-white pr-5 effect-dev" href="index.php">
                <img src="./images/logo.png" alt="">
            </a>
            <ul class="navbar-nav menu">
                <?php echo add_menu("nav_item", "nav_link", "error/error-404.html", "L'EQUIPE" ); ?>
                <?php echo add_menu("nav_item", "nav_link", "activite.php", "LES ACTIVITES" ); ?>
                <?php echo add_menu("nav_item", "nav_link", "error/error-404.html", "NOS OFFRES" ); ?>
                <?php echo add_menu("nav_item", "nav_link", "error/error-404.html", "PLANNIG" ); ?>
                <?php echo add_menu("nav_item", "nav_link", "error/error-404.html", "LE BLOG" ); ?>
                <?php echo add_menu("nav_item", "nav_link", "contact.php", "CONTACT");?>
                <!--<li class="nav-item active">
                    <a class="nav-link text-white pr-5" href="./error/error-404.html">L'EQUIPE</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white pr-5" href="activite.php">LES ACTIVITES </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  pr-5" href="./error/error-404.html">NOS OFFRES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  pr-5" href="./error/error-404.html">PLANNING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  pr-5" href="./error/error-404.html">LE BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  pr-5" href="contact.php">CONTACT</a>
                </li> -->
                <li class=" nav-item">
                    <a class=" text-white text-decoration-none nav-link" href="tel: >05 59 47 84 18">
                        <i class="iconify mobile" data-icon="fontisto:mobile-alt" style="color: white;"></i>05 59 47 84 18
                    </a>
                </li>
                <li class="nav-item ">
                    <a class=" nav-link reseaux" href="./error/error-404.html">
                        <i class="iconify" data-icon="dashicons:facebook" style="color: white;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link reseaux" href="./html/error-404.html">
                        <i class="iconify" data-icon="ant-design:instagram-outlined" style="color: white;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link reseaux" href="./html/error-404.html">
                        <i class="iconify" data-icon="cib:tripadvisor" style="color: white;"></i>
                    </a>
                </li>
            </ul>
            <button class="burger">
                <span class="bar"></span>
            </button>
        </nav>
    </header>
        <!--NAV START-->
         <!--CAROUSEL START-->


        <?php if ($name_url[2] == "index.php") : ?>
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active rond-slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rond-slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rond-slide"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/slider/slide_1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-slide text-center mb-5">2 INSCRIPTIONS SIMULTANEES = UN 3EME ABONNEMENT DE 6 MOIS OFFERT</h4>
                        <button class="p-3 bg-transparent border-white rounded text-white mb-5 mt-5">Plus d'infos</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/slider/slide_2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/slider/slide_3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
        </div>
        <?php endif; ?>
         