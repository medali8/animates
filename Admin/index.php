<?php
if (isset($_REQUEST["controller"]))
$controller = $_REQUEST["controller"];
else {
    $controller ="product";
}
if (isset($_REQUEST["action"]))
$action = $_REQUEST["action"];
else {
    $action="lister";
}
switch ($controller){
    case "product":
        require "../controller/productController.php";
        break ;
    case "categorie":
        require "../controller/categorieController.php";
        break ;
    case "commande":
        require "../controller/commandeController.php";
        break ;
    case "clients" :
        require "../controller/clientController.php";
        break ;
}