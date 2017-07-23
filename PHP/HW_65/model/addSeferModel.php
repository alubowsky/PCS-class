<?php 
    include "db.php";
        if(!empty($theName) && !empty($thePrice)){
            try{
                $query = "INSERT INTO seforim (name, price) VALUES (:theName, :thePrice)";
                $statement = $db->prepare($query);
                $statement->bindValue('theName', $theName);
                $statement->bindValue('thePrice', $thePrice);                
                if($statement->execute()){
                    $success = "You have successfully added the $theName to the Seforim Center";
                }
            } catch (PDOException $e) {
                $error = "Something went wrong " . $e->getMessage();
            }
        }else{
            $error = "name and price not set correctly";
        }
?>