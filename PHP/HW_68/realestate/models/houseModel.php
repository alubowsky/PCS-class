<?php
    include_once 'utils/db.php';
    include_once 'house.php';
    $db = new db("mysql:host=localhost;dbname=test","test", 'password');
    $dbInstance = $db->getDB();

    if (! empty($houseId)) {
        try {
            $query = "SELECT * FROM houses WHERE id = :id";
            $statement =$dbInstance->prepare($query);
            $statement->bindValue('id', $houseId);
            $statement->execute();
            $data = $statement->fetch(PDO::FETCH_ASSOC);
            //print_r($thisHouse);
            if (empty($data)) {
                $error = "Unable to find house $houseId";
            }
            else {
                $thisHouse = new house($data);
                //header("Location: views/error.php?action=details"); 
            }
        } catch(PDOException $e) {
            $error = "Something went wrong " . $e->getMessage();
        }
    } else {
        $error = "No house id set to find";
    }
?>