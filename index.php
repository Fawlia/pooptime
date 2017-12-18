<?php

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', rtrim($uri, '/'));


if ($parts[1] == "pooptime") {

    switch ($parts[2]) {

        case "" :
            header('Location: http://pooptime/home');
            break;

        case "home" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/map_france.html";
            include_once "view/footer.html";
            break;


        case "histoire" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/history.html";
            include_once "view/footer.html";
            break;


        case "top_ten" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/top_ten.html";
            include_once "view/footer.html";
            break;


        case "load" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/load.html";
            include_once "view/footer.html";
            break;


        case "fun_facts" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/fun_facts.html";
            include_once "view/footer.html";
            break;


        case "form_contact" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/form_contact.html";
            include_once "view/footer.html";
            break;


        case "form_ajout" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/form_ajout.html";
            include_once "view/footer.html";
            break;


        case "avis" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/avis.html";
            include_once "view/footer.html";
            break;


        case "about" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/about.html";
            include_once "view/footer.html";
            break;


        case "description_wc" :

            include_once "db_config.php";

            include_once "view/header.html";
            include_once "view/description_wc.html";
            include_once "view/footer.html";
            break;


        default :
            include_once "view/header.html";
            include_once "view/404.html";
            include_once "view/footer.html";
            break;

    }
}







?>