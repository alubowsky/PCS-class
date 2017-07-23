<?php
    include "top.php";

    function SeforimOptions($seforimData){
        foreach($seforimData as $sefer){
         $seferOpt .= "<option>" . $sefer['name'] . "</option>";
        }
        return $seferOpt;
    }
?>
        <form class="form-inline " action="prices.php">
            <div class="form-group">
                 <label>Select a Sefer:
                    <select name="sefer">
                    <?= SeforimOptions($seforimData) ?>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
<?php
    include "bottom.php";
?>