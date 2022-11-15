/*FUNCTION TOGGLE MENU START*/
$(document).ready(() => {

    function toggleMenu() {  // je creer ma function toggle menu
        $('.burger').on('click', function () {  // je target le nom de class de mon button qui est  burger et je lui dis que quand on click ma Function s'activera
            $('.navbar').toggleClass('show-nav');//je target le nom de class mde ma nav qui est navbar et je cible show-nav qui est une class css  avec un toggle ce qui permetra d'ajouter ou d'enlever show-nav
        });
    }
    toggleMenu();// j'appel ma function toggle menu

    /*FUNCTION TOGGLE MENU END*/



    /*FUNCTION CHANGE COLOR ON SCROLL START*/

    function changeColorOnScroll() { //je cree ma function changeColorOnScroll
        $(window).scroll(function () { //Quand on scroll sur la fenetre(window) function utiliser
            var scroll = $(window).scrollTop(); // variable scroll = quand on srcoll vertiacelment sur la fenetre
            if (scroll > 300) {// si le srcoll est plus grand que 300px alors
                $(".navbar").css("background", "#000");// je selectionne la navbar qui prend la couleur defini sur le background ici meme
            } else {
                $(".navbar").css("background", "");//sinon je selectionne la navbar qui reste transparente 
            }
        });
    };
    changeColorOnScroll();//j'appel ma function

    /*FUNCTION CHANGE COLOR ON SCROLL END*/



    /*FUNCTION MYFORM START*/
    // let pathArr = location.pathname.split("/");
    // if (pathArr.includes("contact.php")) {
    //     $("#myForm").on("submit", validForm);
    //     function validForm(e) {
    //         let myRegex = (/^[a-zA-Z]+$/);
    //         let myRegexNumb = (/^[.0-9 ]+$/);
    //         let myRegexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    //         if ($("#nom").val() === "") {//Si!! val()r de nom strictement egale a ""(rien d'ecrit)
    //             $('#errorName').html("Saisie ton Prenom!!");// cible mon span par son id(#errorName) et avec .htm ecrit "Saisie ton prenom!!"
    //             $('#errorName').css('color', 'red');// cible mon span par son id (#errorName) et avec .css rajoute couleur du text en rouge en utilisant ("color","red")
    //             $("#nom").css("border", "solid 1px red"); //cible mon input par son id (#nom) et avec .css rajoute la border de l'input en  solid 1px et rouge("border"), (solid 1px red)
    //             e.preventDefault();
    //         }
    //         else if (!myRegex.test($("#nom").val())) {// Sinon-Si!! le test de ma Regex est different de la valeur rentrer dans mon input (#nom)
    //             $('#errorName').html("Mauvaise Saisie!!");// cible mon span par son id(#errorName) et avec .htm ecrit "Mauvaise Saisie!!"
    //             $('#errorName').css("color", "red");// cible mon span par son id (#errorName) et avec .css rajoute couleur du text en rouge en utilisant ("color","red")
    //             $('nom').css("border", "solid 1px red"); //cible mon input par son id (#nom) et avec .css rajoute la border de l'input en  solid 1px et rouge("border"), (solid 1px red)
    //             e.preventDefault();
    //         }
    //         else {//Sinon!!
    //             $('#errorName').html("Saisie Valide!!");// cible mon span par son id(#errorName) et avec .html ecrit "Saisie Valide!!"
    //             $('#errorName').css("color", "green");// cible mon span par son id (#errorName) et avec .css rajoute couleur du text en vert en utilisant ("color","green")
    //             $("#nom").css("border", "solid 1px green");//cible mon input par son id (#nom) et avec .css rajoute la border de l'input en  solid 1px et rouge("border"), (solid 1px red)
    //         }
    //         if ($("#prenom").val() === "") {
    //             $("#errorFirstName").html("Saisie ton Nom");
    //             $("#errorFirstName").css("color", "red");
    //             $("#prenom").css("border", "solid 1px red");
    //             e.preventDefault();
    //         }
    //         else if (!myRegex.test($("#prenom").val())) {
    //             $("#errorFirstName").html("Pas de chiffre dans ton nom!!");
    //             $("#errorFirstName").css("color", "red");
    //             $("#prenom").css("border", "solid 1px red");
    //             e.preventDefault();
    //         }
    //         else {
    //             $("#errorFirstName").html("Bravo!!");
    //             $("#errorFirstName").css("color", "green");
    //             $("#prenom").css("border", "solid 1px green");
    //         }
    //         if ($("#number").val() === "") {
    //             $("#errorTel").html("Saisie ton numero de tel");
    //             $("#errorTel").css("color", "red");
    //             $("#number").css("border", "solid 1px red");
    //             e.preventDefault();
    //         }
    //         else if (!myRegexNumb.test($("#number").val())) {
    //             $("#errorTel").html("Mauvaise Saisie");
    //             $("#errorTel").css("color", "red");
    //             $("#number").css("border", "solid 1px red");
    //             e.preventDefault();
    //         }
    //         else {
    //             $("#errorTel").html("Bravo!!");
    //             $("#errorTel").css("color", "green");
    //             $("#number").css("border", "solid 1px green");
    //         }
    //         if ($("#email").val() === "") {
    //             $("#errorEmail").html("Saisie ton e-mail");
    //             $("#errorEmail").css("color", " red");
    //             $("#email").css("border", "solid 1px red");
    //             e.preventDefault();
    //         }
    //         else if (!myRegexMail.test($("#email").val())) {
    //             $("#errorEmail").html("e-mail non valide");
    //             $("#errorEmail").css("color", " red");
    //             $("#email").css("border", "solid 1px red");
    //             e.preventDefault();
    //         }
    //         else {
    //             $("#errorEmail").html("Bravo!!");
    //             $("#errorEmail").css("color", " green");
    //             $("#email").css("border", "solid 1px green");
    //         }
    //     }
    // } 

    let name = $("#nom");
    let prename = $("#prenom");
    let mail = $("#email");
    let phone = $("#number");
    let sujet = $("#sujet");
    let message = $("#message");
    
    // Error SPAN
    let error_name = $("#errorName");
    let error_prename = $("#errorFirstName");
    let error_mail = $("#errorEmail");
    let error_phone = $("#errorTel");
    let errorSujet = $("#errorSujet");
    let errorMessage = $("#errorMessage");
    
    
    // Regex
    let myRegex = /^[a-zA-Z-\s]+$/;
    let myRegexNum = /^[0-9]+$/;
    let myRegexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    // Form 
    let myForm = $("#myForm")
    // Listen event
    myForm.on('submit', valide_f);
    
    function valide_f(e) {
        if (name.val() == "") {
            error_name.css("display", "block")
            name.addClass("control-danger")
            name.removeClass("control-success")
            e.preventDefault();
    
        } else if (!myRegex.test(name.val())) {
            error_name.css("display", "block")
            name.addClass("control-danger")
            name.removeClass("control-success")
            e.preventDefault();
        } else {
            error_name.css("display", "none")
            name.addClass("control-success")
            name.removeClass("control-danger")
        }
        if (prename.val() == "") {
            error_prename.css("display", "block")
            prename.addClass("control-danger")
            prename.removeClass("control-success")
            e.preventDefault();
        } else if (!myRegex.test(prename.val())) {
            error_prename.css("display", "block")
            prename.addClass("control-danger")
            prename.removeClass("control-success")
            e.preventDefault();
        } else {
            error_prename.css("display", "none")
            prename.addClass("control-success")
            prename.removeClass("control-danger")
        }
        if (mail.val() == "") {
            error_mail.css("display", "block")
            mail.addClass("control-danger")
            mail.removeClass("control-success")
            e.preventDefault();
        } else if (!myRegexMail.test(mail.val())) {
            error_mail.css("display", "block")
            mail.addClass("control-danger")
            mail.removeClass("control-success")
    
            e.preventDefault();
        } else {
            error_mail.css("display", "none");
            mail.addClass("control-success")
            mail.removeClass("control-danger")
        }
        if (phone.val() == "") {
            error_phone.css("display", "block")
            phone.addClass("control-danger")
            phone.removeClass("control-success")
            e.preventDefault();
        } else if (!myRegexNum.test(phone.val()) || phone.val().length != "10") {
            error_phone.css("display", "block")
            phone.addClass("control-danger")
            phone.removeClass("control-success")
            e.preventDefault();
        } else {
            error_phone.css("display", "none")
            phone.addClass("control-success")
            phone.removeClass("control-danger")
        }
        if (sujet.val() == "") {
            errorSujet.css("display", "block")
            sujet.addClass("control-danger")
            sujet.removeClass("control-success")
            e.preventDefault();
        } else if (!myRegex.test(sujet.val())) {
            errorSujet.css("display", "block")
            sujet.addClass("control-danger")
            sujet.removeClass("control-success")
            e.preventDefault();
        } else {
            errorSujet.css("display", "none");
            sujet.addClass("control-success")
            sujet.removeClass("control-danger")
        }
        if (message.val() == "") {
            errorMessage.css("display", "block")
            message.addClass("control-danger")
            message.removeClass("control-success")
            e.preventDefault();
        } else if (!myRegex.test(message.val())) {
            errorMessage.css("display", "block")
            message.addClass("control-danger")
            message.removeClass("control-success")
            e.preventDefault();
        } else {
            errorMessage.css("display", "none");
            message.addClass("control-success")
            message.removeClass("control-danger")
        }
    }

})
/*FUNCTION MYFORM END*/