<?php 
    include "top.php";
    include 'filter.php';
?>
    <form class="form-horizontal">
        
        <div class = "col-sm-9">
            <div class="form-group">
                <label for="sefer" class="col-sm-2 control-label">Select A Sefer</label>
                <div class="col-sm-10">
                <select class="form-control" id="sefer" name="sefer">
                        <?php foreach($seforim as $sefer) :?>
                        <option value="<?= $sefer['id'] ?>"
                        <?php if (!empty($selectedSefer) && $sefer['id'] == $selectedSefer['id']) echo "selected" ?>
                        ><?= $sefer["name"] ?></option>
                        <?php endforeach ?>
                </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Get Info</button>
                </div>
            </div>
        </form>
        </div>

        <?php if(!empty($selectedSefer)) : ?>
            <h2 class="text-center">
                <?= $selectedSefer['name'] ?> is $<?= number_format($selectedSefer['price'], 2) ?>
            </h2>
        <?php endif ?>
        <div class = "row">
        <div class="col-sm-offset-2 col-sm-2 text-center">
            <a href="index.php?action=addSefer" class= "btn btn-info">To sell your seforim Click Here!</a>
        </div>
        <div class="col-sm-offset-2 col-sm-2 text-center">
            <a href="index.php?action=deleteSefer" class= "btn btn-info">To remove a sefer click here</a>
        </div>
        </div>
<?php 
    include "bottom.php";
?>
  