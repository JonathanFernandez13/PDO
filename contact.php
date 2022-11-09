<?php include_once "elements/header-old.php";?>
<?php
ob_start();
session_start();
?>
    <section class="container">
        <div class="row">
            <div class="col-4 coordonnee">
                <h3 class="title-coordonnee text-center mt-5 mb-5">NOS COORDONNÉES</h3>
                <ul class="list-unstyled ml-5">
                    <li class="font-weight-bold">
                        Studio sport & coaching
                    </li>
                    <li>
                        01 Allée Marie Polizer
                    </li>
                    <li class="pb-5">
                        64200 Biarrytz
                    </li>
                    <li class="font-weight-bold">
                        Téléphone
                    </li>
                    <li class="pb-5">
                        <a href="tel: >05 59 47 84 18">
                            05 59 47 84 18
                        </a>
                    </li>
                    <li class="font-weight-bold">
                        Horaires
                    </li>
                    <li>
                        Du Lundi au Vendredi
                    </li>
                    <li>
                        De 8h à 14h, de 16h à 21h
                    </li>
                    <li>
                        Le Samedi
                    </li>
                    <li class="pb-5">
                        de 10h à 13h
                    </li>
                    <li class="font-weight-bold">
                        Email
                    </li>
                    <li>
                        <a href="mailto: studiobiarrytz.com">
                            Contact (at) studiobiarrytz.com
                        </a>
                    </li>
                    <li>
                        Ou via ce formulaire
                    </li>
                </ul>
            </div>
            <div class="col-8 coordonnee">
                <h3 class="title-formulaire mt-5 mb-5">FORMULAIRE DE CONTACT</h3>
                   <?php if (isset($_GET["add"]) && $_GET["add"] == 1) : ?>
                    <div class="alert alert-success">Formulaire envoyé avec success.</div>
                    <?php  header("refresh:2;url=index.php"); ?>
                <?php elseif (isset($_GET["add"]) &&  $_GET["add"] == 0) :  ?>
                    <div class="alert alert-danger">Formulaire non envoyé.</div>
                <?php endif; ?> 
        
                <form method="POST" action="verif-contact.php" id="myForm">
                    <div class="row mb-4">
                        <div class="col-md-5">
                            <div class="form-outline">
                                <input type="text"  name="nom" id="nom" class="form-control bg-light" placeholder="VOTRE NOM" />
                                <span id="errorName">Nom invalide!!</span>
                                <label class="form-label" for="nom"></label>
                            </div>
                        </div>
                        <div class="col-md-5 md">
                            <div class="form-outline">
                                <input type="text" name="prenom" id="prenom" class="form-control bg-light" placeholder="VOTRE PRENOM" />
                                <span id="errorFirstName">Prenom invalide!!</span>
                                <label class="form-label" for="prenom"></label>
                            </div>
                        </div>
                    </div>
                    <!-- Email input -->
                    <div class="row mb-4">
                        <div class="col-md-5">
                            <div class="form-outline">
                                <input type="email" name="email" id="email" class="form-control bg-light" placeholder="VOTRE EMAIL" />
                                <span id="errorEmail">Email invalide!!</span>
                                <label class="form-label" for="email"></label>
                            </div>
                        </div>
                        <!-- number input -->
                        <div class="col-md-5">
                            <div class="form-outline">
                                <input type="number" name="tel" id="tel" class="form-control bg-light" placeholder="VOTRE TELEPHONE" />
                                <span id="errorTel">Telephone invalide!!</span>
                                <label class="form-label" for="number"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-outline">
                        <input type="text" name="sujet" id="sujet" class="form-control bg-light" placeholder="SUJET" />
                        <span id="errorSujet">Sujet invalide!!</span>
                        <label class="form-label" for="sujet"></label>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline">
                        <textarea class="form-control bg-light" name="message" id="message" rows="4" placeholder="MESSAGE"></textarea>
                        <span id="errorMessage">Message invalide!!</span>
                        <label class="form-label" for="form6Example7">Additional information</label>
                    </div>
                    <!-- Submit button -->
                    <input type="submit" value=" Envoyer" class="btn btn-dark btn-block mb-4" />
                </form>
            </div>
        </div>
    </section>
<?php include_once "elements/footer-old.php" ?>