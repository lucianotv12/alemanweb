<?php
include 'funciones.php';
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

if (!isset($_GET["accion"])) {
    $accion = "home";
} else {
    $accion = $_GET["accion"];
}

switch ($accion){
    
    case "home":

        
        $template = new Template();
        $template->draw_header('home');
        include("view/index.php");
        Template::draw_footer('home');    

    break;    
    case "contactenos":

        
        $template = new Template();
        $template->draw_header('contactenos');
        include("view/contactenos.php");
        Template::draw_footer('home');    

    break;    

    case "cbu":
        $template = new Template();
        $template->draw_header('cbu');
        include("view/cbu.php");
        Template::draw_footer('home');    

    break;  

    
}//end switch


?>