<?php
include_once "utils/link.php";

if(!isset($page)) {
    $page = 0;
}
?>

<div class="row">
    <div class="col-sm-1">
        <a class="btn btn-primary" href="<?=getLink(["page" => $page - 1])?>"
        <?php if ($page === 0) echo " disabled"; ?>>prev</a>
    </div>
    <div class="col-sm-1 col-sm-offset-10">
        <a class="btn btn-primary" href="<?=getLink(["page" => $page + 1])?>"
        <?php if (($numPerPage > $totalHouses) || ($totalHouses % $numPerPage === 0)) echo " disabled"; ?>>next</a>
    </div>
</div>