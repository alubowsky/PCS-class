<?php 
spl_autoload_register(function ($className) {
    require lcfirst($className) . '.php';
});

$action = "home";
if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}

switch($action) {
    case 'home':
        $home = new Page("Home Page", "this is the Home Page");
        exit;
    case 'page2':   
        $page2 = new Page("Page 2", "this is Page 2");
        exit;
    case 'page3':   
        $page3 = new Page("Page 3", "this is Page 3");
        exit;
    default:
        $error = "Dont know how to $action";   
        $errorpage = new Page("ERROR", $error);
        exit;
}

?>
$p = new Page("Page 1", "Page one stuff");
?>