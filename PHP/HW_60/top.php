<?php
    $color = "black";
    $font = "Arial";

    if(!empty($_GET["color"])){
       $color = $_GET["color"];
    }
    
    if(!empty($_GET["font-family"])){
        if($_GET["font-family"] == "other"){
            if(!empty($_GET["font"])){
                $font = $_GET["font"];
            }
        }
        else{
            $font = $_GET["font-family"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            color: <?= $color ?>;
            font-family:  <?= $font ?>;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="logo img/logo.jpg" alt = "logo" class= "navbar-brand" />
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="page1.php">Page 1</a></li>
                        <li><a href="page2.php">Page 2</a></li>
                        <li><a href="page3.php">Page 3</a></li>
                    </ul>
                </div>
            </div>
            </nav>
    </header>
    <div class="container">
        <div class="jumbotron text-center">
                <h1>Color and font chooser</h1>
        </div>
        