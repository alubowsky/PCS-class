<?php
    $cs = "mysql:host=localhost;dbname=contacts";
    $user = "phpuser";
    $password = 'p@$$w0rd';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
        //header('HTTP/1.0 500 Internal Server Error');
        http_response_code(500);
        echo $error;
    }
?>