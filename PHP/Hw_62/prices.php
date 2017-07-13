<?php
    include "top.php";
    try{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $sefer = $_GET['sefer'];
        $query = "SELECT * FROM seforim WHERE name = '$sefer'";
        $results = $db->query($query);
        $seforimData = $results->fetch();
        $results->closeCursor();
    }
    catch(PDOException $e){
        die("something went wrong" . $e ->getMessage());
    }
?>
    <div class="well text-center">
        <h1>Name: <?= $seforimData['name']?> Price: $<?= $seforimData['price']?></h1>
    </div>
<?php
    include "bottom.php";
?>