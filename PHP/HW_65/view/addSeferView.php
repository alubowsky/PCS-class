<?php 
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

        <div class=" row col-sm-offset-5 col-sm-2 text-center">
            <a href="seforimController.php" class= "btn btn-info">To look for seforim Click Here!</a>
        </div>
        
<?php
    include "bottom.php";
?>
        