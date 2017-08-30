<?php
    $date = date_default_timezone_set('America/Chicago');
    
    $date = date('m/d/Y h:i:s a', time());

    setCookie("dateCookie", "$date", time() + (60 * 60 * 24 * 365)); // cookie will last a year


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie Page</title>
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class = "container text-center">
        <div class = "jumbotron">
            <h1>The Cookie Page</h1>
        </div>
        <?php if(empty($_COOKIE["dateCookie"])) : ?>
            <h2>Welcome to the Cookie Page. This is your first time here!!</h2>
        <?php elseif(!empty($_COOKIE["dateCookie"])) : ?>
            <h2> Welcome back to the Cookie Page. You last visited on <?= $date ?> </h>
        <?php endif ?>
    </div>
</body>
</html>
