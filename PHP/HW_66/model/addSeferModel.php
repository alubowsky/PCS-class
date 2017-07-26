<?php 

    include "db.php";
        if(!empty($theName) && !empty($thePrice && !empty($thecatagory))){
            try{
                $query = "INSERT INTO seforim (name, price, catagory) VALUES (:theName, :thePrice, :theCatagory)";
                $statement = $db->prepare($query);
                $statement->bindValue('theName', $theName);
                $statement->bindValue('thePrice', $thePrice);
                $statement->bindValue('theCatagory', $thecatagory);                 
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