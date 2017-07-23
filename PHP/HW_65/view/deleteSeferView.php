<?php 
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
        <div>
            <h2 class="text-center alert alert-success">
                <?=$success?>
            </h2>
        </div>
    <?php endif ?>

    <div class="col-sm-offset-5 col-sm-2 text-center">
        <a href="seforimController.php" class= "btn btn-info">To look for seforim Click Here!</a>
    </div>
<?php
    include "bottom.php";
?>