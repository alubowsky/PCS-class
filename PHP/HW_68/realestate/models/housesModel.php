<?php 
    include_once 'house.php';
    include_once 'utils/db.php';
    $db = new db("mysql:host=localhost;dbname=test","test", 'password');
    $dbInstance = $db->getDB();
   

if (empty($zip)) {
    $zip = '';
}

if (empty($min)) {
    $min = '';
}

if (empty($max)) {
    $max = '';
}

if (empty($page)) {
    $page = 0;
}

$numPerPage = 4;

try {
    $query = "SELECT * FROM houses WHERE (:zip = '' OR zip=:zip)
                                    AND (:min = '' OR price >= :min)
                                    AND (:max = '' OR price <= :max)
                                    LIMIT :page, :perPage";

    $statement = $dbInstance->prepare($query);
    $statement->bindValue('zip', $zip);
    $statement->bindValue('min', $min);
    $statement->bindValue('max', $max);
    $statement->bindValue('page', (int)$page * $numPerPage, PDO::PARAM_INT);
    $statement->bindValue('perPage', $numPerPage, PDO::PARAM_INT);

    /*$statement->execute();
    $houses = $statement->fetchAll();
    $statement->closeCursor();*/

    $statement->execute();
    $results = $statement->fetch(PDO::FETCH_ASSOC);

    
    while($results) {
        $houses [] = new house($results);
        $results = $statement->fetch(PDO::FETCH_ASSOC);
    };
    
    $totalHouses = count($houses);

} catch (PDOException $e) {
    $error = "Something went wrong " . $e->getMessage();
}
?>