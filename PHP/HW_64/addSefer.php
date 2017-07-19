<?php 
    include "db.php";
    try{
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                if(empty($_POST['name'])){
                    $error = "name is a required field";
                }
                else if(empty($_POST['price']) || !is_numeric($_POST['price'])){
                    $error = "price needs to be a number greater than 0";
                }
                else{
                    $theName = $_POST['name'];
                    $thePrice =  $_POST['price'];
                    $query = "INSERT INTO seforim (name, price) VALUES (:theName, :thePrice)";
                    $statement = $db->prepare($query);
                    $statement->bindValue('theName', $theName);
                    $statement->bindValue('thePrice', $thePrice);                
                    if($statement->execute()){
                        $success = "You have successfully added the $theName to the Seforim Center";
                    }
                }
            }
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }
    include "top.php";
?>


        <form class="form-horizontal" method = "POST">
             <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name of Sefer</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name = "name"placeholder="Sefer" required>
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-2 control-label">Price</label>
                <div class="col-sm-10">
                <input type="decimal" class="form-control" id="price" name = "price" placeholder="Sefer" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Sell your sefer</button>
                </div>
            </div>
        </form>

        <?php if(isset($success)) : ?>
            <h2 class="text-center alert alert-success">
                <?=$success?>
            </h2>
        <?php endif ?>

        <div class="col-sm-offset-5 col-sm-2 text-center">
            <a href="seforim.php" class= "btn btn-info">To look for seforim Click Here!</a>
        </div>

        