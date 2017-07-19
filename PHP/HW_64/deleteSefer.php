<?php 
    include "db.php";
    try{
        $query = "SELECT id, name FROM seforim";
        $results = $db->query($query);
        $seforim = $results->fetchAll();
        $results->closeCursor();

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
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }
    include "top.php";
?>


        <form class="form-horizontal" method = "POST">
             <div class="form-group">
                <label for="sefer" class="col-sm-2 control-label">Select A Sefer</label>
                <div class="col-sm-10">
                <select class="form-control" id="sefer" name="sefer">
                        <?php foreach($seforim as $sefer) :?>
                        <option value="<?= $sefer['id'] ?>"> <?= $sefer["name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">DELETE sefer</button>
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

        