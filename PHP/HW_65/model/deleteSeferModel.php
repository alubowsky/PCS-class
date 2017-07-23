<?php 
    include "db.php";
    try{

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_GET["sefer"])) {
                if(empty($_GET["sefer"] || !is_numeric($_GET["sefer"]))) {
                $error = "A valid sefer id must be submitted";
                }
            }else{
                $theID = $_POST['sefer'];
                $query = "DELETE FROM seforim WHERE id = :theID";
                $statement = $db->prepare($query);
                $statement->bindValue('theID', $theID);               
                if($statement->execute()){
                    $success = "You have successfully removed the sefer from the Seforim Center";
                }
            }
        }

        $query = "SELECT id, name FROM seforim";
        $results = $db->query($query);
        $seforim = $results->fetchAll();
        $results->closeCursor();

    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }
?>
    