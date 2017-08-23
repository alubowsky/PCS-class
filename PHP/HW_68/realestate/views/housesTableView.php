<?php
    function getTd($value, $houseId) {
        $it = "<td><a href=\"index.php?action=details&houseId=$houseId\">$value</a></td>";
        return $it;
    }

    $styles = "
        .house img {
            width: 131.24px;
            height: 98px;
        }
    ";
    include 'top.php';
?>
    <div class="row">
        <?php include 'filters.php' ?>

        <div class="col-sm-9">
            <?php include "pager.php"; ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Price</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Picture</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($houses as $house) :?>
                    <tr class="house">
                        <?= getTd(number_format($house->getHousePart('price'), 2), $house->getHousePart('id')) ?>
                        <?= getTd($house->getHousePart('address'), $house->getHousePart('id')) ?>
                        <?= getTd($house->getHousePart('city'), $house->getHousePart('id')) ?>
                        <?= getTd($house->getHousePart('state'), $house->getHousePart('id')) ?>
                        <?= getTd($house->getHousePart('zip'), $house->getHousePart('id')) ?>
                        <td><a href="houseDetailsController.php?houseId={$house->getHousePart('id')}"><img src= "<?= $house->getHousePart('picture') ?>" alt="the house"/></a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php include "pager.php"; ?>
        </div>
    </div>
<?php
include 'bottom.php';
?>