<?php
$offset = 0;
if(! empty($_POST["prev"])) {
    $offset = ($_POST["prev"]);

}

if(! empty($_POST["next"])) {
    $offset = $_POST["next"];
}
?>