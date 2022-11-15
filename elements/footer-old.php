
<?php if ($name_url[2] == "contact.php") : ?>
    <section class="container-fluid mt-5 p-0">
        <iframe class="map w-100" src="https://maps.google.com/maps?q=Biarrytz&t=&z=13&ie=UTF8&iwloc=&output=embed"
            style="height: 500px;" allowfullscreen></iframe>
    </section>
<?php endif ?>   

<section class="activite">
       
        <div class=" row img-footer no-gutters mt-5">
        <?php add_img("img_fluid", "./images/coach/coach_"); ?>
        </div>
    </section>


<?php if ($name_url[2] == "index.php") : ?>
<section class="partenaire container-fluid bg-grey mt-5">
        <h3 class=" title-partenaire text-center text-white pt-5 my-5">STUDIO SPORT & COACHING, NOS PARTENRAIRES</h3>
        <p class="text-partenaire text-center text-white">En tant que mebre du Studio Sport é Coaching, vous bénéficierez dans cet établissment d'avantages exclusifs.
            <a class="text-white text-decoration-none" href="./html/error-404.html">Cliquez ici</a>
             pour en savoir plus.</p>
        <div class="logo-partenaire w-80 d-flex justify-content-between align-items-center pt-5 pb-5">
            <img class="remove" src="./images/partenaires/mini.png" alt="">
            <img src="./images/partenaires/massage.png" alt="">
            <img class="remove" src="./images/partenaires/tellechea.png" alt="">
            <img src="./images/partenaires/ocean.png" alt="">
            <img src="./images/partenaires/decathlon.png" alt="">
        </div>
    </section>
    <?php endif ?>






<!--FOOTER START-->

<footer class="container-fluid p-0 bg-grey">
        <div class=" container text-footer pt-5 pb-3 d-flex justify-content-between align-items-center content-footer">
            <ul>
                <li class=" logo-footer text-white d-flex align-items-center">
                    <img src="./images/logo_footer.png" alt="" class="mr-3">
                    <h5>A PROPOS</h5>
                </li>
                <li class="text-white list-unstyled"><strong>2018 © Studio Sport Biarrytz</strong></li>
                <li class="text-white list-unstyled">Salle de sport, de fitness et de crossfit</li>
                <li class="text-white list-unstyled">à Biarrytz Pays Basques.</li>
                <li class="text-white list-unstyled">RCS : 000 000 000</li>
                <li class="list-unstyled"><a href="./html/error-404.html" class="text-white"><strong>Mentions Légales</strong></a></li>
            </ul>
            <ul>
                <li class=" text-white d-flex align-items-center">
                    <h5>STUDIO SPORT CORPORATE</h5>
                </li>
                <?php echo add_list("list-unstyled", "link-footer", "./html/error-404.html", "___Studio Center : créer votre studio") ?>
                <?php echo add_list("list-unstyled", "link-footer", "./html/error-404.html", "___Studio Center : créer votre studio") ?>
                <?php echo add_list("list-unstyled", "link-footer", "./html/error-404.html", "___Studio Center : créer votre studio") ?>
                <!--<li class="list-unstyled">
                    <a class="link-footer text-white text-white text-decoration-none" href="./html/error-404.html"><strong>___Studio Center : créer votre studio</strong></a>
                </li>
                <li class="list-unstyled">
                    <a class="link-footer text-white text-white text-decoration-none" href="./html/error-404.html"><strong>___Studio Center : créer votre studio</strong></a>
                </li>
                <li class="list-unstyled">
                    <a class="link-footer text-white text-white text-decoration-none" href="./html/error-404.html"><strong>___Studio Center : créer votre studio</strong></a>
                </li>-->
            </ul>
            <ul>
                <li class=" text-white d-flex align-items-center">
                    <h5 class="mb-5">FITNESS, CROSSFIT ET TRAINNING AU PAYS BASQUES</h5>
                </li>
                <li class="text-white list-unstyled">
                    <strong>Coach personnal de sport à Biarrytz,</strong>
                    <a class="link-footer text-white text-decoration-none" href="./html/error-404.html">
                        <strong>Coach personnel de sport à Anglet, Salle</strong>
                    </a>
                </li>
                <li class="text-white list-unstyled">
                    <strong>de sport BAB, Fitness à Biarrytz, Sessions de fitness àAnglet</strong>
                </li>
                <li class="text-white list-unstyled">
                    <strong>Autre mot clé+ville, Autre mot clé+ville</strong>
                </li>
            </ul>
        </div>
        <div class="bg-black  d-flex justify-content-center align-items-center pt-2">
            <ul>
                <li class="text-white list-unstyled">Un site créer par</li>
                <li class="text-white list-unstyled">
                    <strong>L'AGENCE 364 COM'</strong>
                </li>
            </ul>
            <img class="pl-2" src="./images/364.png" alt="">
        </div>
        
    </footer>
    <!--FOOTER END-->
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>

</html>