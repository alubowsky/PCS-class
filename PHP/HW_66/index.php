<?php
$action = "home";
if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}

switch($action) {
    case 'home':
        include 'controller/homeController.php';
        exit;
    case 'addSefer':
        include 'controller/addSeferController.php';
        exit;
    case 'deleteSefer':
        include 'controller/deleteSeferController.php';
        exit;
    default:
        $error = "Dont know how to $action";
        include 'view/error.php';
        exit;
}

?>