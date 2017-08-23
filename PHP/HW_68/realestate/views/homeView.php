<?php
    $styles = "
        .house img {
            width: 206px;
            height: 150px;
        }

        .cheap {
            color: red;
        }

        .cheap::before {
            content: \"ONLY \";
        }

        .cheap::after {
            content: \" !!\"
        }
    ";

    include 'top.php';
?>
    <div class="row">
        <?php include 'filters.php' ?>

        <div class="col-sm-9">
            <?php include "pager.php"; ?>
            <div class="row">
                <?php 
                $i = 0;
                foreach($houses as $house) :
                ?>
                    <a href="index.php?action=details&houseId=<?= $house->getHousePart('id') ?>">
                        <div class="col-md-3 col-sm-4 house">
                            <figure>
                                <img src="<?= $house->getHousePart('picture') ?>" alt="picture of the house"/>
                            </figure>
                            <figcaption class="text-center">
                                <h6><?=$house->getHousePart('id')?></h6>
                                <h3 
                                    <?php if($house->getHousePart('price') < 1500000) echo "class=\"cheap\""?>
                                ><?= number_format($house->getHousePart('price'), 2) ?></h3>
                                <h4><?= $house->getHousePart('address')?></h4>
                                <h5><?= "{$house->getHousePart('city')}, {$house->getHousePart('state')} {$house->getHousePart('zip')}"?></h5>
                            </figcaption>
                        </div>
                    </a>
                    <?php
                    if (++$i % 3 === 0) {
                        echo '<div class="clearfix visible-sm-block"></div>';
                    }
                    if ($i % 4 === 0) {
                            echo '<div class="clearfix visible-md-block visible-lg-block"></div>';
                    }
                    ?>
                <?php endforeach ?>
            </div>
            <?php include "pager.php"; ?>
        </div>
    </div>
<?php
include 'bottom.php';
?>