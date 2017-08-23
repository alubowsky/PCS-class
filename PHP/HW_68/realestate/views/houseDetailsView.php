<?php
    $styles = "
        img {
            width: 400px;
            height: 210px;
            margin-bottom: 8px;
        }

        .well:first-of-type {
            background: none;
            border: none;
            box-shadow: none;
        }
    ";
    include 'top.php';
?>
    <?php if (isset($thisHouse)) : ?>
        <div class="row">
            <div class="text-center"><img src="<?= $thisHouse -> getHousePart("picture") ?>" alt="picture of the house"/></div>
        </div>
        <div class="row">
            <div class="well col-sm-2 text-right">Address</div><div class="well col-sm-8"><?= $thisHouse -> getHousePart("address") ?></div>
        </div>
        <div class="row">
            <div class="well col-sm-2 text-right">City</div><div class="well col-sm-8"><?= $thisHouse -> getHousePart("city") ?></div>
        </div>
        <div class="row">
            <div class="well col-sm-2 text-right">State</div><div class="well col-sm-8"><?= $thisHouse -> getHousePart("state") ?></div>
        </div>
        <div class="row">
            <div class="well col-sm-2 text-right">Zip</div><div class="well col-sm-8"><?= $thisHouse -> getHousePart("zip") ?></div>
        </div>
        <div class="row">
            <div class="well col-sm-2 text-right">Price</div><div class="well col-sm-8"><?= $thisHouse -> getHousePart("price") ?></div>
        </div>
        <div class="row">
            <div class="well col-sm-2 text-right">Notes</div><div class="well col-sm-8"><?= $thisHouse -> getHousePart("notes") ?></div>
        </div>
    <?php endif ?>
<?php if (!empty($error)) : ?>
    <div class="well col-sm-8 text-center alert-danger"><?= $error ?></div>
<?php endif;
    include 'bottom.php';
?>