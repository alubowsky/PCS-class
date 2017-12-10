<?php
require 'db.php';

$query = "SELECT * FROM recipes";
$stmt = $db->query($query);
$recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query = 'SELECT r.recipe_name, i.name FROM recipe_ingredients
JOIN recipes r  ON  recipe_ingredients.recipe_Id = r.recipe_id
JOIN ingredients i ON recipe_ingredients.ingredient_Id = i.ingredient_id';

$ingredients [] = "";

$stmt = $db->query($query);
$ingredientData = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($ingredientData);
for($i = 0; $i < count($recipes); $i++){
    for($j = 0; $j < count($ingredientData); $j++){
        if($recipes[$i]['recipe_name'] === $ingredientData[$j]['recipe_name']){
            /*if(!isset($ingredients)){
                $ingredients [] = "";
            }*/
            $ingredients [] = $ingredientData[$j]['recipe_name'];
        }
    }
    array_push($recipes, $ingredients);
    $ingredients [] = "";
}
print_r($recipes[0]);



//echo json_encode($recipes);
?>