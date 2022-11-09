<?php
function add_img (string $class_img = "", $url_img, $combien_img = 7) : void
{
    for ($i = 1 ; $i < $combien_img ; $i++){
        echo <<<HTML
                <div class="col-2 p-0 coach">
                    <img class="$class_img img_width" src="$url_img$i.jpg" style="width: 300px" alt="">
                </div>
HTML;
    }
}


 function add_menu(string $class_item, string $class_link, string $class_url, string $title){
    return <<<HTML
<li class="$class_item active">
<a class="$class_link text-white pr-5" href="$class_url">$title</a>
</li>
HTML;
}

 function add_list(string $class_list, string $class_link_footer, string $class_url_footer, string $title_footer){
    return <<<HTML
        <li class="$class_list">
                    <a class="$class_link_footer text-white text-white text-decoration-none" href="$class_url_footer"><strong>$title_footer</strong></a>
                </li>
HTML;
}

//function des mes requete sql
//function insert_sql(){
//$sql = "INSERT INTO user ($champs) ";
//$sql .= "VALUES ($donnees)";
    //if(inset_sql("user","nom,prenom,mail",
    //"'$_POST[nom]','$_POST[prenom]','$_POST[mail]'"))
    //echo"L'ajout a été effectué avec succès";
    //else echo"L'ajout a échoué";
//}
?>