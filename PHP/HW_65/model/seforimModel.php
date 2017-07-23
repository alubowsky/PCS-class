<?php include "db.php";
    try {
        $query = "SELECT id, name FROM seforim";
        $results = $db->query($query);
        $seforim = $results->fetchAll();
        $results->closeCursor();
    
        if(isset($_GET["sefer"])) {
            if(empty($_GET["sefer"] || !is_numeric($_GET["sefer"]))) {
                $error = "A valid sefer id must be submitted";
            } else {
                $theId = $_GET['sefer'];
                $query = "SELECT id, name, price FROM seforim WHERE id = :theId";
                $statement = $db->prepare($query);
                $statement->bindValue('theId', $theId);
                $statement->execute();
                $selectedSefer = $statement->fetch();
                if(empty($selectedSefer)) {
                    $error = "Couldn't find sefer {$theId}";
                }
            }
        }
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }
?>