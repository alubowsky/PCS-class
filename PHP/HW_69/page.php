<?php


class page{
    public function __construct($pageName, $pageContent){ ?>
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?php $pageName ?></title>
        
            <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
            
        </head>
        
        <body>
            <div class="jumbotron">
                <div class="container text-center">
                    <h1><?= $pageName?></h1>
                    <h2><?= $pageContent?></h2>
                </div>
            </div>
        </body>
        </html>
    <?php }
}

?>